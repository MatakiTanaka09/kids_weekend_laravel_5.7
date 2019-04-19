<template>
    <div>
        <top-header></top-header>
        <router-view></router-view>
        <top-footer></top-footer>
    </div>
</template>

<script>
    import TopHeader from "./components/common/header/TopHeader";
    import TopFooter from "./components/common/footer/TopFooter";
    import http from './services/http';
    import { mapActions, mapGetters } from "vuex";
    export default {
        components: {
          TopHeader,
          TopFooter
        },
        created() {
            http.init();
            this.authInit();
            this.userInit();
        },
        computed: {
            ...mapGetters({
                isLoggedIn: "auth/isLoggedIn"
            })
        },
        methods: {
            ...mapActions({
                authInit: 'auth/setCurrentUser',
                userInit: 'user/setCurrentUser'
            })
        }
    }
</script>

<style lang="scss" scoped>
    header {
        @media screen and (max-width: 768px){
            margin-top: -63px;
        }
    }
</style>
