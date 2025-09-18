<script setup>
import { toast } from 'vue3-toastify';
import 'vue3-toastify/dist/index.css';
import { usePage } from '@inertiajs/vue3';
import { watch } from 'vue';

const props = usePage().props

const notify = (message) => {
    if(props.success){
        toast(message, {
            autoClose: 1500,
            theme: "colored",
            type: "info"
        });
    }
    else{
        toast(message, {
            autoClose: 1500,
            theme: "colored",
            type: "error"
        });
    }
}

watch(() => props, () => {
    if(props.message){
        notify(props.message)
    }
})

</script>

<template>

</template>

<style scoped>

</style>
