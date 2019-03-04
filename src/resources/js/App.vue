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
    import { mapActions } from "vuex";
    export default {
        components: {
          TopHeader,
          TopFooter
        },
        created() {
            http.init();
            // this.init();
        },
        methods: {
            ...mapActions({
                init: 'auth/setCurrentUser'
            })
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
