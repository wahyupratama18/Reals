<script setup>
import Breadcrumb from '../components/Breadcrumb.vue'
import NotFound from './NotFound.vue'
import Table from '../components/Table.vue'
import { applicants } from '../data'
import { useRoute } from 'vue-router'

const request = useRoute().params.apply,
    apply = applicants.filter(app => {
        return app.slug == request
    }),
    application = apply.length > 0 ? apply[0] : undefined
</script>

<template>
    <template v-if="application">
        <Breadcrumb title="Apply for REALS" :breads="[{
            to: '/',
            name: 'Home',
        }, {
            to: `/apply`,
            name: 'Application',
        }, {
            to: `/apply/${request}`,
            name: application.name
        }]" />

        <section id="applications" class="p-8 lg:p-16 min-h-screen">
            <h1 class="text-2xl font-bold text-rose-500">Who is Eligible to Apply?</h1>
            <p class="font-medium my-6" v-html="application.eligible"></p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div v-if="application.required.length > 0">
                    <h2 class="text-lg font-semibold">
                        <i class="mdi mdi-file-document-multiple"></i>
                        Required Documents
                    </h2>
                    <Table>
                        <tr v-for="(required, i) in application.required" :key="i">
                            <td v-text="1 + i"></td>
                            <td v-html="required"></td>
                        </tr>
                    </Table>
                </div>

                <div v-if="application.benefits.length > 0">
                    <h2 class="text-lg font-semibold">
                        <i class="mdi mdi-bookmark-plus"></i>
                        Benefits
                    </h2>
                    <Table>
                        <tr v-for="(benefit, i) in application.benefits" :key="i">
                            <td v-text="1 + i"></td>
                            <td v-html="benefit"></td>
                        </tr>
                    </Table>
                </div>

                <div v-if="application.timelines.length > 0">
                    <h2 class="text-lg font-semibold">
                        <i class="mdi mdi-calendar"></i>
                        Tentative Timeline
                    </h2>
                    <Table>
                        <tr v-for="(timeline, i) in application.timelines" :key="i">
                            <td v-html="timeline.title"></td>
                            <td v-html="timeline.date"></td>
                        </tr>
                    </Table>
                </div>

                <div v-if="application.applications.length > 0">
                    <h2 class="text-lg font-semibold">
                        <i class="mdi mdi-chat-question"></i>
                        How to apply
                    </h2>
                    <Table>
                        <tr v-for="(apply, i) in application.applications" :key="i">
                            <td v-text="1 + i"></td>
                            <td v-html="apply"></td>
                        </tr>
                    </Table>
                </div>

                <div v-if="application.selections.length > 0" class="col-span-2">
                    <h2 class="text-lg font-semibold">
                        <i class="mdi mdi-account-school"></i>
                        The Criteria of Selection
                    </h2>
                    <Table>
                        <tr v-for="(selection, i) in application.selections" :key="i">
                            <td v-text="1 + i"></td>
                            <td v-html="selection"></td>
                        </tr>
                    </Table>
                </div>
            </div>
        </section>
    </template>
    
    <NotFound v-else />
</template>