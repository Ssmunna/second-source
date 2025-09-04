<script setup>
import Main from "@/layouts/frontend/Main.vue";
import LargeScreenNav from "@/components/frontend/header/LargeScreenNav.vue";
import SmallScreenNav from "@/components/frontend/header/SmallScreenNav.vue";
import VideoPlayer from "@/components/frontend/home/VideoPlayer.vue";
import TrustedSwiperSlider from "@/components/frontend/home/TrustedSwiperSlider.vue";
import WorkWithUsSwiperSlider from "@/components/frontend/home/WorkWithUsSwiperSlider.vue";


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
        <div class="w-full my-[60px] bg-[#FAFAFA]">
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
        </div>
        <!-- work with us section ends here -->
    </Main>
</template>

<style scoped>

</style>
