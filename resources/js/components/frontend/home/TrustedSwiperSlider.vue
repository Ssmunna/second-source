<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Pagination, Autoplay } from "swiper/modules";

import "swiper/css";
import "swiper/css/autoplay";

const props = defineProps({
    logos: { type: Array, required: true }
});
</script>

<template>
    <Swiper
        :modules="[Pagination, Autoplay]"
        :slides-per-view="2"
        :space-between="0"

        :breakpoints="{
              320: { slidesPerView: 2 },
              480: { slidesPerView: 3 },
              640: { slidesPerView: 4 },
              768: { slidesPerView: 5 },
              1024: { slidesPerView: 6 },
              1280: { slidesPerView: 7 },
              1536: { slidesPerView: 8 }
        }"
        :loop="true"
        :autoplay="{ delay: 5000, disableOnInteraction: false }"
        class="w-full h-full"
    >
        <SwiperSlide
            v-for="(logo, index) in props.logos"
            :key="index"
            class="flex items-center justify-center px-6 h-full border-r border-orange-400 last:border-r-0"
        >
            <img
                :src="logo"
                alt="logo"
                class="max-h-[63px] min-h-[63px] w-auto object-contain mx-auto"
            />
        </SwiperSlide>


    </Swiper>
</template>
