<script setup>
import Main from "@/layouts/frontend/Main.vue";
</script>

<template>
    <Main>
        <section>
            <div class="container mx-auto bg-[#FFF7EB] pt-12 px-3 md:px-[75px]  rounded-[24px] dark:bg-[#161616]">
                <div class="max-w-5xl mx-auto text-center">
                    <!-- Heading -->
                    <h2 class="text-3xl sm:text-4xl font-bold">
                        <span class="text-[#F25C30]">Templates</span>
                        <span class="text-[#2B3C50] dark-text">Hub</span>
                    </h2>

                    <!-- Subheading -->
                    <div class="w-full md:w-10/12 mx-auto">
                        <p class="mt-4 text-gray-600 dark-text text-sm sm:text-base leading-relaxed">
                            Looking for a website or mobile app that’s ready to go? Explore our collection of premium templates, whether it’s an
                            online store, a portfolio, or a business site, we’ve got you covered.
                        </p>
                    </div>

                    <!-- Search Bar -->
                    <div class="mt-8 flex items-center bg-white rounded-full shadow-sm px-4 py-3 w-full sm:w-[80%] mx-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                        </svg>
                        <input
                            type="text"
                            placeholder="Search for website, UI UX, template, & More"
                            class="flex-1 border-none focus:outline-none text-sm sm:text-base text-gray-700 ml-2 bg-transparent"
                        />
                    </div>

                    <!-- Category Buttons -->
                    <div class="mt-8 flex flex-wrap justify-center gap-3">
                        <button class="px-4 py-2 text-sm rounded-full border border-[#F25C30] text-[#F25C30] hover:bg-[#F25C30] hover:text-white transition">
                            Customized website
                        </button>
                        <button class="px-4 py-2 text-sm rounded-full border border-[#F25C30] text-[#F25C30] hover:bg-[#F25C30] hover:text-white transition">
                            Portfolio
                        </button>
                        <button class="px-4 py-2 text-sm rounded-full border border-[#F25C30] text-[#F25C30] hover:bg-[#F25C30] hover:text-white transition">
                            Web design
                        </button>
                        <button class="px-4 py-2 text-sm rounded-full border border-[#F25C30] text-[#F25C30] hover:bg-[#F25C30] hover:text-white transition">
                            UI UX
                        </button>
                        <button class="px-4 py-2 text-sm rounded-full border border-[#F25C30] text-[#F25C30] hover:bg-[#F25C30] hover:text-white transition">
                            Software
                        </button>
                        <button class="px-4 py-2 text-sm rounded-full border border-[#F25C30] text-[#F25C30] hover:bg-[#F25C30] hover:text-white transition">
                            App
                        </button>
                        <button class="px-4 py-2 text-sm rounded-full border border-[#F25C30] text-[#F25C30] hover:bg-[#F25C30] hover:text-white transition">
                            Digital Marketing
                        </button>
                        <button class="px-4 py-2 text-sm rounded-full border border-[#F25C30] text-[#F25C30] hover:bg-[#F25C30] hover:text-white transition">
                            Brand Strategy
                        </button>
                        <button class="px-4 py-2 text-sm rounded-full border border-[#F25C30] text-[#F25C30] hover:bg-[#F25C30] hover:text-white transition">
                            Template
                        </button>
                    </div>
                </div>

                <div class="w-full mt-[50px]">
                    <div class="flex justify-end">
                        <div class="relative">
                            <select class="appearance-none bg-white px-5 py-2 pr-10 rounded-full text-[14px] font-[400] font-roboto text-[#F25C30] focus:outline-none focus:ring-2 focus:ring-[#F25C30] cursor-pointer" >
                                <option>Sort by</option>
                                <option>Newest</option>
                                <option>Oldest</option>
                                <option>Popular</option>
                                <option>A → Z</option>
                                <option>Z → A</option>
                            </select>

                            <!-- Custom dropdown arrow -->
                            <div class="pointer-events-none absolute inset-y-0 right-4 flex items-center text-[#F25C30]">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.292l3.71-4.06a.75.75 0 111.08 1.04l-4.25 4.65a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="w-full">
                        <!-- Cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-[41px]">
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

                        <div class="w-full flex justify-center py-[43px]">
                            <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M32.625 18C32.625 21.8787 31.0842 25.5987 28.3414 28.3414C25.5987 31.0841 21.8788 32.625 18 32.625C14.1212 32.625 10.4013 31.0841 7.65856 28.3414C4.91584 25.5987 3.375 21.8787 3.375 18C3.375 12.2343 6.72328 6.98058 11.9053 4.60261C12.0396 4.54093 12.1847 4.5063 12.3323 4.50069C12.4799 4.49508 12.6272 4.51861 12.7658 4.56993C12.9043 4.62125 13.0314 4.69935 13.1398 4.79978C13.2481 4.90022 13.3357 5.02101 13.3973 5.15527C13.459 5.28952 13.4937 5.43461 13.4993 5.58225C13.5049 5.72989 13.4813 5.87719 13.43 6.01574C13.3787 6.15429 13.3006 6.28137 13.2002 6.38973C13.0997 6.4981 12.9789 6.58562 12.8447 6.6473C8.45859 8.66105 5.625 13.116 5.625 18C5.625 21.282 6.92879 24.4296 9.24955 26.7504C11.5703 29.0712 14.7179 30.375 18 30.375C21.2821 30.375 24.4297 29.0712 26.7504 26.7504C29.0712 24.4296 30.375 21.282 30.375 18C30.375 13.116 27.5414 8.66105 23.1553 6.6473C22.8842 6.52273 22.6736 6.29555 22.57 6.01574C22.4663 5.73593 22.4781 5.42641 22.6027 5.15527C22.7272 4.88412 22.9544 4.67357 23.2342 4.56993C23.514 4.46628 23.8235 4.47804 24.0947 4.60261C29.2767 6.98058 32.625 12.2343 32.625 18Z" fill="#F25C30"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </Main>
</template>

<style scoped>

</style>
