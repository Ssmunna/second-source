<script setup>
import VideoPlayer from "@/components/frontend/common/VideoPlayer.vue";

defineProps({
    title: {type: String},
    subtitle: {type: String},
    video: {type: String}
})
</script>

<template>
    <section class="p-4">
        <div class="container mx-auto text-center">
            <!-- Heading -->
            <h2 class="text-[48px] font-bold text-[#2B3C50] leading-tight dark-text" v-html="title">
            </h2>

            <!-- Subheading -->
            <div class="w-7/12 mx-auto">
                <p class="mt-4 text-gray-500 text-[16px] font-roboto max-w-2xl mx-auto leading-relaxed dark-text">
                    {{subtitle}}
                </p>
            </div>

            <!-- Black Box (placeholder for video) -->
            <div class="mt-10">
                <VideoPlayer className="w-full h-48 sm:h-56 lg:h-[232px] rounded-3xl" />
            </div>
        </div>
    </section>
</template>

<style scoped>

</style>
