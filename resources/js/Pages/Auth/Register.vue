<template>
    <div class="h-screen bg-purple-100 flex flex-col justify-center items-center">
        <register-form />
    </div>
</template>

<script>
    import RegisterForm from "@/Components/Auth/RegisterForm";

    export default {
        components: {
            RegisterForm
        }
    }
</script>
