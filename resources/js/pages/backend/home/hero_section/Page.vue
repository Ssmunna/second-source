<script setup>
import Main from '@/layouts/backend/Main.vue';
import QuillTextEditor from '@/components/Utils/QuillTextEditor.vue';
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    title: ''
})
</script>

<template>
<Main>
    <div class="w-full space-y-4 sm:space-y-6">
        <div class="wrapper">
            <div class="w-full grid grid-cols-1 gap-3">
                <div class="form-control">
                    <label class="label" for="title">Title</label>
                    <QuillTextEditor v-model:content="form.title" />
                </div>
                <div class="form-control">
                    <label class="label" for="subtitle">Subtitle</label>
                    <input type="text" class="input">
                </div>
            </div>
        </div>
    </div>
</Main>
</template>

<style scoped>

</style>
