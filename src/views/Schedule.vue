<script setup>
import Breadcrumb from '../components/Breadcrumb.vue'
import NotFound from './NotFound.vue'
import Table from './Table.vue'
import { timeBlocks, schedules, lectures, profiles } from '../data'

const blocks = timeBlocks.map((block, i) => {
    return {
        time: block,
        schedules: schedules.map(schedule => {
            return schedule.rundowns
            .filter(rundown => {
                return rundown.started === block
            })[0]
            // return filtered ?? searchPrevious(schedule.rundowns, block, i)
        })
    }
})
// periksa ketersediaan rangkaian acara, tambahkan lecture
const blocked = blocks.map((block, i) => {
    block.schedules = block.schedules.map((schedule, j) => {
        if (schedule) {

            if (schedule.lecture_id != undefined) {
                schedule.lecture = lectures[schedule.lecture_id]
                schedule.lecture.profile = profiles[schedule.lecture.profile_id]
            }

            return schedule
        }

        for (let index = 0; index < i; index++) {
            const previous = blocks[index].schedules[j]
            if (previous == undefined) {
                continue
            }

            if (index + previous.block > i) {
                return 1
            }
        }

        return undefined
    })

    return block
})
</script>

<template>
    <Breadcrumb title="REALS Schedule" :breads="[{
        to: '/',
        name: 'Home',
    }, {
        to: `/schedule`,
        name: 'Schedule',
    }]" />
    
    <section id="applications" class="p-8 lg:p-16 min-h-screen">
        <Table class="[&_td]:border [&_td]:max-w-lg">
            <tr>
                <th></th>
                <th v-for="(schedule, i) in schedules" :key="i" v-text="schedule.date"></th>
            </tr>
            <tr v-for="(block, i) in blocked" :key="i">
                <td v-text="block.time"></td>
                <template v-for="(schedule, j) in block.schedules" :key="j">
                    <td class="bg-rose-400 shadow text-white" v-if="schedule && schedule != 1" :rowspan="schedule.block">
                        <div v-if="schedule.lecture">
                            <small v-text="schedule.started"></small>
                            <router-link :to="`/lectures/${1 + schedule.lecture_id }`">
                                <h2 class="text-lg font-semibold mt-2" v-text="schedule.lecture.name" />
                            </router-link>

                            <h3 class="mt-3">
                                Speaker: 
                                <router-link :to="`/profiles/${ 1 + schedule.lecture.profile_id }`" class="font-medium" v-text="schedule.lecture.profile.name" />
                            </h3>
                            
                            <p class="text-sm" v-text="schedule.lecture.profile.uni" />
                        </div>

                        <div v-else>
                            <small v-text="schedule.started"></small>
                            <h2 class="text-lg font-semibold mt-2" v-text="schedule.title" />
                            <p class="text-sm" v-text="schedule.uni" />
                        </div>
                    </td>
                    <td v-else-if="schedule === undefined"></td>
                </template>
            </tr>
        </Table>
    </section>
</template>