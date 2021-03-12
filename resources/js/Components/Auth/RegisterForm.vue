<template>
    <div class="container max-w-xl bg-purple-200 flex flex-col items-center py-8 rounded">
        <form class="w-3/4" @submit.prevent="submit">
            <div class="flex flex-col mb-6">
                <label for="first_name" class="mb-2 text-purple-500">First name</label>
                <input id="first_name" v-model="form.first_name" type="text" class="border-purple-300 rounded shadow focus:ring-2 focus:ring-purple-500 focus:border-transparent"/>
            </div>
            <div class="flex flex-col mb-6">
                <label for="last_name" class="mb-2 text-purple-500">Surname</label>
                <input id="last_name" v-model="form.last_name" type="text" class="border-purple-300 rounded shadow focus:ring-2 focus:ring-purple-500 focus:border-transparent"/>
            </div>
            <div class="flex flex-col mb-6">
                <label for="nickname" class="mb-2 text-purple-500">Nickname</label>
                <input id="nickname" v-model="form.nickname" type="text" class="border-purple-300 rounded shadow focus:ring-2 focus:ring-purple-500 focus:border-transparent"/>
            </div>
            <div class="flex flex-col mb-6">
                <label for="email" class="mb-2 text-purple-500">Email</label>
                <input id="email" v-model="form.email" type="text" class="border-purple-300 rounded shadow focus:ring-2 focus:ring-purple-500 focus:border-transparent"/>
            </div>
            <div class="flex flex-col mb-6">
                <label for="password" class="mb-2 text-purple-500">Password</label>
                <input id="password" v-model="form.password" type="password" class="border-purple-300 rounded shadow focus:ring-2 focus:ring-purple-500 focus:border-transparent"/>
            </div>
            <div class="flex flex-col mb-5">
                <label for="password_confirmation" class="mb-2 text-purple-500">Confirm password</label>
                <input id="password_confirmation" v-model="form.password_confirmation" type="password" class="border-purple-300 rounded shadow focus:purple-2 focus:ring-gray-500 focus:border-transparent"/>
            </div>
            <div class="flex justify-between items-center">
                <button type="submit" class="bg-purple-500 text-purple-100 p-2 rounded">Register</button>
                <span class="text-purple-400">Already have an account?
                    <inertia-link href="/login" class="font-bold">Login!</inertia-link>
                </span>
            </div>
        </form>
        <div v-if="form.errors">{{ form.errors }}</div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                form: {
                    first_name: null,
                    last_name: null,
                    nickname: null,
                    email: null,
                    password: null,
                    password_confirmation: null
                }
            }
        },
        methods: {
            submit() {
                this.$inertia.post('/register', this.form)
            }
        }
    }
</script>
