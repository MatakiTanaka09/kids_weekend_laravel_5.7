<template>
  <router-view></router-view>
</template>

<script>
    import http from './services/http';

    export default {
        created() {
            http.init();
        }
    }
</script>

<style lang="scss" scoped>
</style>
