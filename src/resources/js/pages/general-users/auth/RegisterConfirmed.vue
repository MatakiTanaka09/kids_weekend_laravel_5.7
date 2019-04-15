<template>
    <div class="section">
        登録完了しました。
        <router-link to="/login" class="button">
            ログイン
        </router-link>
    </div>
</template>

<script>
    import axios from 'axios';
    import http from '../../../services/http'
    export default {
        name: "RegisterConfirmed",
        methods: {
            getUrl() {
                axios.get(this.$route.query.queryURL).then(res => {console.log(res)}).catch(e => {console.log("error", e)})
            }
        },
        created() {
            this.getUrl();
        }
    }
</script>

<style lang="scss" scoped>
    .section {
        padding: 128px 24px;
    @media screen and (max-width: 767px){
        margin-top: 63px;
        padding: 36px 24px;
    }
    .button__save {
        margin-top: 16px;
        width: 100%;
    }
    }
</style>
