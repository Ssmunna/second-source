<script setup>
import { useForm } from '@inertiajs/vue3';

const form = useForm({
    email: '',
    password: '',
    remember_me: false
})

const handleSubmitBtn = () => {
    form.post(route('login'))
}
</script>

<template>
    <div class="min-h-screen flex items-center justify-center bg-gradient-to-b from-white to-gray-50 px-4">
        <div class="w-full max-w-md bg-white rounded-2xl shadow-lg border border-gray-200 p-8">
            <!-- Logo -->
            <div class="flex justify-center mb-6">
                <img src="/assets/images/logo.png" alt="Logo" class="h-12 w-12" />
            </div>

            <!-- Title -->
            <h2 class="text-2xl font-bold text-center text-[#2B3C50]">
                Welcome Back<span class="text-[#F25C30]">.</span>
            </h2>

            <!-- Form -->
            <form @submit.prevent="handleSubmitBtn" class="space-y-5">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input
                        v-model="form.email"
                        type="email"
                        placeholder="Enter your email"
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#F25C30] focus:outline-none"
                    />
                    <div class="text-red-400 text-xs mt-1" v-if="form.errors.email">{{ form.errors.email }}</div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                    <input
                        v-model="form.password"
                        type="password"
                        placeholder="Enter your password"
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:ring-2 focus:ring-[#F25C30] focus:outline-none"
                    />
                    <div class="text-red-400 text-xs mt-1" v-if="form.errors.password">{{ form.errors.password }}</div>
                </div>

                <!-- Remember + Forgot -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" class="rounded border-gray-300 text-[#F25C30] focus:ring-[#F25C30]" />
                        <span class="text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-[#F25C30] font-medium hover:underline">Forgot Password?</a>
                </div>

                <!-- Button -->
                <button
                    :disabled="form.processing"
                    type="submit"
                    class="w-full bg-[#F25C30] text-white font-semibold py-2.5 rounded-xl shadow hover:bg-[#d94d27] transition flex items-center justify-center"
                >
                    <span v-if="form.processing">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2.5" d="M12 6.99998C9.1747 6.99987 6.99997 9.24998 7 12C7.00003 14.55 9.02119 17 12 17C14.7712 17 17 14.75 17 12"><animateTransform attributeName="transform" attributeType="XML" dur="560ms" from="0,12,12" repeatCount="indefinite" to="360,12,12" type="rotate"/></path></svg>
                    </span>
                    Login
                </button>
            </form>
        </div>
    </div>
</template>

<style scoped>

</style>
