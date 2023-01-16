<script setup>
import { Splide, SplideSlide } from '@splidejs/vue-splide'
import Button from '../components/Button.vue'
import { sliders, lectures, profiles } from '../data'

</script>

<template>
    <div>
        <Splide :options="{
            autoplay: true,
            rewind: true,
        }" aria-label="REALS carousel">
            <SplideSlide v-for="(img, index) in sliders" :key="index">
                <img :src="img">
            </SplideSlide>
        </Splide>

        <section id="intro" class="p-8 lg:px-12 lg:py-16 min-h-screen umbg">
            <div>
                <h1 class="text-4xl font-bold">Rethinking EurAsia Lecture Series (REALS)</h1>
                <div class="md:grid md:grid-cols-2 w-full mt-6">
                    <div class="prose">
                        <p>
                            The Vision of Universitas Negeri Malang is to become a leading tertiary educational institution and to become an authoritative center for scientific, technological, and educational endeavors. In order to realize this vision, a series of courses for the Asian Community have been held, such as the successful One Asia Lecture Series (OALS) in 2018 and 2019...
                        </p>

                        <router-link to="/about">
                            <Button>
                                About <i class="mdi mdi-chevron-right"></i>
                            </Button>
                        </router-link>

                    </div>
                    
                    <div class="hidden md:flex md:justify-end">
                        <img src="../assets/cakra.gif" alt="Cakra" class="h-44">
                    </div>
                </div>
                
            </div>

            <div class="flex justify-center mt-12">
                <iframe class="h-72 w-full max-w-2xl rounded-md" src="https://www.youtube.com/embed/5tnrWm9eY_Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
            </div>

            <div class="mt-12">
                <h2 class="text-3xl font-semibold">List of Lectures</h2>

                <ol class="grid grid-cols-1 md:grid-cols-2 gap-4 list-disc list-inside">
                    <li v-for="(lecture, i) in lectures" :key="i">
                        <router-link :to="`/lectures/${1 + i}`" class="hover:text-rose-500 hover:font-medium">
                            {{ lecture.name }}
                        </router-link>
                    </li>
                </ol>
            </div>

            <div class="my-12">
                <h2 class="text-3xl font-semibold">Speakers</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-12 mt-6">
                    <router-link :to="`profiles/${1 + i}`" v-for="(profile, i) in profiles" :key="i">
                        <div class="flex items-center gap-x-6 pr-6 bg-slate-50 rounded-lg shadow-md hover:shadow-rose-400 hover:bg-slate-100/40">
                            <div class="relative sm:max-w-xl">
                                <div class="absolute inset-0 bg-gradient-to-r from-rose-400 to-rose-500 shadow-md transform -skew-y-3 sm:skew-y-0 sm:rotate-12 rounded-3xl"></div>
                                <div class="relative">
                                    <div class="h-40 w-40 bg-center bg-no-repeat bg-cover rounded-lg shadow-lg" :style="`background-image: url(${ profile.photo })`"></div>
                                </div>
                            </div>

                            <div class="">
                                <h3 class="font-semibold text-rose-400 text-lg" v-text="profile.name"></h3>
                                <h5 class="font-medium" v-text="profile.uni"></h5>
                                <h6 v-text="profile.country"></h6>
                            </div>
                        </div>
                    </router-link>
                </div>
            </div>
        </section>
    </div>
</template>