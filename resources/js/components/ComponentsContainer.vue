<template>
    <div class="flex justify-center mx-auto w-2/3">
        <div class="w-1/3">
            <toggle-field
                label="Toggle Field"
                on-text="It's on!"
                off-text="Now it's off"
                v-model="toggleState"
            />
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            toggleState: 0
        };
    }
};
</script>

<style></style>
