<template>
    <div class="bg-gray-300 flex">
        <input
            class="text-black w-4/5 p-2"
            type="text"
            name="message"
            id="message"
            v-model="message"
            @keydown.enter.prevent="sendMessage"
            placeholder="Press 'Enter' to send"
        />
        <button type="button" @click="sendMessage" class="w-1/5 bg-blue-500">
            SEND
        </button>
    </div>
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
