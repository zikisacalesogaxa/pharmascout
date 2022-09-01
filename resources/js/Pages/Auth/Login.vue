<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import JetAuthenticationCard from '@/Components/AuthenticationCard.vue';
import JetButton from '@/Components/Button.vue';
import JetInput from '@/Components/Input.vue';
import JetInputError from '@/Components/InputError.vue';
import JetLabel from '@/Components/Label.vue';

defineProps({
    canResetPassword: Boolean,
    canRegister: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    })).post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Log in" />

    <JetAuthenticationCard>
        <div class="m-auto flex justify-center">
            <img src="../../../images/pharmascoutlogo500.png" width="300" alt="Pharmascout Logo">
        </div>
        <br>
        <div>
            <p class="text-center text-gray-600 text-sm">
                <strong class="uppercase">A Brand of Scout Technologies</strong>
                <br><br>
                This portal is intented for all our customers to enable them to manage all processes around their compliance
                <br><br>
                Login in with your username or email address
            </p>
        </div>

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <br>
        <form @submit.prevent="submit">
            <div>
                <JetInput
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    placeholder="Email"
                    required
                    autofocus
                />
                <JetInputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <JetInput
                    id="password"
                    v-model="form.password"
                    type="password"
                    class="mt-1 block w-full"
                    placeholder="Password"
                    required
                    autocomplete="current-password"
                />
                <JetInputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="flex items-center justify-end mt-0 flex-col">
                <JetButton class="mt-4 w-full text-center bg-blue-500 hover:bg-blue-600 capitalize flex justify-center" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Login
                </JetButton>
                <br>
                <Link v-if="canResetPassword" :href="route('password.request')" class="text-sm text-blue-600 hover:text-gray-900">
                    Forgot your password?
                </Link>
                <p class="text-sm text-gray-500">Do not have Access?</p>
                <br>
                <JetButton class="w-full capitalize flex justify-center bg-slate-50 text-black shadow-md hover:bg-slate-50">
                    Request Access
                </JetButton>
            </div>
        </form>
        <br>
        <p class="text-sm text-gray-600 text-center">
            Scout Technologies © 2022
        </p>
    </JetAuthenticationCard>
</template>
