<script setup>
import { onMounted } from "vue";
import '../../../css/frontend.css';

onMounted(() => {
    setTimeout(() => window.HSStaticMethods.autoInit(), 100);
});
</script>

<template>
    <slot />
</template>

<style scoped>

</style>
