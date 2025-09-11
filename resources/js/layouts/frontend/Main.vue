<script setup>
import { onMounted } from "vue";
import '../../../css/frontend.css';
import GetInTouch from "@/layouts/frontend/GetInTouch.vue";
import Header from "@/layouts/frontend/Header.vue";
import Footer from "@/layouts/frontend/Footer.vue";
import About from "@/layouts/frontend/About.vue";

onMounted(() => {
    setTimeout(() => window.HSStaticMethods.autoInit(), 100);
});
</script>

<template>
    <Header/>
        <div class="w-full pt-30 dark:bg-[#0a0e12]">
            <slot />
        </div>
    <GetInTouch/>
    <About/>
    <Footer/>
</template>

<style scoped>

</style>
