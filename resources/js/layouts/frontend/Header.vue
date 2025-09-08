<script setup>
import LargeScreenNav from "@/components/frontend/header/LargeScreenNav.vue";
import SmallScreenNav from "@/components/frontend/header/SmallScreenNav.vue";

import { useDarkMode } from "@/composables/useDarkMode.js"

const { isDark, toggleTheme } = useDarkMode()
</script>

<template>
    <!-- Header section start here -->
    <div class="w-full fixed top-0 left-0 right-0 bg-white z-[999] dark-bg">
        <div class="container mx-auto">
            <LargeScreenNav :isDark="isDark" @toggleTheme="toggleTheme" />
            <SmallScreenNav />
        </div>
    </div>
    <!-- Header section ends here -->
</template>

<style scoped>

</style>
