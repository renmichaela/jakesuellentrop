<template>
    <input
        class="text-black"
        type="text"
        name="message"
        id="message"
        v-model="message"
        @keydown.enter.prevent="sendMessage"
    />
</template>

<script>
export default {
    data() {
        return {
            message: ""
        };
    },

    methods: {
        sendMessage() {
            this.$emit("send-message", this.message);
            this.message = "";
        }
    }
};
</script>

<style></style>
