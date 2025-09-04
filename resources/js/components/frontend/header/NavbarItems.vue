<script setup>

</script>

<template>
    <!-- Backdrop -->
    <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible fixed inset-0 bg-black/50 transition-opacity z-10 pointer-events-none"></div>
    <!-- Popover -->
    <div class="opacity-0 invisible group-hover:opacity-100 group-hover:visible absolute left-1/2 -translate-x-1/2 mt-2 transition-opacity z-20 before:absolute before:-top-2 before:left-0 before:w-full before:h-4 before:content-['']"
        role="tooltip">
        <div class="w-[340px] h-[463px] flex flex-col items-center gap-2 p-[20px] rounded-[24px] bg-white shadow-md">
            <div class="nav-items">Data Entry & Virtual Assistance</div>
            <div class="nav-items">Marketing & Branding</div>
            <div class="nav-items">UI/UX Design</div>
            <div class="nav-items">Software Development</div>
            <div class="nav-items">Web Design & Development</div>
            <div class="nav-items">App Design & Development</div>
            <div class="nav-items">Business & Financial Services</div>
            <div class="nav-items">Analytics & Reporting</div>
            <div class="nav-items">Telemarketing & Customer Support</div>
        </div>
    </div>

</template>

<style scoped>

</style>
