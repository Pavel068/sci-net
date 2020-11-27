<template>

</template>

<script>
export default {
    name: "Logout",
    mounted() {
        localStorage.clear();
        this.$router.push({name: 'Login'});
    }
}
</script>

<style scoped>

</style>
