<script setup>
import { Inertia } from '@inertiajs/inertia';
const logout = () => {
	Inertia.post(route('logout'));
};
</script>
<template>
	<div class="w-full h-full bg-white absolute" id="sidenavSecExample">
		<v-sheet color="grey-lighten-4" class="pa-4 shadow-sm">
			<v-avatar class="mb-4" size="64">
				<v-img alt="John" :src="$page.props.user.profile_photo_url"></v-img>
			</v-avatar>

			<div>
				{{ $page.props.user.email }}
			</div>
		</v-sheet>

		<v-list class="pt-0">
			<v-list-item :active="route().current('dashboard')" :href="route('dashboard')">
				Dashboard
			</v-list-item>

			<v-list-item :active="route().current('profile.show')" :href="route('profile.show')">
				Profile
			</v-list-item>

			<v-list-item :active="route().current('teams.show')" :href="route('teams.show', $page.props.user.current_team)">
				{{ $page.props.user.current_team.name  }}
			</v-list-item>

			<v-list-item @click="logout">
				Logout
			</v-list-item>
		</v-list>

		<!-- Sidebar footer -->
		<div class="text-center bottom-0 bg-white absolute w-full">
			<hr class="m-0">
			<p class="py-2 text-xs text-gray-700"><strong class="text-black-500 font-">Copyright</strong> Scout
				Technologies © 2015-2022</p>
		</div>
	</div>
</template>