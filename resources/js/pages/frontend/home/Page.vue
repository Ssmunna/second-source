<script setup>
import Main from "@/layouts/frontend/Main.vue";
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
        <section class="container mx-auto bg-gradient-to-b from-gray-200 to-[#F25C30] rounded-3xl p-3 py-8 md:px-12 md:py-12 mt-16">
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
    </Main>
</template>

<style scoped>

</style>
