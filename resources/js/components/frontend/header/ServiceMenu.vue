<script setup>
import {onBeforeUnmount, onMounted, ref} from "vue";
import NavbarItems from "@/components/frontend/header/NavbarItems.vue";

const open = ref(false);
const menuRef = ref(null);

function handleClickOutside(event) {
    if (menuRef.value && !menuRef.value.contains(event.target)) {
        open.value = false;
    }
}

onMounted(() => {
    document.addEventListener("mousedown", handleClickOutside);
});

onBeforeUnmount(() => {
    document.removeEventListener("mousedown", handleClickOutside);
});
</script>

<template>
    <div class="relative inline-block group" ref="menuRef">
        <button @click="open = !open" class="nav_link gap-1">
            Services
            <svg
                width="8"
                height="7"
                viewBox="0 0 8 7"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path d="M4.11705 6.5L0.652954 0.5H7.58118L4.11705 6.5Z" fill="#2A2A2A" />
            </svg>
        </button>

        <!-- NavbarItems -->
        <div
            :class="[
              open ? 'opacity-100 visible [&>*]:opacity-100 [&>*]:visible' : 'opacity-0 invisible',
              'lg:group-hover:opacity-100 lg:group-hover:visible'
            ]"
        >
            <NavbarItems />
        </div>
    </div>

</template>

<style scoped>

</style>
