<template>
    <div>
        <form method="post" action="">
            <slot name="token"></slot>
            <div
                id="drop-zone"
                class="h-64 w-64 bg-white rounded-md mx-auto flex items-center justify-center"
                @drop.prevent="receiveUpload"
                @dragover.prevent
            >
                <p class="text-black font-bold italic">Drop Files Here</p>
            </div>
            <button
                @click="upload"
                type="button"
                class="bg-green-100 text-black px-4 py-2 m-4 rounded-sm"
            >
                Submit
            </button>
        </form>
        <div class="flex flex-wrap justify-center my-4 w-1/2 mx-auto">
            <a
                :href="upload"
                v-for="(upload, key) in uploads"
                :key="key"
                class="w-24 h-24 m-4"
            >
                <img :src="upload" :alt="upload" class="w-full h-full" />
            </a>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        formAction: {
            required: true,
            type: String
        },
        initUploads: {
            required: false,
            type: String
        }
    },

    data() {
        return {
            formData: new FormData(),
            uploads: JSON.parse(this.initUploads) || []
        };
    },

    methods: {
        receiveUpload(event) {
            if (!event.dataTransfer.files) {
                return "Fuck you";
            }

            Object.entries(event.dataTransfer.files).forEach(file => {
                let upload = file.filter((value, key) => {
                    if (typeof value == "object") {
                        this.formData.append("files", value);
                    }
                });
            });
        },

        upload() {
            Window.$axios
                .post(this.formAction, this.formData)
                .then(result => {
                    this.uploads.push(result.data);
                })
                .catch(error => {
                    console.error(error);
                });
        }
    }
};
</script>

<style></style>
