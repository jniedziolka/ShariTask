<template>
    <div class="h-screen bg-purple-100 flex flex-col justify-center items-center ">
        <login-form />
    </div>
</template>

<script>
import LoginForm from "@/Components/Auth/LoginForm";

export default {
    components: {
        LoginForm
    }
}
</script>
