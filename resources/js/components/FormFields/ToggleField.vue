<template>
    <div>
        <label class="inline-block uppercase">{{ label }}</label>
        <div id="field" class="items-center flex h-12 justify-between mt-1">
            <div id="label" class="font-bold px-2 w-3/4">
                <p v-if="stateAsBool">{{ onText || "On" }}</p>
                <p v-if="!stateAsBool">{{ offText || "Off" }}</p>
            </div>
            <div
                id="toggle"
                @click="toggle"
                class="flex h-full items-center px-2 w-1/4 cursor-pointer rounded-full"
                :class="[
                    stateAsBool
                        ? 'bg-green-500 justify-end'
                        : 'bg-gray-600 justify-start',
                ]"
            >
                <div id="indicator" class="bg-white h-8 w-8 rounded-full"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    model: {
        prop: "state",
        event: "change",
    },

    props: {
        state: {
            required: true,
            type: Number,
            default: 0,
        },
        onText: {
            required: false,
            type: String,
        },
        offText: {
            required: false,
            type: String,
        },
        label: {
            required: true,
            type: String,
        },
    },

    computed: {
        stateAsBool() {
            return Boolean(this.state);
        },
    },

    methods: {
        toggle() {
            this.$emit("change", this.stateAsBool ? 0 : 1);
        },
    },
};
</script>

<style></style>
