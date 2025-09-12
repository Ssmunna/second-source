<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Autoplay, Pagination } from "swiper/modules";

import "swiper/css";
import "swiper/css/autoplay";
import "swiper/css/pagination";

const slides = [
    "/assets/images/work_with_us/photo-2.png",
    "/assets/images/work_with_us/photo-3.png",
    "/assets/images/work_with_us/photo-4.png",
];
</script>

<template>
    <Swiper
        :modules="[Pagination, Autoplay]"
        :loop="true"
        :pagination="true"
        :autoplay="{ delay: 4000, disableOnInteraction: false }"
        :slides-per-view="1"
        class="w-full rounded-2xl overflow-hidden shadow-lg"
    >
        <SwiperSlide
            v-for="(slide, index) in slides"
            :key="index"
            class="flex items-center justify-center bg-black text-white"
        >
            <img
                :src="slide"
                alt="slide"
                class="w-full h-[300px] md:h-[529px] object-cover"
            />
        </SwiperSlide>
    </Swiper>
</template>


<style scoped>
:deep(.swiper-pagination-bullet) {
    background: white !important;
    opacity: 0.6;
    width: 10px;
    height: 10px;
}

:deep(.swiper-pagination-bullet-active) {
    background: #F25C30 !important;
    opacity: 1;
}

:deep(.swiper-pagination) {
    bottom: 16px !important;
    text-align: center;
}
</style>
