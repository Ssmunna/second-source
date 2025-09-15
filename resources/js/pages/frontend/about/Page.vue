<script setup>
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
import CountUp from 'vue-countup-v3'
import Main from "@/layouts/frontend/Main.vue";
import HeroSectionWithVideo from "@/components/frontend/common/HeroSectionWithVideo.vue";
import { Head } from '@inertiajs/vue3'

const slides = [
    "/assets/images/about/photo-3.png",
    "/assets/images/about/photo-3.png",
    "/assets/images/about/photo-3.png",
    "/assets/images/about/photo-3.png",
];

const stats = [
    { value: 10, label: "Markets Served" },
    { value: 450, label: "End-to-end Projects" },
    { value: 120, label: "Active Client" },
    { value: 180, label: "Tech Specialists" },
]

const title = `Human centered <span class="text-[#F25C30]">future</span> focused`;
const subtitle = 'TSS is a full-cycle app & software development company which covers specific client business needs and manages them with the help of the best possible technology solutions.'

</script>
<template>
    <Head title="About" />
    <Main>
        <HeroSectionWithVideo :title="title" :subtitle="subtitle" />
        <section class="p-4">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Card 1 -->
                <div class="relative rounded-3xl overflow-hidden h-[636px]" data-aos="fade-right">
                    <img src="/assets/images/about/photo-1.png" alt="Team working" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent dark:from-gray-600 dark:via-gray-600/80"></div>

                    <!-- Content -->
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-[36px] font-bold text-[#2A2A2A] dark-text">
                            We Design, Develop and <br> Launch Digital Products
                        </h3>
                        <p class="mt-3 text-[16px] text-[#2B3C50]/70 font-[400] dark-text">
                            TSS is a top-rated IT outsourcing and software development company specializing
                            in custom software, UI/UX design, and dedicated teams for companies across world.
                        </p>
                        <div class="w-full flex justify-center">
                            <button class="mt-5 w-[240px] lg:w-[268px] h-[48px] mx-auto rounded-[12px] flex items-center justify-center gap-8 cursor-pointer border border-[#F25C30]
                            bg-[#F25C30] text-white font-sans font-bold">
                                Explore details
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative rounded-3xl overflow-hidden h-[636px]" data-aos="fade-left">
                    <img src="/assets/images/about/photo-2.png" alt="Team collaboration" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent dark:from-gray-600 dark:via-gray-600/80"></div>

                    <!-- Content -->
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-[36px] font-bold text-[#2A2A2A] dark-text">
                            Our expertise extends across industries
                        </h3>
                        <p class="mt-3 text-[16px] text-[#2B3C50]/70 font-[400] dark-text">
                            Our IT solutions company has extensive experience across a wide range of
                            industries. No matter your niche, partnering with us ensures you receive
                            high-quality, innovative solutions that set you apart from the competition.
                        </p>
                        <div class="w-full flex justify-center">
                            <button class="mt-5 w-[240px] lg:w-[268px] h-[48px] mx-auto rounded-[12px] flex items-center justify-center gap-8 cursor-pointer border border-[#F25C30]
                            bg-[#F25C30] text-white font-sans font-bold">
                                Explore details
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pt-16 px-4">
            <div class="container mx-auto" data-aos="fade-right">
                <!-- Heading -->
                <h2 class="text-[36px] font-bold text-[#2B3C50] dark-text">
                    Our <span class="text-[#F25C30]">Mission</span>
                </h2>
                <p class="mt-4 text-gray-500 text-[16px] font-roboto max-w-2xl mx-auto dark-text">
                    Innovating with the best, designing with purpose, and engineering for a sustainable future.
                </p>
            </div>
            <div class="w-full text-center">
                <!-- Slider -->
                <div class="mt-6">
                    <Swiper
                        :modules="[Navigation, Pagination, Autoplay]"
                        :slides-per-view="1"
                        :space-between="20"
                        :breakpoints="{
                        640: { slidesPerView: 1 },
                        768: { slidesPerView: 2 },
                        1024: { slidesPerView: 3 }
                     }"
                        :centered-slides="true"
                        :loop="true"
                        :autoplay="{ delay: 3000, disableOnInteraction: false }"
                        :pagination="{ clickable: true }"
                        class="pb-10"
                    >
                        <SwiperSlide
                            v-for="(slide, i) in slides"
                            :key="i"
                            class="transition-transform duration-500"
                        >
                            <div
                                class="rounded-3xl overflow-hidden shadow-md w-full h-48 sm:h-60 md:h-72 lg:h-[372px]"
                            >
                                <img
                                    :src="slide"
                                    alt="Mission image"
                                    class="w-full h-full object-cover object-center"
                                >
                            </div>
                        </SwiperSlide>
                    </Swiper>
                </div>
            </div>
        </section>

        <section class="pt-12 px-4">
            <div class="container mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-[#2B3C50] dark-text" data-aos="fade-right">
                    Our Proud <span class="text-[#F25C30]">Achievements</span>
                </h2>
                <p class="mt-2 text-gray-600 max-w-2xl mx-auto dark-text" data-aos="fade-right">
                    We’ve come a long way from a small team of software developers in 2023,
                    to an all-around expert team as of today!
                </p>

                <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" data-aos="fade-up">
                    <div
                        v-for="(stat, i) in stats"
                        :key="i"
                        class="bg-[#FFF7EB] rounded-2xl py-10 px-6 flex flex-col items-center"
                    >
                        <h3 class="text-[#F25C30] text-[48px] font-bold flex items-center">
                            <CountUp :end-val="stat.value" :duration="2" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 5v14M5 12h14"/>
                            </svg>

                        </h3>
                        <p class="mt-2 text-gray-700 font-medium">{{ stat.label }}</p>
                    </div>
                </div>
            </div>
        </section>
    </Main>
</template>

<style scoped>
/* Make center slide larger */
.swiper-slide {
    transition: transform 0.5s ease, opacity 0.5s ease;
    transform: scale(0.9);
}
.swiper-slide-active {
    transform: scale(1);
    opacity: 1;
}
</style>
