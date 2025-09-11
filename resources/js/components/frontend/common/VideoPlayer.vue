<script setup>
defineProps({
    className: {type: String, default: "w-full max-w-5xl mx-auto rounded-2xl overflow-hidden"},
})
</script>

<template>
    <div class="relative">
        <!-- Video -->
        <video
            class="w-full h-auto object-cover"
            :class="className"
            src="/assets/video/Promo.mp4"
            autoplay
            loop
            muted
            playsinline
        ></video>
    </div>
</template>

<style scoped>

</style>
