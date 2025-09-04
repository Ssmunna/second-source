<script setup>
import {Link} from "@inertiajs/vue3";
import ServiceMenu from "@/components/frontend/header/ServiceMenu.vue";
</script>

<template>
    <div class="hidden lg:flex justify-between items-center p-4">
        <!-- Logo section start here -->
        <div class="w-[55px] h-[60px]">
            <img class="w-full h-full object-cover" src="/assets/images/logo.png" alt="" />
        </div>
        <!-- Logo section ends here -->

        <!-- Navigation menu section start here -->
        <div class="w-auto flex items-center gap-[45px]">
            <Link class="nav_link">
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

        <!-- Action button section start here -->
        <div class="w-auto flex items-center gap-4">
            <button>
                <img src="/assets/icons/icon_park.png" alt="icon" />
            </button>

            <Link
                class="w-[120px] h-[36px] flex items-center justify-center bg-[#FFFFFF] text-[16px] text-[#2A2A2A] font-[400] rounded-[20px] border-[1px] border-[#2A2A2A] hover:bg-[#F25C30] hover:border-[#F25C30] hover:text-[#FFFFFF] duration-150"
            >
                Contact
            </Link>

            <Link
                class="group w-[143px] h-[36px] flex items-center justify-center gap-2 bg-[#F25C30] text-[16px] text-[#FFFFFF] font-[400] rounded-[20px] border-[1px] border-[#F25C30] hover:bg-[#FFFFFF] hover:text-[#F25C30] duration-150"
            >
                Let's Talk
                <svg
                    class="duration-150"
                    width="12"
                    height="12"
                    viewBox="0 0 12 12"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M9.1237 4.81222L5.45487 1.14342L6.5155 0.082756L11.9956 5.56283L6.5155 11.0429L5.45487 9.98225L9.1249 6.31222L-3.81238 6.31226V4.81226L9.1237 4.81222Z"
                        fill="currentColor"
                    />
                </svg>
            </Link>
        </div>
        <!-- Action button section ends here -->
    </div>

</template>

<style scoped>

</style>
