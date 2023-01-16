<script setup>
</script>

<template>
    <div class="overflow-x-auto">
        <table class="mt-6 w-full [&_tr]:border-y [&_tr]:hover:bg-gray-100 [&_th]:p-2 [&_th]:text-left [&_td]:p-2">
            <slot />
        </table>
    </div>
</template>