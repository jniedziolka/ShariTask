<template>
    <app-layout>
        <task-list />
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import TaskList from "@/Components/Tasks/TaskList";

    export default {
        components: {
            AppLayout,
            TaskList
        }
    }
</script>
