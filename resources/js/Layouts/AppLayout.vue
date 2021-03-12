<template>
    <div>
        <app-header />
        <main>
            <slot></slot>
        </main>
    </div>
</template>

<script>
    import AppHeader from '@/Components/AppHeader';

    export default {
        components: {
            AppHeader
        }
    }
</script>
