<script setup>
import Breadcrumb from '../components/Breadcrumb.vue'
import NotFound from './NotFound.vue'
import Table from '../components/Table.vue'
import ToBe from '../components/ToBe.vue'
import { timeBlocks, schedules, lectures, profiles } from '../data'

const blocks = timeBlocks.map((block, i) => {
    return {
        time: block,
        schedules: schedules.map(schedule => {
            return schedule.rundowns
            .filter(rundown => {
                return rundown.started === block
            })[0]
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
        <Table class="[&_td]:border [&_td:not(.stick-time)]:min-w-[18rem] [&_td]:max-w-lg max-h-[75vh]" v-if="schedules.length > 0 && blocks.length > 0">
            <thead>
                <tr>
                    <th class="stick-time"></th>
                    <th class="sticky top-0 bg-slate-50" v-for="(schedule, i) in schedules" :key="i" v-text="schedule.date"></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="(block, i) in blocked" :key="i">
                    <td class="stick-time" v-text="block.time"></td>
                    <template v-for="(schedule, j) in block.schedules" :key="j">
                        <td class="bg-rose-400 shadow text-white" v-if="schedule && schedule != 1" :rowspan="schedule.block">
                            <div v-if="schedule.lecture">
                                <small v-text="schedule.started"></small>
                                <router-link v-scroll-to="`#app`" :to="`/lectures/${1 + schedule.lecture_id }`">
                                    <h2 class="text-lg font-semibold mt-2" v-text="schedule.lecture.name" />
                                </router-link>
    
                                <h3 class="mt-3">
                                    Speaker: 
                                    <router-link v-scroll-to="`#app`" :to="`/profiles/${ 1 + schedule.lecture.profile_id }`" class="font-medium" v-text="schedule.lecture.profile.name" />
                                </h3>
                                
                                <p class="text-sm" v-text="schedule.lecture.profile.uni" />

                                <div class="rounded-lg bg-slate-50 text-rose-400 py-1 px-2 flex gap-x-2 text-sm mt-3">
                                    <i class="mdi" :class="{
                                        'mdi-broadcast': schedule.lecture.mode == 0,
                                        'mdi-human-male-board': schedule.lecture.mode == 1
                                    }" />

                                    <h5 v-text="schedule.lecture.location" />
                                </div>
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
            </tbody>
        </Table>

        <ToBe v-else>To be announced (TBA)</ToBe>
    </section>
</template>