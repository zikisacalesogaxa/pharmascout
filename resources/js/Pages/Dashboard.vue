<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
defineProps({
    admin: Boolean,
    username: String
});
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard - {{ username }}
            </h2>
        </template>
    </AppLayout>
</template>
