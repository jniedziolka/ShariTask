<template>
    <div class="h-screen bg-gray-100 flex flex-col justify-center items-center">
        <login-form />
    </div>
</template>

<script>
import LoginForm from "@/Components/LoginForm";

export default {
    components: {
        LoginForm
    }
}
</script>
