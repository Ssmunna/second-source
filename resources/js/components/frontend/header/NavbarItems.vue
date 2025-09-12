<script setup>

import {Link} from "@inertiajs/vue3";
</script>

<template>
    <!-- Backdrop -->
    <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible fixed inset-0 bg-black/50 transition-opacity z-10 pointer-events-none"></div>
    <!-- Popover -->
    <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute left-1/2 -translate-x-1/2 mt-2 transition-opacity z-20 before:absolute before:-top-2 before:left-0 before:w-full before:h-4 before:content-['']"
        role="tooltip">
        <div class="w-[340px] h-[463px] flex flex-col items-center gap-2 p-[20px] rounded-[24px] bg-white shadow-md">
            <Link :href="route('service')" class="nav-items">Data Entry & Virtual Assistance</Link>
            <Link :href="route('service')" class="nav-items">Marketing & Branding</Link>
            <Link :href="route('service')" class="nav-items">UI/UX Design</Link>
            <Link :href="route('service')" class="nav-items">Software Development</Link>
            <Link :href="route('service')" class="nav-items">Web Design & Development</Link>
            <Link :href="route('service')" class="nav-items">App Design & Development</Link>
            <Link :href="route('service')" class="nav-items">Business & Financial Services</Link>
            <Link :href="route('service')" class="nav-items">Analytics & Reporting</Link>
            <Link :href="route('service')" class="nav-items">Telemarketing & Customer Support</Link>
        </div>
    </div>

</template>

<style scoped>

</style>
