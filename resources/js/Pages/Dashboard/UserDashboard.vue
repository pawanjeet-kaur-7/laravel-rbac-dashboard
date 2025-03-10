<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

// Get authenticated user data from Inertia props
const user = computed(() => usePage().props.auth.user);
// Check if the user has a specific role
const isAdmin = computed(() => user.value?.roles.some(role => role.name === 'user'));
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                User Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        You're logged in to User Profile!
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
