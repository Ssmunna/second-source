<script setup>
import { ref, watch } from 'vue'
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css'

const toolbar = [
    ['bold', 'italic', 'underline', 'strike'],
    [{ header: 1 }, { header: 2 }],
    [{ list: 'ordered' }, { list: 'bullet' }],
    [{ color: [] }, { background: [] }],
    ['link', 'image', 'video'],
    ['clean']
]

// Step 1: define props
const props = defineProps({
    modelValue: String,
    placeholder: { type: String, default: '' }
})

// Step 2: define emits
const emit = defineEmits(['update:modelValue'])

// Step 3: local ref
const localContent = ref(props.modelValue || '')

watch(() => props.modelValue,(val) => {
        if (val !== localContent.value) localContent.value = val
    }
)

// Step 5: watch local -> emit
watch(localContent, (val) => emit('update:modelValue', val))
</script>

<template>
    <QuillEditor
        v-model:content="localContent"
        content-type="html"
        theme="snow"
        :placeholder="placeholder"
        style="height: 100px"
        :toolbar="toolbar"
    />
</template>

<style scoped>

</style>
