<script setup>
import { ref } from 'vue'
import Breadcrumb from '../components/Breadcrumb.vue'
import Button from '../components/Button.vue';
import { applicants } from '../data'

let opened = ref(false)

const handleAccordion = i => {
    if (opened.value === i) {
        opened.value = false
        return
    }

    opened.value = i;
}
</script>

<template>
    <Breadcrumb title="Apply for REALS" :breads="[{
        to: '/',
        name: 'Home',
    }, {
        to: `/apply`,
        name: 'Application',
    }]" />

    <section id="apply" class="p-8 lg:p-16 min-h-screen">
        <h1 class="text-2xl font-bold text-rose-500">Welcome to REALS Application!</h1>

        <p class="my-4">
            In attempt to maximise the impacts and knowledge transfer on the “Years of Living Precariously: Maintaining Resilience Amidst a Global Pandemic in Europe and Asia”, we aim to accommodate as many audience as possible. Hence, REALS 2021 is open to applicants with the following categories:
        </p>

        <ul class="flex flex-col list-none">
            <li class="border-y" v-for="(applicant, i) in applicants" :key="i">
                <h4 class="flex flex-row justify-between items-center py-3 cursor-pointer" @click="handleAccordion(i)">
                    <span v-text="applicant.name" />
                    <i class="mdi mdi-chevron-down" :class="{'rotate-180': opened === i}" />
                </h4>

                <div class="prose max-w-full prose-p:text-justify p-3 border-l-4 border-l-iFest" v-show="opened === i" v-html="applicant.description"></div>
            </li>
        </ul>

        <h2 class="text-lg font-semibold my-6">For more information</h2>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <router-link :to="applicant.to" v-for="(applicant, i) in applicants" :key="i">
                <Button class="w-full">{{ applicant.name }}</Button>
            </router-link>
        </div>
    </section>
</template>