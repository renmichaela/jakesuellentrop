<template>
    <div>
        <div class="bg-gray-300 h-128 w-1/3 mx-auto p-2 overflow-scroll">
            <div
                v-for="(message, key) in chat"
                :key="key"
                class="flex justify-end flex-wrap"
            >
                <p
                    class="bg-blue-500 rounded-lg mb-1 px-2 py-1 w-1/2 text-left"
                >
                    {{ message.text }}
                </p>
                <p
                    class="text-xs text-gray-800 text-right w-full"
                    v-if="key == chat.length - 1"
                >
                    {{ formatTimestamp(message.timestamp) }}
                </p>
            </div>
        </div>
        <chat-input @send-message="addMessageToChat" class="w-1/3 mx-auto" />
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
        addMessageToChat(text) {
            let message = {
                text: text,
                timestamp: Date.now()
            };
            this.chat.push(message);
        },

        formatTimestamp(timestamp) {
            let stamp = new Date(timestamp);

            let dateParts = [
                stamp.getMonth() + 1,
                stamp.getDate() + 1,
                stamp.getFullYear()
            ];

            let timeParts = [stamp.getHours(), stamp.getMinutes()];

            return dateParts.join("/") + " " + timeParts.join(":");
        }
    }
};
</script>

<style></style>
