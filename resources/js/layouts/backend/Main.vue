<script setup>
import Header from '@/layouts/backend/Header.vue';
import Sidebar from '@/layouts/backend/Sidebar.vue';
</script>

<template>
    <Header/>
    <Sidebar/>
    <!-- Content -->
    <div class="w-full lg:ps-64">
        <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">
            <Slot/>
        </div>
    </div>
    <!-- End Content -->
</template>

<style scoped>

</style>
