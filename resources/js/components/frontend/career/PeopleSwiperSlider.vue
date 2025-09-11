<script setup>
import { Swiper, SwiperSlide } from "swiper/vue";
import { Pagination, Autoplay } from "swiper/modules";

import "swiper/css";
import "swiper/css/autoplay";

const props = defineProps({
    peoples: { type: Array, required: true }
});
</script>

<template>
    <Swiper
        :modules="[Pagination, Autoplay]"
        :slides-per-view="1.5"
        :space-between="16"
        :breakpoints="{
          320: { slidesPerView: 1.5, spaceBetween: 12 },
          480: { slidesPerView: 2.5, spaceBetween: 16 },
          1024: { slidesPerView: 3.5, spaceBetween: 16 },
          1280: { slidesPerView: 4.5, spaceBetween: 16 },
        }"
        :loop="true"
        :autoplay="{ delay: 3000, disableOnInteraction: false }"
        class="w-full h-full"
    >
        <SwiperSlide
            v-for="(people, index) in props.peoples"
            :key="index"
            class="flex items-center justify-center h-full"
        >
            <div class="relative w-[180px] h-[180px] sm:w-[220px] sm:h-[220px] md:w-[267px] md:h-[267px] rounded-2xl overflow-hidden shadow-md">
                <img
                    :src="people.image"
                    :alt="people.name"
                    class="w-full h-full object-cover"
                />

                <div class="absolute bottom-0 left-0 right-0 p-3 bg-gradient-to-t from-[#F25C30] from-10% via-80% to-transparent">
                    <h3 class="text-[#FFFFFF] text-[24px] font-semibold">
                        {{ people.name }}
                    </h3>
                    <p class="text-white text-[14px] font-roboto opacity-95">
                        {{ people.role }}
                    </p>
                </div>
            </div>
        </SwiperSlide>
    </Swiper>
</template>
