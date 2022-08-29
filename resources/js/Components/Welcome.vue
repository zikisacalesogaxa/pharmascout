<script setup>
import JetButton from '@/Components/Button.vue';
</script>

<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
            <JetButton class="ml-4">
                View
            </JetButton>
            <br>
            <br>
            <JetButton class="ml-4">
                Edit (disappear for just a normal user)
            </JetButton>
            <br>
            <br>
            <JetButton class="ml-4">
                Delete (disappear for just a normal user)
            </JetButton>
        </div>
    </div>
</template>
