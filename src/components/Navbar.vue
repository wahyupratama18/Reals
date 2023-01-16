<script setup>
import { ref } from 'vue'
import Sider from './Sider.vue'
import { applicants } from '../data'

const sidebar = ref(false)

const toggleSidebar = () => {
    sidebar.value = ! sidebar.value
}

const closeSidebar = () => {
    sidebar.value = false
}

const menus = [{
    to: '/',
    text: 'Home'
}, {
    to: '/about',
    text: 'About'
}, {
    text: 'Apply',
    opened: ref(false),
    children: applicants.map((app) => {
        return {
            to: app.to,
            text: app.name,
        }
    })
}, {
    to: '/schedule',
    text: 'Schedule'
}, {
    text: 'Downloads',
    opened: ref(false),
    children: [{
        to: '/downloads/2021',
        text: 'Reals 2021'
    }, {
        to: '/downloads/2020',
        text: 'Reals 2020'
    }]
},  {
    to: '/galleries',
    text: 'Galleries'
}]
</script>

<template>
    <nav class="fixed top-0 z-30 h-16 md:h-20 w-60 md:w-72 flex items-center gap-6 px-4 md:px-8 py-3 bg-slate-100 rounded-br-2xl shadow-lg">
        <button type="button" @click="toggleSidebar()" @keydown.esc="closeSidebar()">
            <i class="mdi mdi-dots-grid text-xl" />
        </button>

        <router-link to="/" @click="closeSidebar()">
            <img src="../assets/nav.png" class="h-12 md:h-16" />
        </router-link>
    </nav>

    <div v-if="sidebar" @click="closeSidebar()" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
    <Transition name="slide-fade" mode="in-out" :duration="{ enter: 500, leave: 800 }">
        <aside
        v-if="sidebar"
        class="fixed left-0 z-20 h-screen w-56 pt-20 bg-slate-50 shadow overflow-y-auto">
            <Sider :menus="menus"></Sider>
        </aside>
    </Transition>
    
</template>