<template>
    <div>
        <p class="cursor-pointer p-4 text-white" @click="logout">{{ text }}</p>
        <form :action="route" method="post" ref="logoutForm">
            <slot name="csrf"></slot>
        </form>
    </div>
</template>

<script>
export default {
    props: {
        route: {
            type: String,
            required: true
        },
        text: {
            type: String,
            default: "Logout"
        }
    },

    methods: {
        logout() {
            this.$refs.logoutForm.submit();
        }
    }
};
</script>

<style></style>
