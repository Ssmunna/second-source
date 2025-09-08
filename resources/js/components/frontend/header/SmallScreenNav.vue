<script setup>
import {Link} from "@inertiajs/vue3";
import ServiceMenu from "@/components/frontend/header/ServiceMenu.vue";
import BarsIcon from "@/components/icons/BarsIcon.vue";
import CrossIcon from "@/components/icons/CrossIcon.vue";
</script>

<template>
    <!-- Mobile Header -->
    <div class="flex justify-between items-center p-4 lg:hidden">
        <!-- Logo section start here -->
        <div class="w-[55px] h-[60px]">
            <img class="w-full h-full object-cover" src="/assets/images/logo.png" alt="" />
        </div>
        <!-- Logo section ends here -->

        <button
            type="button"
            aria-haspopup="dialog"
            aria-expanded="false"
            aria-controls="nav-drawer"
            data-hs-overlay="#nav-drawer"
        >
            <BarsIcon class="size-6 text-[#F25C30]" />
        </button>
    </div>

    <!-- Drawer -->
    <div
        id="nav-drawer"
        class="hs-overlay hs-overlay-open:translate-x-0 hs-overlay-backdrop-open:bg-gray-500/70 hidden -translate-x-full fixed top-0 start-0 transition-all duration-300 transform h-full max-w-full w-full z-80 bg-white border-s border-gray-200 dark:bg-neutral-800 dark:border-neutral-700"
        role="dialog"
        tabindex="-1"
        aria-labelledby="nav-drawer-label"
    >
        <div class="w-full relative">
            <button
                type="button"
                class="size-8 absolute top-0 right-0 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-300 text-gray-700 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-700 dark:hover:bg-neutral-600 dark:text-neutral-400 dark:focus:bg-neutral-600"
                aria-label="Close"
                data-hs-overlay="#nav-drawer"
            >
                <CrossIcon class="size-3" />
            </button>

            <div class="px-4 py-8">
                <!-- Navigation menu section start here -->
                <div class="w-auto flex flex-col items-center gap-[25px]">
                    <Link :href="route('marketplace')" class="nav_link">
                        Market Place
                    </Link>
                    <ServiceMenu />
                    <Link class="nav_link">
                        About
                    </Link>
                    <Link class="nav_link">
                        Career
                    </Link>
                </div>
                <!-- Navigation menu section ends here -->
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>
