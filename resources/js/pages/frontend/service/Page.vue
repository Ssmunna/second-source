<script setup>
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import { Swiper, SwiperSlide } from "swiper/vue";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
import CountUp from 'vue-countup-v3'
import Main from "@/layouts/frontend/Main.vue";
import HeroSectionWithVideo from "@/components/frontend/common/HeroSectionWithVideo.vue";
import {Head, Link} from '@inertiajs/vue3'
import ContactFormSlider from "@/components/frontend/contact/ContactFormSlider.vue";
import {ref} from "vue";
import ServiceOfferSlider from "@/components/frontend/service/ServiceOfferSlider.vue";

const slides = [
    "/assets/images/about/photo-3.png",
    "/assets/images/about/photo-3.png",
    "/assets/images/about/photo-3.png",
    "/assets/images/about/photo-3.png",
];

const services = ref([
    {
        icon: '/assets/images/service-icon/strategic.png',
        title: 'Strategic Marketing Planning',
        description: 'Aligning your business goals with market opportunities.'
    },
    {
        icon: '/assets/images/service-icon/creative.png',
        title: 'Creative Branding',
        description: 'Building a distinct brand identity that speaks volumes.'
    },
    {
        icon: '/assets/images/service-icon/digital.png',
        title: 'Digital Marketing',
        description: 'From SEO to social media, we ensure your brand stands out online.'
    },
    {
        icon: '/assets/images/service-icon/content.png',
        title: 'Content Creation',
        description: 'Engaging stories that connect with your audience across all platforms.'
    }
]);

</script>
<template>
    <Head title="Service" />
    <Main>
        <section>
            <div class="w-full text-center">
                <!-- Slider -->
                <Swiper
                    :modules="[Navigation, Pagination, Autoplay]"
                    :slides-per-view="1"
                    :space-between="20"
                    :breakpoints="{
                        640: { slidesPerView: 1.5 },
                        768: { slidesPerView: 2 },
                        1024: { slidesPerView: 2.5 }
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
                        <div class="rounded-3xl overflow-hidden shadow-md w-full h-48 sm:h-60 md:h-72 lg:h-[450px]">
                            <img
                                :src="slide"
                                alt="Mission image"
                                class="w-full h-full object-cover object-center"
                            >
                        </div>
                    </SwiperSlide>
                </Swiper>
            </div>
            <div class="container mx-auto text-center mt-[50px]">
                <!-- Heading -->
                <h2 class="text-[48px] font-bold text-[#2B3C50] leading-tight dark-text">
                    Marketing & <span class="text-[#FFA629]">Branding</span>
                </h2>
                <!-- Subheading -->
                <div class="w-10/12 mx-auto">
                    <p class="mt-[35px] text-[#2B3C50] text-[16px] font-roboto max-w-2xl mx-auto leading-relaxed dark-text">
                        At Second Source, we don't just market brands—we craft experiences. Our marketing & branding strategies are designed to resonate with your audience, build loyalty, and drive measurable growth.
                    </p>
                </div>
            </div>
        </section>
        <section class="w-full mt-[60px]">
            <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6  rounded-[24px]">
                <!-- Left Content -->
                <div class="bg-gray-50 flex items-center justify-center px-4 md:px-[30px] pt-[10px] dark-bg">
                    <div class="max-w-6xl w-full">
                        <div class="text-left mb-10">
                            <h1 class="text-[36px] font-bold text-[#2B3C50] dark:text-[#FFFFFF]">We Offer</h1>
                            <p class="mt-4 text-[#2B3C50]/70 dark:text-[#FAFAFA]/70 font-roboto">
                                Comprehensive Marketing & Branding Solutions Tailored to Your Business.
                            </p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div v-for="service in services" :key="service.title" class="flex flex-col items-center text-center p-8 bg-white dark:bg-[#2B3C50] rounded-xl shadow-lg transition-transform transform hover:scale-105">
                                <img :src="service.icon" alt="icon">
                                <h3 class="text-[#F25C30] font-bold text-[15px]">{{ service.title }}</h3>
                                <p class="mt-2 text-[#2B3C50] dark:text-[#FAFAFA] font-roboto text-[12px]">{{ service.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Slider -->
                <div class="flex-1 w-full px-4 md:px-0">
                    <ServiceOfferSlider/>
                </div>
            </div>
        </section>
        <section class="w-full mt-[60px]">
            <div class="container mx-auto flex flex-col md:flex-row items-center gap-4 px-3">
                <!-- Left Side -->
                <div class="w-full bg-[#FFF9F2] md:w-[60%] rounded-2xl dark-bg">
                    <div class="w-full py-12 px-4 md:px-8">
                        <!-- Title -->
                        <h2 class="text-[36px] font-bold text-[#2B3C50] dark:text-[#FFFFFF] mb-4">
                            Branding Services
                        </h2>

                        <!-- Subtitle -->
                        <p class="md:w-10/12 text-[16px] text-[#2B3C50]/70 font-roboto mb-6 dark:text-[#FAFAFA]">
                            Branding services help businesses create a unique and memorable identity
                            that resonates with their target audience.
                        </p>

                        <div class="mt-10 space-y-6">
                            <!-- Row 1 -->
                            <div class="flex flex-col md:flex-row justify-center gap-3 md:gap-6">
                                <button class="bubble">
                                    Marketing Strategy & Consultation
                                </button>
                            </div>

                            <!-- Row 2 -->
                            <div class="flex flex-col md:flex-row justify-center gap-3 md:gap-6">
                                <button class="bubble flex gap-2 items-center !bg-[#F25C30] !text-white !border-0">
                                    <img src="/assets/icons/computer.png" alt="icon">
                                    Digital Marketing
                                </button>
                                <button class="bubble">
                                    Logo Design & Visual Identity
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Right Side -->
                <div class="w-full md:w-[40%]">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Left column (2 stacked images) -->
                        <div class="grid grid-rows-2 gap-6 h-[368px]">
                            <!-- Top Image -->
                            <div class="relative rounded-2xl overflow-hidden">
                                <img src="/assets/images/what_we_build/photo-3.png" alt="Top Image" class="w-full h-full object-cover">
                            </div>

                            <!-- Bottom Image -->
                            <div class="relative rounded-2xl overflow-hidden">
                                <img src="/assets/images/what_we_build/photo-1.png" alt="Bottom Image" class="w-full h-full object-cover">
                            </div>
                        </div>

                        <!-- Right column (1 tall image) -->
                        <div class="relative rounded-2xl overflow-hidden h-[368px]">
                            <img src="/assets/images/what_we_build/photo-2.png" alt="Right Image" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full mt-[60px]">
            <div class="container mx-auto">
                <div class="w-full space-y-[20px] mb-[30px]">
                    <h1 class="text-[32px] font-bold text-[#2B3C50] dark:text-[#FFFFFF]">Explore Our Previous Work</h1>
                    <p  class="text-[16px] font-roboto text-[#2B3C50]/70 dark:text-[#FAFAFA]/70">Defining clear brand standards and compelling messaging to ensure consistency and impact across all design touch points.</p>
                </div>
                <div class="w-full  grid grid-cols-1 md:grid-cols-2 gap-4">
                    <Link class="w-full h-[461px]">
                        <img src="/assets/images/service/prev-behance.png" alt="image" class="w-full h-full">
                    </Link>
                    <Link class="w-full h-[461px]">
                        <img src="/assets/images/service/prev-dribbble.png" alt="image" class="w-full h-full">
                    </Link>
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
