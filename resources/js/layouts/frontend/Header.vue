<script setup>
import LargeScreenNav from "@/components/frontend/header/LargeScreenNav.vue";
import SmallScreenNav from "@/components/frontend/header/SmallScreenNav.vue";

</script>

<template>
    <!-- Header section start here -->
    <div class="w-full fixed top-0 left-0 right-0 bg-white z-[999]">
        <div class="container mx-auto">
            <LargeScreenNav />
            <SmallScreenNav />
        </div>
    </div>
    <!-- Header section ends here -->
</template>

<style scoped>

</style>
