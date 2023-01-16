<script setup>
import Breadcrumb from '../components/Breadcrumb.vue'
import NotFound from './NotFound.vue'
import Table from '../components/Table.vue'
import { profiles } from '../data'
import { useRoute } from 'vue-router'

const request = useRoute().params.profile,
    guess = request - 1,
    available = guess >= 0 && guess < profiles.length,
    profile = available ? profiles[ guess ] : {},
    tables = available ? [{
        title: 'Specialised field',
        content: profile.fields,
    }, {
        title: 'Current research theme',
        content: profile.research,
    }, {
        title: 'Last graduated university, year',
        content: profile.graduated,
    }, {
        title: 'Email',
        content: profile.email,
    }] : []

</script>

<template>
    <template v-if="available">
        <Breadcrumb title="Speaker's Profile" :breads="[{
            to: '/',
            name: 'Home',
        }, {
            to: `/profiles/${ request }`,
            name: 'Profile',
        }]" />
    
        <section id="profile" class="px-8 pb-8 lg:px-16 lg:pb-16 min-h-screen">
            <div class="flex items-center justify-center flex-col">
                <div class="h-40 w-40 bg-center bg-no-repeat bg-cover rounded-full shadow-lg -mt-16" :style="`background-image: url(${ profile.photo })`"></div>

                <h1 class="text-2xl font-bold text-rose-500 mt-6" v-text="profile.name" />
                <h2 class="text-lg font-medium" v-text="profile.uni" />
            </div>

            <Table>
                <tr v-for="(table, i) in tables" :key="i">
                    <th v-text="table.title"></th>
                    <td v-text="table.content"></td>
                </tr>
            </Table>

            <h2 class="text-lg border-l-4 border-rose-300 font-bold pl-3 my-8">Biography</h2>

            <div class="prose" v-text="profile.biography"></div>
        </section>
    </template>
    <NotFound v-else />
</template>