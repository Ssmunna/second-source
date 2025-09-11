<script setup>
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import Main from "@/layouts/frontend/Main.vue";
import HeroSectionWithVideo from "@/components/frontend/common/HeroSectionWithVideo.vue";
import PeopleSwiperSlider from "@/components/frontend/career/PeopleSwiperSlider.vue";
import BuildWithUsSwiperSlider from "@/components/frontend/career/BuildWithUsSwiperSlider.vue";
import {Head} from "@inertiajs/vue3";

const title = `The Algorithm Has a <span class="text-[#F25C30]">Heartbeat</span>`;
const subtitle = 'This is how we redefine software excellence. We\'re seeking collaborators who share our dual passion for technical mastery and meaningful user experiences.'

const peoples = [
    {
        image: "/assets/images/career/people.png",
        name: "Shaurav Hasan",
        role: "Product Designer",
    },
    {
        image: "/assets/images/career/people.png",
        name: "Alicia Gomez",
        role: "UI/UX Specialist",
    },
    {
        image: "/assets/images/career/people.png",
        name: "Michael Lee",
        role: "Frontend Developer",
    },
    {
        image: "/assets/images/career/people.png",
        name: "Sophia Khan",
        role: "Project Manager",
    },
    {
        image: "/assets/images/career/people.png",
        name: "David Chen",
        role: "Backend Engineer",
    },
    {
        image: "/assets/images/career/people.png",
        name: "David Chen",
        role: "Backend Engineer",
    },
    {
        image: "/assets/images/career/people.png",
        name: "David Chen",
        role: "Backend Engineer",
    },
    {
        image: "/assets/images/career/people.png",
        name: "David Chen",
        role: "Backend Engineer",
    },
    {
        image: "/assets/images/career/people.png",
        name: "David Chen",
        role: "Backend Engineer",
    },
    {
        image: "/assets/images/career/people.png",
        name: "David Chen",
        role: "Backend Engineer",
    },

];


const responsibilities = [
    "Build interfaces and experiences for products in SaaS, Fintech, Proptech, Consumer Apps and E-commerce Domains;",
    "Become a product designer that drives his/her own design decisions and care about how they perform;",
    "Take part in mutual design reviews for your design team peers;",
    "Build scalable and sustainable design systems;",
    "Work in a close collaboration with the Lead Designer everyday;",
    "Work and iterate a lot together with our Head of Design;",
    "Take part in direct communication with the clients;",
    "Go through the onboarding bootcamp with a lot of hands-on materials that will take you into our best practices on design systems, discovery frameworks and UX patterns."
];

</script>
<template>
    <Head title="Career" />
    <Main>
        <HeroSectionWithVideo :title="title" :subtitle="subtitle" />
        <div class="container px-3 mx-auto flex flex-col lg:flex-row items-center gap-10 sm:gap-2 mt-[60px] overflow-hidden">
            <!-- Left Text -->
            <div class="w-full lg:min-w-[365px]">
                <h2 class="text-[36px] font-bold text-[#F25C30] mb-4">
                    Meet the Humans<br>
                    Behind the Logs
                </h2>
                <p class="text-[14px] text-[#2B3C50] font-roboto">
                    Real people debugging your reality, one incident at a time.
                </p>
            </div>

            <!-- Right Slider -->
            <div class="flex-1 w-full">
                <PeopleSwiperSlider :peoples="peoples" />
            </div>
        </div>
        <section class="w-full mt-[60px]">
            <div class="container mx-auto flex flex-col md:flex-row gap-10 bg-[#FAFAFA] dark-bg">
                <!-- Left Content -->
                <div class="w-full md:w-[50%] text-left md:p-10">
                    <h2 class="text-[38px] md:text-[48px] font-bold text-[#2A2A2A] dark-text">
                        Build With <span class="text-[#F25C30]">Us</span>
                    </h2>
                    <p class="mt-4 text-[16px] font-roboto text-gray-600 leading-relaxed max-w-[500px] dark-text">
                        Join a team where your work solves real problems, not just business metrics.
                    </p>
                </div>

                <!-- Right Slider -->
                <div class="w-full md:w-[50%]">
                    <BuildWithUsSwiperSlider/>
                </div>
            </div>
        </section>
        <section class="w-full">
            <div v-for="i in 3" :key="i" class="container mx-auto odd:bg-[#FFF7EB] dark-bg rounded-[24px] py-[24px] px-[44px] mt-[60px]">
                <div class="w-full flex flex-col lg:flex-row gap-6">
                    <!--  Left side -->
                    <div class="w-full lg:w-[50%]">
                        <div class="mb-5">
                            <h1 class="text-[36px] font-bold text-[#2B3C50] dark-text mb-6">
                                Senior Product Designer
                            </h1>
                            <p class="text-[16px] text-[#F25C30] font-bold">
                                As a designer at Metacarbon you will:
                            </p>
                        </div>

                        <div class="w-full">
                            <ul class="w-full space-y-1.5">
                                <li v-for="(item, i) in responsibilities" :key="i" class="flex items-start">
                                    <span class="w-1 h-1 bg-gray-400 rounded-full mt-3 mr-2 flex-shrink-0"></span>
                                    <span class="text-[14px] font-roboto text-[#2B3C50] dark:text-[#FAFAFA]/60">
                                  {{ item }}
                                </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--  Right side -->
                    <div class="w-full lg:w-[50%] flex items-center justify-center">
                        <div class="relative flex flex-col md:items-center space-y-4 sm:space-y-6">
                            <!-- Row 1 -->
                            <div class="flex justify-center">
                                <span class="bubble">Experience At least 2 years</span>
                            </div>

                            <!-- Row 2 -->
                            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6 justify-center">
                                <span class="bubble">Experience At least 2 years</span>
                                <span class="bubble">Experience At least 2 years</span>
                            </div>

                            <!-- Row 3 -->
                            <div class="flex justify-center relative">
                                <!-- dotted line (hide on mobile if needed) -->
                                <div class="absolute left-0 top-1/2 w-full flex justify-center -z-10 hidden sm:flex">
                                    <div class="border-t border-dotted border-blue-400 w-[70%]"></div>
                                </div>
                                <span class="bubble">Experience At least 2 years</span>
                            </div>

                            <!-- Row 4 -->
                            <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-6 justify-center">
                                <span class="bubble">Experience At least 2 years</span>
                                <span class="bubble">Experience At least 2 years</span>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="w-[270px] lg:w-[300px] h-[48px] mx-auto mt-[44px] rounded-[20px] flex items-center justify-center gap-8
                        cursor-pointer border border-[#F25C30]
                        bg-[#F25C30] text-white font-sans font-bold">
                    Apply as a candidate
                    <svg width="25" height="17" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.1855 7.21834L14.6823 1.71514L16.2732 0.124146L24.4934 8.34425L16.2732 16.5644L14.6823 14.9734L20.1873 9.46834L0.781433 9.4684V7.2184L20.1855 7.21834Z" fill="white"/>
                    </svg>
                </button>
            </div>
        </section>
    </Main>
</template>

<style scoped>

</style>
