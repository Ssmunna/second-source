import '../css/app.css';
import 'preline/preline'

import "aos/dist/aos.css";
import AOS from "aos";

import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import type { DefineComponent } from 'vue';
import { createApp, h } from 'vue';
import { initializeTheme } from './composables/useAppearance';
import { ZiggyVue } from 'ziggy-js'

import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';

const appName = import.meta.env.VITE_APP_NAME || 'Second Source';

createInertiaApp({
    title: (title) => (title ? `${title} - ${appName}` : appName),
    resolve: (name) => resolvePageComponent(`./pages/${name}.vue`, import.meta.glob<DefineComponent>('./pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component('QuillEditor', QuillEditor)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});

AOS.init({
    duration: 1000, // animation duration (ms)
    once: true,     // whether animation should happen only once
});
// This will set light / dark mode on page load...
initializeTheme();
