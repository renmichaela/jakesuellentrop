<template>
    <nav>
        <a
            :target="[route.external ? '_blank' : '_self']"
            :href="route.link"
            :key="key"
            v-for="(route, key) in routes"
            class="border border-solid border-transparent hover:border-white py-2 px-6 mx-2 no-underline uppercase font-semibold text-sm"
            :class="[
                route.link == currentRoute ? 'text-white' : 'text-gray-500'
            ]"
            >{{ route.text }}</a
        >
    </nav>
</template>

<script>
export default {
    props: {
        currentRoute: {
            type: String,
            required: true
        },
        routes: {
            type: Array,
            required: true
        }
    }
};
</script>

<style scoped>
a {
    letter-spacing: 0.1rem;
}
</style>
