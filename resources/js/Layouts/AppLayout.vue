<script setup>
import { ref } from 'vue';
import { Head } from '@inertiajs/inertia-vue3';
import SidebarNav from '@/Components/SidebarNav.vue'

defineProps({
	title: String
});

const drawer = ref(null);
</script>

<template>
	<div>

		<Head :title="title" />

		<div class="min-h-screen bg-gray-100">

			<v-app id="inspire">
				<v-navigation-drawer v-model="drawer">
					<SidebarNav />
				</v-navigation-drawer>

				<v-app-bar>
					<v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

					<v-toolbar-title>{{ title }}</v-toolbar-title>
				</v-app-bar>

				<v-main class="ml-6 mt-6">
					<slot />
				</v-main>
			</v-app>
		</div>
	</div>
</template>
