<script setup>
import { ref, defineProps, defineEmits, computed, watch } from "vue";

const props = defineProps({
    label: { type: String, default: "Drag and drop a file here or click" },
    type: { type: String, default: "image" }, // "image" | "video"
    preview: {type: String, default: null}
});

const emit = defineEmits(["file-selected"]);
const previewUrl = ref(null);

// Dynamic accept types based on uploader type
const acceptTypes = computed(() =>
    props.type === "video" ? "video/*" : "image/*"
);

watch(() => props, () => {
    if(props.preview){
        previewUrl.value = props.preview
    }
}, {immediate: true})

function onFileChange(event) {
    const file = event.target.files[0];
    if (file) {
        previewUrl.value = URL.createObjectURL(file);
        emit("file-selected", file);
    }
}
</script>

<template>
    <label
        class="relative w-full h-[200px] border border-gray-300 flex flex-col justify-center items-center cursor-pointer overflow-hidden bg-white"
    >
        <!-- Hidden file input -->
        <input
            type="file"
            class="hidden"
            @change="onFileChange"
            :accept="acceptTypes"
        />

        <!-- Image Preview -->
        <img
            v-if="previewUrl && type === 'image'"
            :src="previewUrl"
            alt="Preview"
            class="absolute inset-0 w-full h-full object-cover"
        />

        <!-- Video Preview -->
        <video
            v-if="previewUrl && type === 'video'"
            :src="previewUrl"
            autoplay
            class="absolute inset-0 w-full h-full object-cover"
        ></video>

        <!-- Animated overlay (only show if no preview) -->
        <div
            v-if="!previewUrl"
            class="absolute inset-0 striped-bg opacity-0 hover:opacity-100 pointer-events-none"
        ></div>

        <!-- Upload Icon -->
        <svg
            v-if="!previewUrl"
            class="text-gray-400 mb-2 z-10"
            xmlns="http://www.w3.org/2000/svg"
            width="40"
            height="40"
            viewBox="0 0 24 24"
        >
            <path
                fill="currentColor"
                d="M12 16q.425 0 .713-.288T13 15v-3.2l.9.9q.275.275.7.275t.7-.275t.275-.7t-.275-.7l-2.6-2.6q-.3-.3-.7-.3t-.7.3l-2.6 2.6q-.275.275-.275.7t.275.7t.7.275t.7-.275l.9-.9V15q0 .425.288.713T12 16m-8 4q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h5.175q.4 0 .763.15t.637.425L12 6h8q.825 0 1.413.588T22 8v10q0 .825-.587 1.413T20 20z"
            />
        </svg>

        <!-- Text -->
        <p v-if="!previewUrl" class="text-gray-500 text-sm z-10">{{ label }}</p>
    </label>
</template>

<style scoped>
.striped-bg {
    background-image: repeating-linear-gradient(
        45deg,
        #f3f4f6 0,
        #f3f4f6 10px,
        #ffffff 10px,
        #ffffff 20px
    );
    background-size: 40px 40px;
    animation: stripesMove 1s linear infinite;
    transition: opacity 0.3s ease;
}

@keyframes stripesMove {
    from {
        background-position: 0 0;
    }
    to {
        background-position: 40px 40px;
    }
}
</style>
