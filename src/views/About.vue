<script setup>
import Breadcrumb from '../components/Breadcrumb.vue'
</script>

<template>
    <Breadcrumb title="About" :breads="[{
        to: '/',
        name: 'Home',
    }, {
        to: '/about',
        name: 'About',
    }]" />

    <section id="about" class="p-8 lg:p-16 min-h-screen">
        <h1 class="text-4xl font-bold">Background</h1>
        
        <div class="prose mt-4 max-w-full">
            <div class="flex gap-8 flex-col-reverse md:flex-row">
                <p>
                    In early May 2022, WHO released a shocking report, claiming that 15 million deaths were linked to Covid-19 from January 2020 to December 2021. It was a global pandemic with severe consequences; millions lost their lives, their livelihoods, or were at risk of falling into poverty. The successful creation and distribution of Covid-19 vaccines have shown how humanity can take control of the situation. Now that the pandemic seems to be over, we must remain vigilant of the pandemic’s long-term influence or other global challenges. For example, human rights and democracy are challenged during the Russia-Ukraine war, climate change issues are still debated among policymakers, disaster reliefs in developing countries are still far from ideal, and endemic diseases still endanger the world’s population. 
                </p>
                <img src="../assets/eurasia.png" alt="Eurasia" class="max-h-48 max-w-[12rem]">
            </div>
        </div>
        
        <h2 class="text-3xl font-semibold mt-12">Rethinking EurAsia Lecture Series</h2>
        <small class="text-slate-400">UNIVERSITAS NEGERI MALANG</small>

        <div class="flex flex-col md:flex-row gap-6 mt-4 max-w-full">
            <div class="flex items-center justify-center">
                <img src="../assets/reals.png" alt="REALS" class="max-h-48" />
            </div>
            
            <div class="prose">
    
                <p>
                    Universitas Negeri Malang’s 2022 Rethinking EurAsia Lecture Series (REALS) offers a mosaic of academic analysis on global challenges across Asia and Europe and how we can deal with them. It looks into various aspects of global issues - from public health, economy, gender, research innovations, language, politics, arts, etc. Such interdisciplinary discussion is also timely with the Indonesia’s Presidency of G20 this year, which adopts the theme: Recover Together, Recover Stronger. Collaborating with Indonesian Young Scientist Academy, the lecture series presents young and influential researchers with varied expertise from both regions to share their expertise with students from various academic backgrounds. In line with G20, we also incorporate several topics that align with G20 concerns during this series.
                </p>
    
                <p>
                    The lecture series is generally aimed at equipping its participants with skills in intercultural and interdisciplinary communicative competence. UM considers such skills vital for its students to enable them to navigate the increasingly globalized world and overwhelming flows of information. These students will be able to take part, in their respective capacities, in producing more positive images of Europe and Asia, and be more critical of images they encounter on various platforms. 
                </p>
            </div>
        </div>
    </section>
</template>