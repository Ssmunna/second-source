<script setup>
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css'
import { ref, watch } from 'vue';

const toolbar = [
    ['bold', 'italic', 'underline', 'strike'],
    [{ header: 1 }, { header: 2 }],
    [{ list: 'ordered' }, { list: 'bullet' }],
    [{ color: [] }, { background: [] }],
    ['link', 'image', 'video'],
    ['clean']
];

const props = defineProps({
    content: String
})
const emit = defineEmits(['update:content'])

const localContent = ref(props.content)

watch(localContent, (val) => {
    emit('update:content', val)
})
</script>

<template>
    <QuillEditor v-model="localContent" theme="snow" :toolbar="toolbar" />
</template>

<style scoped>

</style>
