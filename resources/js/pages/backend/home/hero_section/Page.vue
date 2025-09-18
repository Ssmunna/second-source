<script setup>
import Main from '@/layouts/backend/Main.vue';
import QuillTextEditor from '@/components/Utils/QuillTextEditor.vue';
import { useForm, usePage } from '@inertiajs/vue3';
import FileUploader from '@/components/Utils/FileUploader.vue';
import ValidationMessage from '@/components/Utils/ValidationMessage.vue';
import { computed, ref, watch } from 'vue';


const {fileBase} = usePage().props
console.log(fileBase)

const props = defineProps(['data']);
const section = props.data?.content;

const preview = ref(null);
const form = useForm({
    title: '',
    subtitle: '',
    button_text: '',
    button_link: '',
    image: '',
    video: '',
    imagePreview: ''
})


watch(() => section, (value) => {
    if(value){
        form.title = value.title
        form.subtitle = value.subtitle
        form.button_text = value.button_text
        form.button_link = value.button_link
        form.button_link = value.button_link
        preview.value = `${fileBase}/${value.image}`
    }
},{ immediate: true })


const handleImageFile = (file) => {
    form.image = file;
};

const handleVideoFile = (file) => {
    form.video = file;
};

const handleSubmit = () => {
    form.post(route('home.hero.update'),{
        preserveScroll: true,
        preserveState: true
    })
}


</script>

<template>
<Main>
    <div class="w-full space-y-4 sm:space-y-6">
        <div class="wrapper">
            <form @submit.prevent="handleSubmit" class="space-y-4.5">
                <div class="w-full grid grid-cols-1 gap-5">
                    <div class="form-control">
                        <label class="label" for="title">Title <span class="text-xs text-red-500">*</span></label>
                        <QuillTextEditor v-model="form.title" placeholder="Title" />
                        <ValidationMessage v-if="form.errors.title" :error="form.errors.title" />
                    </div>
                    <div class="form-control">
                        <label class="label" for="subtitle">Subtitle <span class="text-xs text-red-500">*</span></label>
                        <input type="text" v-model="form.subtitle" class="input" placeholder="Enter Subtitle">
                        <ValidationMessage v-if="form.errors.subtitle" :error="form.errors.subtitle" />
                    </div>
                    <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="form-control">
                            <label class="label" for="button-text">Button Text</label>
                            <input type="text" v-model="form.button_text" class="input" placeholder="Enter Button Text">
                            <ValidationMessage v-if="form.errors.button_text" :error="form.errors.button_text" />
                        </div>
                        <div class="form-control">
                            <label class="label" for="button-link">Button Link</label>
                            <input type="text" v-model="form.button_link" class="input" placeholder="Enter Button Link">
                            <ValidationMessage v-if="form.errors.button_link" :error="form.errors.button_link" />
                        </div>
                    </div>
                    <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-3">
                        <div class="form-control">
                            <label class="label" for="button-text">Image</label>
                            <FileUploader type="image" label="Upload an image" @file-selected="handleImageFile" :preview="preview" />
                            <ValidationMessage v-if="form.errors.image" :error="form.errors.image" />
                        </div>
                        <div class="form-control">
                            <label class="label" for="button-text">Video</label>
                            <FileUploader type="video" label="Upload an image" @file-selected="handleVideoFile" />
                            <ValidationMessage v-if="form.errors.video" :error="form.errors.video" />
                        </div>
                    </div>
                </div>
                <button class="bg-green-600 inline-flex items-center gap-.5 px-3 py-1.5 rounded text-white text-sm hover:bg-green-700 duration-150">
                <span v-if="form.processing">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2.5" d="M12 6.99998C9.1747 6.99987 6.99997 9.24998 7 12C7.00003 14.55 9.02119 17 12 17C14.7712 17 17 14.75 17 12"><animateTransform attributeName="transform" attributeType="XML" dur="560ms" from="0,12,12" repeatCount="indefinite" to="360,12,12" type="rotate"/></path></svg>
                </span>
                    <span class="shrink-0">Submit</span>
                </button>
            </form>
        </div>
    </div>
</Main>
</template>

<style scoped>

</style>
