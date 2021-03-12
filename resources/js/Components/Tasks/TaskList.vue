<template>
    <div class="p-6 grid grid-cols-4 gap-4">
        <task />
        <task />
        <task />
        <task />
    </div>
</template>

<script>
    import Task from '@/Components/Tasks/Task';

    export default {
        components: {
            Task
        }
    }
</script>
