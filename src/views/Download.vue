<script setup>
import Breadcrumb from '../components/Breadcrumb.vue'
import NotFound from './NotFound.vue'
import Button from '../components/Button.vue'
import { downloads } from '../data'
import { useRoute } from 'vue-router'

const request = useRoute().params.download,
    download = downloads[request]

console.log(download)
</script>

<template>
    <template v-if="download">
        <Breadcrumb title="Download" :breads="[{
            to: '/',
            name: 'Home',
        }, {
            to: `/downloads/${request}`,
            name: `Download for ${ request }`,
        }]" />

        <section id="download" class="p-8 lg:p-16 min-h-screen">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <a :href="download.final" target="_blank" class="flex items-center gap-x-4 text-rose-500 hover:text-slate-50 hover:bg-rose-500 border p-4 shadow-lg rounded-lg">
                    <i class="mdi mdi-download mdi-36px"></i>
                    <div>
                        <h1 class="text-2xl font-bold">Final Project</h1>
                        <p class="font-medium my-3">Assessment Guideline Reals Final Project</p>
                    </div>
                </a>
    
                <a :href="download.flyer" target="_blank" class="flex items-center gap-x-4 text-rose-500 hover:text-slate-50 hover:bg-rose-500 border p-4 shadow-lg rounded-lg">
                    <i class="mdi mdi-download mdi-36px"></i>
                    <div>
                        <h1 class="text-2xl font-bold">Flyer REALS</h1>
                        <p class="font-medium my-3">Poster Reals</p>
                    </div>
                </a>
    
                <!-- intl -->
                <hr class="md:col-span-2">
                <a :href="download.intl.info" target="_blank" class="flex items-center gap-x-4 text-rose-600 hover:text-slate-50 hover:bg-rose-600 border p-4 shadow-lg rounded-lg">
                    <i class="mdi mdi-download mdi-36px"></i>
                    <div>
                        <h1 class="text-2xl font-bold">Flyer REALS International</h1>
                        <p class="font-medium my-3">Poster Reals (information)</p>
                    </div>
                </a>

                <a :href="download.intl.schedule" target="_blank" class="flex items-center gap-x-4 text-rose-600 hover:text-slate-50 hover:bg-rose-600 border p-4 shadow-lg rounded-lg">
                    <i class="mdi mdi-download mdi-36px"></i>
                    <div>
                        <h1 class="text-2xl font-bold">Flyer REALS International</h1>
                        <p class="font-medium my-3">Poster Reals (schedule)</p>
                    </div>
                </a>

                <!-- attachments -->
                <hr class="md:col-span-2">

                <h2 class="md:col-span-2 text-lg font-semibold">Lecture Attachments</h2>

                <div class="bg-slate-50 rounded-lg shadow" v-for="(attachment, i) in download.attachments" :key="i">
                    <img :src="attachment.image ?? 'default.jpg'" :alt="attachment.title">

                    <div class="py-4 px-6">
                        <h3 class="md:col-span-2 text-lg font-semibold text-rose-500" v-text="attachment.title" />

                        <h4 class="font-medium mt-3 mb-5">by {{ attachment.lecturer }}</h4>

                        <div class="flex justify-end">
                            <a :href="attachment.download" target="_blank">
                                <Button>
                                    <i class="mdi mdi-download"></i>
                                    Download
                                </Button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </template>
    
    <NotFound v-else />
</template>