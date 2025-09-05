<script setup>
import Main from "@/layouts/frontend/Main.vue";
import LargeScreenNav from "@/components/frontend/header/LargeScreenNav.vue";
import SmallScreenNav from "@/components/frontend/header/SmallScreenNav.vue";
import VideoPlayer from "@/components/frontend/home/VideoPlayer.vue";
import TrustedSwiperSlider from "@/components/frontend/home/TrustedSwiperSlider.vue";
import WorkWithUsSwiperSlider from "@/components/frontend/home/WorkWithUsSwiperSlider.vue";
import {Link} from "@inertiajs/vue3";


const logos = [
    "/assets/images/brand/photo-1.png",
    "/assets/images/brand/photo-2.png",
    "/assets/images/brand/photo-3.png",
    "/assets/images/brand/photo-4.png",
    "/assets/images/brand/photo-5.png",
    "/assets/images/brand/photo-6.png",
    "/assets/images/brand/photo-7.png",
    "/assets/images/brand/photo-8.png",
    "/assets/images/brand/photo-9.png",
    "/assets/images/brand/photo-10.png",
];
</script>

<template>
    <Main>
        <!-- Header section start here -->
        <div class="container mx-auto">
            <LargeScreenNav />
            <SmallScreenNav />
        </div>
        <!-- Header section ends here -->

        <!-- Hero section start here -->
        <div class="container px-3 mx-auto">
            <!-- Title section start here -->
            <div class="w-full md:max-w-[780px] mx-auto mt-[35px]">
                <h1 class="text-center text-[28px] sm:text-[48px] font-[700] text-[#2B3C50]">
                    Helping Businesses <span class="text-[#F25C30]">Grow<br />Globally</span>with Complete Solutions
                </h1>
            </div>

            <div class="w-full md:max-w-[780px] mx-auto mt-[19px]">
                <h1 class="text-center text-[12px] sm:text-[16px] font-[400] text-[#2B3C50] font-roboto">
                    We provide smart solutions, modern technology, and expert support to help your business succeed worldwide.
                </h1>
            </div>
            <!-- Title section ends here -->

            <!-- Start project button start here  -->
            <button type="button" class="w-[270px] lg:w-[300px] h-[48px] mx-auto mt-[44px] rounded-[20px] flex items-center justify-center gap-8
            cursor-pointer border border-[#F25C30]
           bg-[#F25C30] text-white font-sans font-bold">
                START A PROJECT
                <svg width="25" height="17" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.1855 7.21834L14.6823 1.71514L16.2732 0.124146L24.4934 8.34425L16.2732 16.5644L14.6823 14.9734L20.1873 9.46834L0.781433 9.4684V7.2184L20.1855 7.21834Z" fill="white"/>
                </svg>
            </button>
            <!-- Start project button ends here  -->
        </div>

        <div class="container mx-auto px-3">
            <VideoPlayer className="w-full max-h-[459px] mt-[60px] rounded-[24px]" />
        </div>
        <!-- Hero section ends here -->

        <!-- Brand section start here -->
        <div class="container px-3 mx-auto flex flex-col sm:flex-row items-center gap-4 sm:gap-2 mt-[60px] overflow-hidden">
            <!-- Left Text -->
            <div class="flex-shrink-0 text-xl font-semibold text-orange-600">
                <h2 class="text-[36px] font-bold font-sans text-[#F25C30]">Trusted By</h2>
            </div>

            <!-- Right Slider -->
            <div class="flex-1 w-full h-[63px]"> <!-- fixed height -->
                <TrustedSwiperSlider :logos="logos" />
            </div>
        </div>
        <!-- Brand section ends here -->

        <!-- work with us section start here -->
        <section class="w-full mt-[60px] bg-[#FAFAFA]">
            <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2">
                <!-- Left Content -->
                <div class="flex-1 text-left p-10">
                    <h2 class="text-[38px] md:text-[48px] font-bold text-[#2A2A2A]">
                        Why Work With <span class="text-[#F25C30]">Us?</span>
                    </h2>
                    <p class="text-[#F25C30] mt-3 font-bold font-sans">
                        Because Your Growth is Our Priority
                    </p>
                    <p class="mt-4 text-[16px] font-roboto text-gray-600 leading-relaxed max-w-[500px]">
                        We don’t just offer services, we create solutions that help your
                        business move faster. Every idea, every design, and every strategy
                        is built to keep you ahead of the competition.
                    </p>
                </div>

                <!-- Right Slider -->
                <div class="flex-1 w-full p-3">
                    <WorkWithUsSwiperSlider/>
                </div>
            </div>
        </section>
        <!-- work with us section ends here -->

        <!-- what we build section start here -->
        <div class="bg-[#FAFAFA] m-16 container mx-auto px-3 grid grid-cols-1 lg:grid-cols-2 gap-4">
            <div class="w-full">
                <!-- Heading -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl px-8 sm:px-0 font-bold leading-snug text-[#2B3C50]">
                    See <span class="text-[#F25C30]">What We’ve Built</span> Together
                </h2>
                <!-- Subtext -->
                <p class="mt-[32px] text-[#2B3C50] px-8 sm:px-0 text-[16px] font-roboto">
                    Every project tells a story of collaboration, innovation, and success.
                    Explore our portfolio and discover how we bring ideas to life.
                </p>

                <div class="mt-10 space-y-6">
                    <!-- Row 1 -->
                    <div class="flex flex-col md:flex-row justify-center gap-3 md:gap-6">
                        <button class="w-full md:w-auto px-[24px] py-[6px] rounded-full border border-[#2B3C50] text-[#2B3C50] text-[16px] font-[400] hover:bg-[#F25C30] hover:border-[#F25C30] hover:text-white duration-150 transition">
                            App Design & Development
                        </button>
                    </div>

                    <!-- Row 2 -->
                    <div class="flex flex-col md:flex-row justify-center gap-3 md:gap-6">
                        <button class="w-full md:w-auto px-[24px] py-[6px] rounded-full border border-[#2B3C50] text-[#2B3C50] text-[16px] font-[400] hover:bg-[#F25C30] hover:border-[#F25C30] hover:text-white duration-150 transition">
                            Data Entry & Virtual Assistance
                        </button>
                        <button class="w-full md:w-auto px-[24px] py-[6px] rounded-full border border-[#2B3C50] text-[#2B3C50] text-[16px] font-[400] hover:bg-[#F25C30] hover:border-[#F25C30] hover:text-white duration-150 transition">
                            Business & Financial Services
                        </button>
                    </div>

                    <!-- Row 3 -->
                    <div class="flex flex-col md:flex-row justify-center gap-3 md:gap-6">
                        <button class="w-full md:w-auto px-[24px] py-[6px] rounded-full border border-[#2B3C50] text-[#2B3C50] text-[16px] font-[400] hover:bg-[#F25C30] hover:border-[#F25C30] hover:text-white duration-150 transition">
                            Marketing & Branding
                        </button>
                        <button class="w-full md:w-auto px-[24px] py-[6px] rounded-full border border-[#2B3C50] text-[#2B3C50] text-[16px] font-[400] hover:bg-[#F25C30] hover:border-[#F25C30] hover:text-white duration-150 transition">
                            Telemarketing & Customer Support
                        </button>
                    </div>

                    <!-- Row 4 -->
                    <div class="flex flex-col md:flex-row justify-center gap-3 md:gap-6">
                        <button class="w-full md:w-auto flex items-center gap-2 px-[24px] py-[6px] rounded-full border border-[#2B3C50] text-[#2B3C50] text-[16px] font-[400] hover:bg-[#F25C30] hover:border-[#F25C30] hover:text-white duration-150 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M0 128c0-35.3 28.7-64 64-64h384c35.3 0 64 28.7 64 64v256c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64zm64 32v64c0 17.7 14.3 32 32 32h320c17.7 0 32-14.3 32-32v-64c0-17.7-14.3-32-32-32H96c-17.7 0-32 14.3-32 32m16 160c-13.3 0-24 10.7-24 24s10.7 24 24 24h56c13.3 0 24-10.7 24-24s-10.7-24-24-24zm136 0c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24z"/>
                            </svg>
                            Web Design & Development
                        </button>
                        <button class="w-full md:w-auto px-[24px] py-[6px] rounded-full border border-[#2B3C50] text-[#2B3C50] text-[16px] font-[400] hover:bg-[#F25C30] hover:border-[#F25C30] hover:text-white duration-150 transition">
                            Software Development
                        </button>
                    </div>

                    <!-- Row 5 -->
                    <div class="flex flex-col md:flex-row justify-center gap-3 md:gap-6">
                        <button class="w-full md:w-auto px-[24px] py-[6px] rounded-full border border-[#2B3C50] text-[#2B3C50] text-[16px] font-[400] hover:bg-[#F25C30] hover:border-[#F25C30] hover:text-white duration-150 transition">
                            UI/UX Design
                        </button>
                        <button class="w-full md:w-auto px-[24px] py-[6px] rounded-full border border-[#2B3C50] text-[#2B3C50] text-[16px] font-[400] hover:bg-[#F25C30] hover:border-[#F25C30] hover:text-white duration-150 transition">
                            Analytics & Reporting
                        </button>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Left column (2 stacked images) -->
                <div class="grid grid-rows-2 gap-6">
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
                <div class="relative rounded-2xl overflow-hidden">
                    <img src="/assets/images/what_we_build/photo-2.png" alt="Right Image" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
        <!-- what we build section ends here -->

        <!-- template hub section start here -->
        <section class="container mx-auto bg-gradient-to-b from-gray-200 to-[#F25C30] rounded-3xl p-12 mt-16">
            <!-- Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Card 1 -->
                <div class="relative rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <!-- Image full card -->
                    <img src="/assets/images/template_hub/photo-1.png" alt="Template Preview" class="w-full h-64 object-cover">
                    <!-- Content with gradient background -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#F25C30]/95 to-transparent p-4">
                        <h3 class="text-white font-medium">Something Landing Page</h3>
                        <div class="flex items-center mt-2 gap-2">
                            <!-- Bookmark icon -->
                            <button class="text-white">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0 1.48627C0 1.2177 0.108026 0.960427 0.299754 0.772366L0.795505 0.286098C0.982455 0.102724 1.23388 0 1.49575 0H13.7248C13.9867 0 14.2381 0.102724 14.425 0.286098L14.9208 0.772366C15.1125 0.960427 15.2206 1.2177 15.2206 1.48627V18.2621C15.2206 19.0332 14.3847 19.5141 13.718 19.1266L8.11281 15.8686C7.80212 15.688 7.41843 15.688 7.10775 15.8686L1.50253 19.1266C0.835867 19.5141 0 19.0332 0 18.2621V1.48627ZM3.17436 2.13277C2.62208 2.13277 2.17436 2.58049 2.17436 3.13277V14.5192C2.17436 15.2903 3.01025 15.7712 3.67691 15.3837L7.10773 13.3895C7.41842 13.2089 7.80213 13.2089 8.11282 13.3895L11.5436 15.3837C12.2103 15.7712 13.0462 15.2903 13.0462 14.5192V3.13277C13.0462 2.58049 12.5985 2.13277 12.0462 2.13277H3.17436Z"
                                          fill="white"/>
                                </svg>
                            </button>
                            <span class="text-white font-semibold">$29</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <!-- Image full card -->
                    <img src="/assets/images/template_hub/photo-2.png" alt="Template Preview" class="w-full h-64 object-cover">

                    <!-- Content with gradient background -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#F25C30]/95 to-transparent p-4">
                        <h3 class="text-white font-medium">Something Landing Page</h3>
                        <div class="flex items-center mt-2 gap-2">
                            <!-- Bookmark icon -->
                            <button class="text-white">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0 1.48627C0 1.2177 0.108026 0.960427 0.299754 0.772366L0.795505 0.286098C0.982455 0.102724 1.23388 0 1.49575 0H13.7248C13.9867 0 14.2381 0.102724 14.425 0.286098L14.9208 0.772366C15.1125 0.960427 15.2206 1.2177 15.2206 1.48627V18.2621C15.2206 19.0332 14.3847 19.5141 13.718 19.1266L8.11281 15.8686C7.80212 15.688 7.41843 15.688 7.10775 15.8686L1.50253 19.1266C0.835867 19.5141 0 19.0332 0 18.2621V1.48627ZM3.17436 2.13277C2.62208 2.13277 2.17436 2.58049 2.17436 3.13277V14.5192C2.17436 15.2903 3.01025 15.7712 3.67691 15.3837L7.10773 13.3895C7.41842 13.2089 7.80213 13.2089 8.11282 13.3895L11.5436 15.3837C12.2103 15.7712 13.0462 15.2903 13.0462 14.5192V3.13277C13.0462 2.58049 12.5985 2.13277 12.0462 2.13277H3.17436Z"
                                          fill="white"/>
                                </svg>
                            </button>
                            <span class="text-white font-semibold">$29</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <!-- Image full card -->
                    <img src="/assets/images/template_hub/photo-3.png" alt="Template Preview" class="w-full h-64 object-cover">

                    <!-- Content with gradient background -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#F25C30]/95 to-transparent p-4">
                        <h3 class="text-white font-medium">Something Landing Page</h3>
                        <div class="flex items-center mt-2 gap-2">
                            <!-- Bookmark icon -->
                            <button class="text-white">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0 1.48627C0 1.2177 0.108026 0.960427 0.299754 0.772366L0.795505 0.286098C0.982455 0.102724 1.23388 0 1.49575 0H13.7248C13.9867 0 14.2381 0.102724 14.425 0.286098L14.9208 0.772366C15.1125 0.960427 15.2206 1.2177 15.2206 1.48627V18.2621C15.2206 19.0332 14.3847 19.5141 13.718 19.1266L8.11281 15.8686C7.80212 15.688 7.41843 15.688 7.10775 15.8686L1.50253 19.1266C0.835867 19.5141 0 19.0332 0 18.2621V1.48627ZM3.17436 2.13277C2.62208 2.13277 2.17436 2.58049 2.17436 3.13277V14.5192C2.17436 15.2903 3.01025 15.7712 3.67691 15.3837L7.10773 13.3895C7.41842 13.2089 7.80213 13.2089 8.11282 13.3895L11.5436 15.3837C12.2103 15.7712 13.0462 15.2903 13.0462 14.5192V3.13277C13.0462 2.58049 12.5985 2.13277 12.0462 2.13277H3.17436Z"
                                          fill="white"/>
                                </svg>
                            </button>
                            <span class="text-white font-semibold">$29</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="relative rounded-2xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <!-- Image full card -->
                    <img src="/assets/images/template_hub/photo-4.png" alt="Template Preview" class="w-full h-64 object-cover">

                    <!-- Content with gradient background -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-[#F25C30]/95 to-transparent p-4">
                        <h3 class="text-white font-medium">Something Landing Page</h3>
                        <div class="flex items-center mt-2 gap-2">
                            <!-- Bookmark icon -->
                            <button class="text-white">
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M0 1.48627C0 1.2177 0.108026 0.960427 0.299754 0.772366L0.795505 0.286098C0.982455 0.102724 1.23388 0 1.49575 0H13.7248C13.9867 0 14.2381 0.102724 14.425 0.286098L14.9208 0.772366C15.1125 0.960427 15.2206 1.2177 15.2206 1.48627V18.2621C15.2206 19.0332 14.3847 19.5141 13.718 19.1266L8.11281 15.8686C7.80212 15.688 7.41843 15.688 7.10775 15.8686L1.50253 19.1266C0.835867 19.5141 0 19.0332 0 18.2621V1.48627ZM3.17436 2.13277C2.62208 2.13277 2.17436 2.58049 2.17436 3.13277V14.5192C2.17436 15.2903 3.01025 15.7712 3.67691 15.3837L7.10773 13.3895C7.41842 13.2089 7.80213 13.2089 8.11282 13.3895L11.5436 15.3837C12.2103 15.7712 13.0462 15.2903 13.0462 14.5192V3.13277C13.0462 2.58049 12.5985 2.13277 12.0462 2.13277H3.17436Z"
                                          fill="white"/>
                                </svg>
                            </button>
                            <span class="text-white font-semibold">$29</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Section -->
            <div class="text-center mt-12">
                <h2 class="text-2xl sm:text-3xl font-bold text-[#FFFFFF]">Templates Hub</h2>
                <div class="w-10/12 mx-auto text-center">
                    <p class="mt-2 text-[#FAFAFA] max-w-2xl mx-auto font-roboto">Looking for a website or mobile app that’s ready to go? Explore our collection of premium templates, whether it’s an online store, a portfolio, or a business site, we’ve got you covered.</p>
                </div>

                <button type="button" class="mt-6 w-[216px] py-3 mx-auto rounded-[20px] flex items-center justify-center gap-10 cursor-pointer bg-[#2B3C50] text-white font-sans font-bold">
                    Explore
                    <svg width="25" height="17" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.1855 7.21834L14.6823 1.71514L16.2732 0.124146L24.4934 8.34425L16.2732 16.5644L14.6823 14.9734L20.1873 9.46834L0.781433 9.4684V7.2184L20.1855 7.21834Z" fill="white"/>
                    </svg>
                </button>
            </div>
        </section>
        <!-- template hub section ends here -->

        <!-- get in touch section start here -->
        <section class="relative bg-[url('/assets/images/get_in_touch/photo-2.png')] container mx-auto px-6  bg-cover bg-center rounded-2xl my-16">
            <div class="p-8 relative z-10">
                <div class="flex flex-col md:flex-row items-center md:items-center gap-8">

                    <!-- Right: Text + Button -->
                    <div class="flex-1 text-center space-y-8">
                        <!-- Small icon + text -->
                        <div class="flex justify-center items-center gap-2 text-white">
                            <!-- SVG icon -->
                            <svg width="51" height="51" viewBox="0 0 51 51" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_34_1373)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M33.8677 34.9612L43.4291 26.5935L35.0615 17.032C30.4402 11.7514 22.413 11.2169 17.1323 15.8382C11.8517 20.4596 11.3172 28.4867 15.9385 33.7674C20.5599 39.048 28.587 39.5825 33.8677 34.9612ZM29.0583 33.0867C26.9355 34.0692 25.0632 31.9596 25.2186 29.6256L25.5 25.3997L25.7814 21.1738C25.9367 18.8398 28.0723 16.997 30.046 18.2523C30.7212 18.6817 31.3379 19.2083 31.8743 19.8213C33.3538 21.5118 34.1011 23.7209 33.9519 25.9625C33.8026 28.204 32.769 30.2945 31.0784 31.774C30.4655 32.3104 29.7844 32.7506 29.0583 33.0867Z" fill="#F25C30"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_34_1373">
                                        <rect width="36" height="36" fill="white" transform="translate(50.8996 27.0908) rotate(138.809)"/>
                                    </clipPath>
                                </defs>
                            </svg>

                            <span class="text-white text-[18px] md:text-[24px] font-[600] md:text-base">Now available for hire</span>
                        </div>

                        <!-- Main heading -->
                        <h2 class="mt-3 text-3xl md:text-[48px] font-bold text-white">
                            Get in <span class="text-[#FFA629]">touch</span>
                        </h2>

                        <!-- CTA button -->
                        <div class="mt-6">
                            <button type="button" class="mt-6 w-[249px] py-3 mx-auto rounded-full flex items-center border border-[#F25C30] justify-center gap-14 cursor-pointer bg-[#F25C30] text-white hover:bg-transparent hover:border-[#F25C30] hover:text-white duration-150 font-sans font-[700]">
                                Schedule a call
                                <svg width="25" height="17" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.1855 7.21834L14.6823 1.71514L16.2732 0.124146L24.4934 8.34425L16.2732 16.5644L14.6823 14.9734L20.1873 9.46834L0.781433 9.4684V7.2184L20.1855 7.21834Z" fill="white"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Left: Person image (breaking out) -->
            <div class="absolute -left-10 bottom-0 md:left-[18px]">
                <img src="/assets/images/get_in_touch/photo-1.png" alt="Man" class="w-64 md:w-[380px] lg:w-[480px]">
            </div>
        </section>
        <!-- get in touch section ends here -->

        <!-- about section start here -->
        <section class="container mx-auto pl-4 py-10">
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Left Column -->
                <div class="flex-1 bg-[#FAFAFA] rounded-2xl p-6 flex flex-col justify-between gap-6">
                    <!-- Logo + Info -->
                    <div class="flex items-center gap-4">
                        <img src="/assets/images/logo.png" alt="Logo" class="w-16 h-16 object-contain">
                        <div>
                            <h2 class="text-xl font-semibold text-gray-800">The Second Source LLC</h2>
                            <p class="text-gray-500 text-sm">
                                House - 2, Road - 27, Housing Estate, Uposhohor, Bogura
                            </p>
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <h3 class="font-semibold text-gray-800">At Second Source LLC</h3>
                        <p class="text-gray-600 mt-2 text-sm leading-relaxed">
                            We specialize in empowering businesses with innovative solutions, advanced technology,
                            and unmatched expertise.
                        </p>
                    </div>
                </div>

                <!-- Center Column (Social Links) -->
                <div class="flex-1 flex flex-col gap-4">
                    <Link class="flex items-center justify-between bg-gray-50 hover:bg-gray-100 p-7 rounded-xl">
                        <span class="text-gray-700 font-medium">Dribbble</span>
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.3334 10.1251C18.3347 11.2227 18.1186 12.3097 17.6974 13.3233C17.2763 14.3369 16.6584 15.257 15.8796 16.0305C15.1071 16.8016 14.1902 17.4129 13.1814 17.8294C12.1725 18.246 11.0915 18.4598 10 18.4584C5.39753 18.4584 1.6667 14.7276 1.6667 10.1251C1.6637 7.98831 2.48448 5.93261 3.95836 4.38551C4.73596 3.56486 5.67286 2.91155 6.71171 2.46556C7.75055 2.01957 8.86949 1.79029 10 1.79175C11.0915 1.79041 12.1725 2.00414 13.1814 2.42073C14.1902 2.83732 15.1071 3.44861 15.8796 4.21967C16.6584 4.99313 17.2763 5.91324 17.6974 6.92684C18.1186 7.94045 18.3347 9.02747 18.3334 10.1251Z" stroke="#2B3C50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M18.3334 10.125C17.1175 10.125 13.7634 9.66665 10.7613 10.9846C7.50004 12.4166 5.13879 14.6383 4.10962 16.0196" stroke="#2B3C50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6.875 2.39771C8.17917 3.60146 11.025 6.66604 12.0833 9.70854C13.1417 12.751 13.5333 16.4919 13.775 17.5565" stroke="#2B3C50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1.73083 9.0833C3.305 9.1783 7.47209 9.26372 10.1388 8.12497C12.8054 6.98622 15.1 4.89163 15.8871 4.22705M2.29167 13.2971C3.02608 15.0744 4.35038 16.5445 6.04167 17.46" stroke="#2B3C50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1.6667 10.1251C1.6637 7.98831 2.48448 5.93261 3.95836 4.38551C4.73596 3.56486 5.67286 2.91155 6.71171 2.46556C7.75055 2.01957 8.86949 1.79029 10 1.79175M13.3334 2.48509C14.2825 2.9 15.1461 3.48824 15.8796 4.21967C16.6584 4.99313 17.2763 5.91324 17.6974 6.92684C18.1186 7.94045 18.3347 9.02747 18.3334 10.1251C18.3334 11.1509 18.1479 12.1338 17.8084 13.0418M10 18.4584C11.0915 18.4598 12.1725 18.246 13.1814 17.8294C14.1902 17.4129 15.1071 16.8016 15.8796 16.0305" stroke="#2B3C50" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </Link>
                    <a href="#" class="flex items-center justify-between bg-gray-50 hover:bg-gray-100 p-7 rounded-xl">
                        <span class="text-gray-700 font-medium">Behance</span>
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.6563 6.625C12.6563 6.50068 12.7056 6.38145 12.7935 6.29354C12.8815 6.20564 13.0007 6.15625 13.125 6.15625H18.125C18.2493 6.15625 18.3686 6.20564 18.4565 6.29354C18.5444 6.38145 18.5938 6.50068 18.5938 6.625C18.5938 6.74932 18.5444 6.86855 18.4565 6.95646C18.3686 7.04436 18.2493 7.09375 18.125 7.09375H13.125C13.0007 7.09375 12.8815 7.04436 12.7935 6.95646C12.7056 6.86855 12.6563 6.74932 12.6563 6.625ZM19.2188 12.25C19.2188 12.3743 19.1694 12.4935 19.0815 12.5815C18.9936 12.6694 18.8743 12.7188 18.75 12.7188H13.0078C13.1193 13.3319 13.4422 13.8866 13.9204 14.2863C14.3986 14.686 15.0018 14.9053 15.625 14.9062C15.974 14.9084 16.3198 14.8404 16.6419 14.7062C16.964 14.572 17.2558 14.3743 17.5 14.125C17.5889 14.0386 17.708 13.9903 17.832 13.9903C17.956 13.9903 18.0751 14.0386 18.1641 14.125C18.2087 14.168 18.2442 14.2196 18.2685 14.2766C18.2928 14.3337 18.3053 14.395 18.3053 14.457C18.3053 14.519 18.2928 14.5804 18.2685 14.6374C18.2442 14.6945 18.2087 14.7461 18.1641 14.7891C17.5756 15.3765 16.8017 15.7418 15.9741 15.8225C15.1466 15.9033 14.3166 15.6946 13.6257 15.2321C12.9348 14.7695 12.4256 14.0816 12.185 13.2857C11.9444 12.4898 11.9872 11.6351 12.3062 10.8672C12.6251 10.0993 13.2005 9.46582 13.9342 9.07463C14.6679 8.68343 15.5146 8.55876 16.3299 8.72186C17.1453 8.88496 17.8788 9.32574 18.4056 9.96908C18.9323 10.6124 19.2197 11.4185 19.2188 12.25ZM18.2422 11.7812C18.1353 11.1647 17.8141 10.6056 17.3353 10.2027C16.8565 9.7998 16.2508 9.57887 15.625 9.57887C14.9992 9.57887 14.3935 9.7998 13.9147 10.2027C13.4359 10.6056 13.1147 11.1647 13.0078 11.7812H18.2422ZM10.7813 12.7188C10.7813 13.5476 10.452 14.3424 9.86596 14.9285C9.27991 15.5145 8.48505 15.8438 7.65625 15.8438H2.5C2.37568 15.8438 2.25645 15.7944 2.16854 15.7065C2.08064 15.6185 2.03125 15.4993 2.03125 15.375V5.375C2.03125 5.25068 2.08064 5.13145 2.16854 5.04354C2.25645 4.95564 2.37568 4.90625 2.5 4.90625H6.71875C7.28119 4.90617 7.83073 5.07472 8.2964 5.39014C8.76207 5.70555 9.12247 6.15334 9.33106 6.67566C9.53966 7.19799 9.58686 7.77086 9.46657 8.32028C9.34627 8.8697 9.06402 9.37044 8.65625 9.75781C9.27568 9.96703 9.81388 10.3653 10.1951 10.8964C10.5763 11.4276 10.7813 12.0649 10.7813 12.7188ZM2.96875 9.59375H6.71875C7.21603 9.59375 7.69295 9.39621 8.04458 9.04458C8.39621 8.69294 8.59375 8.21603 8.59375 7.71875C8.59375 7.22147 8.39621 6.74456 8.04458 6.39292C7.69295 6.04129 7.21603 5.84375 6.71875 5.84375H2.96875V9.59375ZM9.84375 12.7188C9.84169 12.1392 9.61056 11.584 9.20077 11.1742C8.79098 10.7644 8.23578 10.5333 7.65625 10.5312H2.96875V14.9062H7.65625C8.23578 14.9042 8.79098 14.6731 9.20077 14.2633C9.61056 13.8535 9.84169 13.2983 9.84375 12.7188Z" fill="#2B3C50"/>
                        </svg>
                    </a>
                    <Link href="#" class="flex items-center justify-between bg-gray-50 hover:bg-gray-100 p-7 rounded-xl">
                        <span class="text-gray-700 font-medium">Facebook</span>
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.9916 1.95481C14.151 1.86567 13.3062 1.82227 12.4608 1.82481C9.65831 1.82481 7.91665 3.60981 7.91665 6.48315V8.43398H5.56248C5.45197 8.43398 5.34599 8.47788 5.26785 8.55602C5.18971 8.63416 5.14581 8.74014 5.14581 8.85065V12.059C5.14581 12.1695 5.18971 12.2755 5.26785 12.3536C5.34599 12.4317 5.45197 12.4756 5.56248 12.4756H7.91665V18.909C7.91665 19.0195 7.96054 19.1255 8.03868 19.2036C8.11682 19.2817 8.22281 19.3256 8.33331 19.3256H11.6483C11.7588 19.3256 11.8648 19.2817 11.9429 19.2036C12.0211 19.1255 12.065 19.0195 12.065 18.909V12.4756H14.4116C14.5128 12.4757 14.6105 12.4389 14.6866 12.3722C14.7626 12.3055 14.8118 12.2134 14.825 12.1131L15.2391 8.90481C15.2469 8.84601 15.2419 8.78623 15.2247 8.72949C15.2074 8.67274 15.1783 8.62033 15.1391 8.57576C15.1 8.53119 15.0518 8.49548 14.9978 8.47103C14.9438 8.44658 14.8851 8.43395 14.8258 8.43398H12.065V6.80148C12.065 5.99315 12.2275 5.65565 13.2383 5.65565H14.9375C15.048 5.65565 15.154 5.61175 15.2321 5.53361C15.3102 5.45547 15.3541 5.34949 15.3541 5.23898V2.36815C15.3542 2.26699 15.3174 2.16926 15.2507 2.09321C15.184 2.01715 15.0919 1.96796 14.9916 1.95481ZM14.5208 4.82148L13.2375 4.82231C11.44 4.82231 11.2316 5.95231 11.2316 6.80148V8.85148C11.2316 8.96184 11.2754 9.0677 11.3534 9.14581C11.4314 9.22393 11.5371 9.26792 11.6475 9.26815H14.3525L14.045 11.6431H11.6483C11.5378 11.6431 11.4318 11.687 11.3537 11.7652C11.2755 11.8433 11.2316 11.9493 11.2316 12.0598V18.4915H8.74998V12.0598C8.74998 11.9493 8.70608 11.8433 8.62794 11.7652C8.5498 11.687 8.44382 11.6431 8.33331 11.6431H5.97998V9.26815H8.33331C8.44382 9.26815 8.5498 9.22425 8.62794 9.14611C8.70608 9.06797 8.74998 8.96199 8.74998 8.85148V6.48315C8.74998 4.08815 10.1375 2.65815 12.4608 2.65815C13.3016 2.65815 14.0608 2.70398 14.5208 2.74398V4.82148Z" fill="#2B3C50"/>
                        </svg>
                    </Link>
                    <Link href="#" class="flex items-center justify-between bg-gray-50 hover:bg-gray-100 p-7 rounded-xl">
                        <span class="text-gray-700 font-medium">Instagram</span>
                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 7.28125C9.28922 7.28125 8.59441 7.49202 8.00342 7.88691C7.41243 8.28179 6.95181 8.84306 6.67981 9.49973C6.40781 10.1564 6.33664 10.879 6.4753 11.5761C6.61397 12.2732 6.95624 12.9136 7.45884 13.4162C7.96143 13.9188 8.60178 14.261 9.29889 14.3997C9.99601 14.5384 10.7186 14.4672 11.3753 14.1952C12.0319 13.9232 12.5932 13.4626 12.9881 12.8716C13.383 12.2806 13.5938 11.5858 13.5938 10.875C13.5938 9.92188 13.2151 9.00779 12.5412 8.33384C11.8672 7.65988 10.9531 7.28125 10 7.28125ZM10 13.5312C9.47464 13.5312 8.96108 13.3755 8.52427 13.0836C8.08745 12.7917 7.74699 12.3769 7.54595 11.8915C7.3449 11.4061 7.2923 10.8721 7.39479 10.3568C7.49728 9.84153 7.75026 9.36823 8.12175 8.99675C8.49323 8.62526 8.96653 8.37228 9.48179 8.26979C9.99705 8.1673 10.5311 8.2199 11.0165 8.42095C11.5019 8.62199 11.9167 8.96245 12.2086 9.39927C12.5005 9.83608 12.6562 10.3496 12.6562 10.875C12.6542 11.5788 12.3737 12.2533 11.876 12.751C11.3783 13.2487 10.7038 13.5292 10 13.5312ZM13.4375 3.21875H6.5625C5.44362 3.21875 4.37056 3.66322 3.57939 4.45439C2.78822 5.24556 2.34375 6.31862 2.34375 7.4375V14.3125C2.34375 15.4314 2.78822 16.5044 3.57939 17.2956C4.37056 18.0868 5.44362 18.5312 6.5625 18.5312H13.4375C14.5564 18.5312 15.6294 18.0868 16.4206 17.2956C17.2118 16.5044 17.6562 15.4314 17.6562 14.3125V7.4375C17.6562 6.31862 17.2118 5.24556 16.4206 4.45439C15.6294 3.66322 14.5564 3.21875 13.4375 3.21875ZM16.7188 14.3125C16.7188 15.1827 16.373 16.0173 15.7577 16.6327C15.1423 17.248 14.3077 17.5938 13.4375 17.5938H6.5625C5.69226 17.5938 4.85766 17.248 4.24231 16.6327C3.62695 16.0173 3.28125 15.1827 3.28125 14.3125V7.4375C3.28125 6.56726 3.62695 5.73266 4.24231 5.11731C4.85766 4.50195 5.69226 4.15625 6.5625 4.15625H13.4375C14.3077 4.15625 15.1423 4.50195 15.7577 5.11731C16.373 5.73266 16.7188 6.56726 16.7188 7.4375V14.3125ZM14.8438 6.8125C14.8438 6.96702 14.7979 7.11806 14.7121 7.24654C14.6262 7.37502 14.5042 7.47515 14.3615 7.53428C14.2187 7.59341 14.0616 7.60888 13.9101 7.57874C13.7585 7.54859 13.6193 7.47419 13.5101 7.36493C13.4008 7.25567 13.3264 7.11646 13.2963 6.96491C13.2661 6.81337 13.2816 6.65628 13.3407 6.51353C13.3998 6.37077 13.5 6.24876 13.6285 6.16291C13.7569 6.07707 13.908 6.03125 14.0625 6.03125C14.2697 6.03125 14.4684 6.11356 14.6149 6.26007C14.7614 6.40659 14.8438 6.6053 14.8438 6.8125Z" fill="#2B3C50"/>
                        </svg>
                    </Link>
                </div>

                <!-- Right Column (Video) -->
                <div class="flex-1  rounded-2xl overflow-hidden">
                    <video autoplay loop muted playsinline class="w-full h-full object-cover rounded-2xl">
                        <source src="/assets/video/Promo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </section>
        <!-- about section ends here -->

        <!-- footer section start here -->
        <section class="w-full p-5">
            <div class="w-full text-center">
                <h5 class="text-roboto text-[#F25C30] text-[12px]">© 2025 TSS LLC. All rights reserved.</h5>
            </div>
        </section>
        <!-- footer section ends here -->
    </Main>
</template>

<style scoped>

</style>
