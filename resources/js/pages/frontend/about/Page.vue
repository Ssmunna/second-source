<script setup>
import Main from "@/layouts/frontend/Main.vue";
import VideoPlayer from "@/components/frontend/home/VideoPlayer.vue";
</script>

<template>
    <Main>
        <section class="bg-white p-4">
            <div class="container mx-auto text-center">
                <!-- Heading -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-[#2B3C50] leading-tight">
                    Human centered <span class="text-[#F25C30]">future</span> focused
                </h2>

                <!-- Subheading -->
                <div class="w-7/12 mx-auto">
                    <p class="mt-4 text-gray-500 text-sm sm:text-base max-w-2xl mx-auto leading-relaxed">
                        TSS is a full-cycle app & software development company which covers specific client business needs and
                        manages them with the help of the best possible technology solutions.
                    </p>
                </div>

                <!-- Black Box (placeholder for image/video/slider) -->
                <div class="mt-10">
                    <VideoPlayer className="w-full h-48 sm:h-56 lg:h-[232px] rounded-3xl" />
                </div>
            </div>
        </section>

        <section class="p-4 bg-white">
            <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">

                <!-- Card 1 -->
                <div class="relative rounded-3xl overflow-hidden h-[636px]">
                    <img src="/assets/images/about/photo-1.png" alt="Team working" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent"></div>

                    <!-- Content -->
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-[36px] font-bold text-[#2A2A2A]">
                            We Design, Develop and <br> Launch Digital Products
                        </h3>
                        <p class="mt-3 text-[16px] text-[#2B3C50]/70 font-[400]">
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
                <div class="relative rounded-3xl overflow-hidden h-[636px]">
                    <img src="/assets/images/about/photo-2.png" alt="Team collaboration" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-white via-white/80 to-transparent"></div>

                    <!-- Content -->
                    <div class="absolute bottom-0 left-0 right-0 p-6">
                        <h3 class="text-[36px] font-bold text-[#2A2A2A]">
                            Our expertise extends across industries
                        </h3>
                        <p class="mt-3 text-[16px] text-[#2B3C50]/70 font-[400]">
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

    </Main>
</template>

<style scoped>

</style>
