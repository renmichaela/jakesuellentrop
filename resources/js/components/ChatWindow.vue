<template>
    <div class="bg-gray-300 h-64 w-1/3 mx-auto rounded-md relative">
        <div v-for="(message, key) in chat" :key="key" class="flex justify-end">
            <p class="bg-blue-500 rounded-full m-2 p-1 w-1/2 text-left">
                {{ message }}
            </p>
        </div>
        <chat-input
            @send-message="addMessageToChat"
            class="absolute bottom-0 left-0 w-full rounded-full"
        />
    </div>
</template>

<script>
export default {
    data() {
        return {
            chat: []
        };
    },

    methods: {
        addMessageToChat(message) {
            this.chat.push(message);
        }
    }
};
</script>

<style></style>
