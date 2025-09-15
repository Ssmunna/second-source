<script setup>
import Main from "@/layouts/frontend/Main.vue";
import HeroSectionWithVideo from "@/components/frontend/common/HeroSectionWithVideo.vue";
import {Head} from "@inertiajs/vue3";
import ContactFormSlider from "@/components/frontend/contact/ContactFormSlider.vue";

const title = `Have Questions? <span class="text-[#F25C30]">Get in Touch!</span>`;
const subtitle = 'Have a question or need assistance? Simply fill out the form, and our team will get back to you promptly.'

</script>
<template>
    <Head title="Contact" />
    <Main>
        <HeroSectionWithVideo :title="title" :subtitle="subtitle" />
        <section class="w-full mt-[60px]">
            <div class="container px-3 mx-auto flex flex-col lg:flex-row items-center gap-10 sm:gap-2 overflow-hidden">
                <!-- Left Text -->
                <div class="w-full lg:w-[450px]" data-aos="fade-right">
                    <h2 class="text-[36px] font-bold text-[#F25C30] mb-4">
                        Where to Find Us
                    </h2>
                    <p class="text-[14px] text-[#2B3C50] font-roboto">
                        Digitally global, locally present.
                    </p>
                </div>

                <!-- Right Slider -->
                <div class="w-full grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-[#FCA728] flex justify-center items-center rounded-2xl p-6 text-center dark:bg-[#2b3c50]">
                        <div class="w-full">
                            <p class="font-bold text-[16px] text-[#FFFFFF]">+880 1929-986183</p>
                            <p class="text-[12px] font-roboto text-[#FAFAFA] mt-1">Have any question?</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-[#FCA728] flex justify-center items-center rounded-2xl p-6 text-center dark:bg-[#2b3c50]">
                        <div class="w-full">
                            <p class="font-bold text-[16px] text-[#FFFFFF]">contact@2ndsource.xyz</p>
                            <p class="text-[12px] font-roboto text-[#FAFAFA] mt-1">Send us an email</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-[#FCA728] flex justify-center items-center rounded-2xl p-6 text-center dark:bg-[#2b3c50]">
                        <div class="w-full">
                            <p class="font-bold text-[16px] text-[#FFFFFF]">
                                House - 2, Road - 27, Housing<br />
                                Estate, Uposhohor, Bogura
                            </p>
                            <p class="text-[12px] font-roboto text-[#FAFAFA] mt-3">Visit us</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-full mt-[60px]">
            <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-6 dark-bg rounded-[24px]">
                <!-- Left Content -->
                <div class="flex-1 text-left px-4 md:px-10" data-aos="fade-right">
                    <!-- Heading -->
                    <h2 class="text-[36px] font-bold mb-6 mt-3">
                        <span class="text-[#F25C30]">Share</span>
                        <span class="text-[#0B2C55] dark:text-[#FFFFFF]"> your thoughts with us</span>
                    </h2>

                    <!-- Form -->
                    <form class="space-y-4">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-[#FFFFFF]">Name</label>
                            <input
                                type="text"
                                id="name"
                                placeholder="Enter your name"
                                class="mt-1 w-full rounded-xl border border-gray-300 dark:placeholder:text-[#FFFFFF]/60 dark:border-0 px-3 py-2 text-sm focus:border-[#F25C30] focus:ring-[#F25C30] outline-none dark:bg-[#2b3c50]"
                            />
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-[#FFFFFF]">Email</label>
                            <input
                                type="email"
                                id="email"
                                placeholder="Enter your email address"
                                class="mt-1 w-full rounded-xl border border-gray-300 dark:placeholder:text-[#FFFFFF]/60 dark:border-0 px-3 py-2 text-sm focus:border-[#F25C30] focus:ring-[#F25C30] outline-none dark:bg-[#2b3c50]"
                            />
                        </div>

                        <!-- Phone number -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-[#FFFFFF]">Phone number</label>
                            <input
                                type="text"
                                id="phone"
                                placeholder="Enter your phone number"
                                class="mt-1 w-full rounded-xl border border-gray-300 dark:placeholder:text-[#FFFFFF]/60 dark:border-0 px-3 py-2 text-sm focus:border-[#F25C30] focus:ring-[#F25C30] outline-none dark:bg-[#2b3c50]"
                            />
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 dark:text-[#FFFFFF]">Message</label>
                            <textarea
                                id="message"
                                rows="4"
                                placeholder="Write message here"
                                class="mt-1 w-full rounded-xl border border-gray-300 dark:placeholder:text-[#FFFFFF]/60 dark:border-0 dar-bg px-3 py-2 text-sm focus:border-[#F25C30] focus:ring-[#F25C30] outline-none dark:bg-[#2b3c50]"
                            ></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="button" class="w-[270px] lg:w-[300px] h-[48px] mx-auto mt-[24px] rounded-[20px] flex items-center justify-center gap-8
                        cursor-pointer border border-[#F25C30]
                        bg-[#F25C30] text-white font-sans font-bold">
                            Send quick message
                            <svg width="25" height="17" viewBox="0 0 25 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.1855 7.21834L14.6823 1.71514L16.2732 0.124146L24.4934 8.34425L16.2732 16.5644L14.6823 14.9734L20.1873 9.46834L0.781433 9.4684V7.2184L20.1855 7.21834Z" fill="white"/>
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- Right Slider -->
                <div class="flex-1 w-full px-4 md:px-0" data-aos="fade-left">
                    <ContactFormSlider/>
                </div>
            </div>
        </section>
        <section class="w-full mt-[60px]">
            <div class="container mx-auto h-[300px] rounded-[24px] overflow-hidden px-4 md:px-0">
                <iframe
                    class="w-full h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57919.41519391231!2d89.36832160000003!3d24.865097899999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc55542bafb51b%3A0xc5e0b7c47a5911f0!2sSecond%20Source!5e0!3m2!1sen!2sbd!4v1757646760135!5m2!1sen!2sbd"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </section>
    </Main>
</template>

<style scoped>

</style>
