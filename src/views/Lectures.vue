<script setup>
import Breadcrumb from '../components/Breadcrumb.vue'
import NotFound from './NotFound.vue'
import { lectures, profiles } from '../data'
import { useRoute } from 'vue-router'

const request = useRoute().params.lecture,
    guess = request - 1,
    available = guess >= 0 && guess < lectures.length,
    lecture = available ? lectures[guess] : {},
    profile = available ? profiles[ lecture.profile_id ] : {}

</script>

<template>
    <template v-if="available">
        <Breadcrumb title="Lectures" :breads="[{
            to: '/',
            name: 'Home',
        }, {
            to: `/lecture/${ request }`,
            name: 'Lecture',
        }]" />
    
        <section id="lecture" class="p-8 lg:p-16 min-h-screen">
            <h2 class="text-lg font-semibold" v-text="`Lecture ${ request }`" />
            <h1 class="text-2xl font-bold text-rose-500" v-text="lecture.name" />
            <router-link v-scroll-to="`#app`" :to="`/profiles/${ lecture.profile_id + 1 }`">
                <h3 class="text-lg font-medium" v-text="profile.name" />
            </router-link>
            <h4 v-text="profile.uni" />

            <div class="prose mt-10">
                <h5 class="text-lg font-medium">Abstract</h5>
                
                <div v-html="lecture.abstract"></div>

                <h5 class="text-lg font-medium">References</h5>
                <ul>
                    <li v-for="(reference, i) in lecture.references" :key="i" v-text="reference"></li>
                </ul>
            </div>
            
            <!-- <div class="prose mt-4 max-w-full">
                <div class="flex gap-8 flex-col-reverse md:flex-row">
                    <p>
                        The Vision of Universitas Negeri Malang is to become a leading tertiary educational institution and to become an authoritative center for scientific, technological, and educational endeavors. To realize this vision, a series of courses for the Asian Community have been held, such as the successful One Asia Lecture Series (OALS) in 2018 and 2019. In the following year, OALS developed and changed to the Rethinking EurAsia Lecture Series (REALS), so this event is not only for the people of Asia but also Europe. The Rethinking EurAsia Lecture Series is the result of the collaboration between OIA and the Department of English, Faculty of Letters, UM for the Eurasia Foundation (from Asia) to be held. REALS 2020 has been successfully held with the theme of popular culture in Europe and Asia, so at REALS 2021 we carry a new theme that is no less interesting, namely “Years of Living Precariously: Maintaining Resilience amidst a Global Pandemic in Europe and Asia.”
                    </p>
                    <img src="src/assets/eurasia.png" alt="Eurasia" class="max-h-48 max-w-[12rem]">
                </div>
    
                <p>
                    The vision of the State University of Malang is to become an excellence university, to be a reference for science and technology, as well as in the field of education. To realize this vision, a series of courses for the Asian Community has been held, namely the successful One Asia Lecture Series (OALS) in 2018 and 2019. In the following year, OALS developed and changed to the EurAsia Lecture Series (REALS), so this event is not only for the Asian community. only Europe. The EurAsia Lecture Series is the result of the collaboration between OIA and the Department of English, Faculty of Letters, UM for the Eurasia Foundation (from Asia) to be held. REALS 2020 has been successfully held with the theme of popular culture in Asia, so at REALS 2021 we carry a new theme that is no less interesting, namely Years of Living Precariously: Maintaining Resilience amidst a Global Pandemic in Europe and Asia.
                </p>
    
                <p>
                    The current Covid-19 pandemic has affected various aspects of human life. Apart from taking the lives of many people, it also affects the way we live. The existence of restrictions on activities, wearing masks, always maintaining cleanliness, and body health are important things everyone must consider. However, due to advances in technology, we can all communicate and meet virtually and we are given more time to spend with family. With advances in science and technology as well as international cooperation, a Covid-19 vaccine has also been developed in less than a year since the pandemic began. It will be discussed further how communities across Asia and Europe maintain their resilience in the face of global health disasters.
                </p>
            </div>
    
            <h2 class="text-3xl font-semibold mt-12">Rethinking EurAsia Lecture Series</h2>
            <small class="text-slate-400">UNIVERSITAS NEGERI MALANG</small>
    
            <div class="flex flex-col md:flex-row gap-6 mt-4 max-w-full">
                <img src="src/assets/reals.png" alt="REALS" class="max-h-48" />
                
                <div class="prose">
                    <p>
                        Living in an unprecedented time when mobility is restricted due to the global pandemic is a source of unexpected pressure and hardship for many people. People's foundations may be unstable, and their grasp and sense of control may be shaky, and no one knows how long it will last.
                    </p>
        
                    <p>
                        With the theme of “Years of Living Precariously: Maintaining Resilience Amidst a Global Pandemic in Europe and Asia", REALS 2021 aims to explore various issues concerning how Europe and Asia maintain resilience amid a global pandemic to strengthen mutual understanding of and between the European and Asian Communities. Following the goals of the Eurasia Foundation, this lecture series is part of UM's efforts to develop a harmonious society where people can live together each holding their dreams and hopes, resulting in global peace and security.
                    </p>
        
                    <p>
                        REALS 2021, which runs from September to December, will feature 16 lectures by international academics from a variety of universities. This program will provide new experience and knowledge to participants to better grasp today's global outbreak, as well as the opportunity to express their opinions through the completion of an individual final project.
                    </p>
                </div>
            </div> -->
        </section>
    </template>
    <NotFound v-else />
</template>