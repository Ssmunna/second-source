<script setup>
import Main from '@/layouts/backend/Main.vue';
import { usePage } from '@inertiajs/vue3';

const {fileBase} = usePage().props
const { data: brandData } = defineProps({
    data: Object
})

</script>

<template>
<Main>
    <div class="w-full space-y-4 sm:space-y-6">
        <div class="wrapper">
            <h2 class="text-gray-600">Brand</h2>
            {{brandData}}
        </div>
    </div>
</Main>
</template>

<style scoped>

</style>
