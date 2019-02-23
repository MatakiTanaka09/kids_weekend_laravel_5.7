<template>
    <div>
        <top-header></top-header>
        <router-view></router-view>
        <top-footer></top-footer>
    </div>
</template>

<script>
    import TopHeader from "./components/presentations/common/header/TopHeader";
    import TopFooter from "./components/presentations/common/footer/TopFooter";
    import http from './services/http';

    export default {
        components: {
          TopHeader,
          TopFooter
        },
        created() {
            http.init();
        }
    }
</script>

<style lang="scss" scoped>
    header {
        @media screen and (max-width: 767px){
            margin-top: -63px;
        }
    }
</style>
