<template>
    <div class="bg-gray-200 rounded p-4">
        <div class="flex justify-between">
            <h2 class="text-3xl text-gray-800 mb-1">{{ title }}</h2>
            <span class="text-gray-400">{{ due_date }}</span>
        </div>
        <span class="text-md block text-gray-400">{{ status }}</span>
        <span class="text-sm block mb-4 text-gray-400">Private</span>
        <span class="text-xl text-gray-500">No description</span>
        <div class="flex justify-between mt-20">
            <inertia-link href="/" type="button" as="button" class="bg-gray-400 py-2 px-4 rounded">Complete</inertia-link>
            <div class="flex">
                <inertia-link href="/" type="button" as="button" class="bg-gray-300 py-2 px-4 rounded mr-4">Edit</inertia-link>
                <button @click="handleTaskDelete" type="button" class="text-gray-800">Delete</button>
            </div>
        </div>
    </div>
</template>

<script>
    import route from 'ziggy';

    export default {
        props: ['title', 'due_date', 'status', 'visibility', 'id'],
        methods: {
            async handleTaskDelete() {
                try {
                    const response = await axios.delete(route('task.destroy', this.id));
                    this.$store.commit('removeTaskFromTheList', {id: this.id});
                } catch (err) {
                    console.log(err);
                }
            }
        },
        computed: {
            statusText() {

            },
            statusStyle() {

            }
        }
    }
</script>
