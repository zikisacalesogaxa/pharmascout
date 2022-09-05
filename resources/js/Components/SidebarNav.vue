<script setup>
import { Inertia } from '@inertiajs/inertia';
const links = [
	{
		route: 'dashboard',
		title: 'Dashboard',
		value: 1,
	},
	{
		route: 'profile.show',
		title: 'Profile',
		value: 2,
	}
	// {
	// 	route: "teams.show, 1",
	// 	title: 'Team',
	// 	value: 3,
	// }
];
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
			<div v-for="(link) in links">
				<v-list-item :active="route().current(link.route)" :href="route(link.route)">
					{{ link.title }}
				</v-list-item>
			</div>
			<v-list-item @click="logout">
				Logout
			</v-list-item>
		</v-list>

		<!-- <v-list class="pt-0">
			<v-list-item :active="route().current('dashboard')" :href="route('dashboard')">
				Dashboard
			</v-list-item>

			<v-list-item :active="route().current('profile.show')" :href="route('profile.show')">
				Profile
			</v-list-item>

			<v-list-item :active="route().current('teams.show')"
				:href="route('teams.show', $page.props.user.current_team)">
				{{ $page.props.user.current_team.name }}
			</v-list-item>
		</v-list> -->

		<!-- Sidebar footer -->
		<div class="text-center bottom-0 bg-white absolute w-full flex flex-col items-center">
			<img src="../../images/pharmascoutlogo500.png" width="150" alt="Pharmascout Logo">
			<hr class="m-0 w-full mt-2">
			<p class="py-2 text-xs text-gray-700"><strong class="text-black-500 font-">Copyright</strong> Scout
				Technologies © 2015-2022</p>
		</div>
	</div>
</template>