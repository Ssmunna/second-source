<script setup>
import Header from '@/layouts/backend/Header.vue';
import Sidebar from '@/layouts/backend/Sidebar.vue';
import { onMounted } from 'vue';
import '../../../css/backend.css';

onMounted(() => {
    setTimeout(() => window.HSStaticMethods.autoInit(), 100);
});
</script>

<template>
    <Header/>
    <Sidebar/>
    <!-- Content -->
    <main class="lg:hs-overlay-layout-open:ps-60 bg-gray-100 transition-all duration-300 lg:fixed lg:inset-0 pt-13 px-3 pb-3 dark:bg-neutral-900">
        <div class="h-[calc(100dvh-62px)] lg:h-full overflow-hidden flex flex-col bg-white border border-gray-200 shadow-xs rounded-lg dark:bg-neutral-800 dark:border-neutral-700">
            <!-- Body -->
            <div class="flex-1 flex flex-col overflow-y-auto [&::-webkit-scrollbar]:w-0">
                <div class="w-full p-4">
                    <slot></slot>
                </div>
            </div>
            <!-- End Body -->
        </div>
    </main>
    <!-- End Content -->
</template>

<style scoped>

</style>
