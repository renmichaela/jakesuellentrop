<template>
    <nav>
        <a
            :href="route.link"
            :key="key"
            v-for="(route, key) in routes"
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
    padding: 0 25px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.1rem;
    text-decoration: none;
    text-transform: uppercase;
}
</style>
