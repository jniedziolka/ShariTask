<template>
    <div class="container max-w-xl bg-gray-200 flex flex-col items-center py-8 rounded">
        <form class="w-3/4" @submit.prevent="submit">
            <div class="flex flex-col mb-6">
                <label for="email" class="mb-2 text-gray-500">Email</label>
                <input id="email" v-model="form.email" type="text" class="border-gray-300 rounded shadow focus:ring-2 focus:ring-gray-500 focus:border-transparent"/>
            </div>
            <div class="flex flex-col mb-6">
                <label for="password" class="mb-2 text-gray-500">Password</label>
                <input id="password" v-model="form.password" type="password" class="border-gray-300 rounded shadow focus:ring-2 focus:ring-gray-500 focus:border-transparent"/>
            </div>
            <div class="flex justify-between items-center">
                <button type="submit" class="bg-gray-500 text-gray-100 p-2 rounded">Login</button>
                <span class="text-gray-400">Don't have an account?
                    <inertia-link href="/register" class="font-bold">Register!</inertia-link>
                </span>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    data() {
        return {
            form: {
                email: null,
                password: null
            }
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/login', this.form);
        }
    }
}
</script>
