<template>
    <div>
        <div class="loading__container" v-if="isLoading">
            <fade-loader class="loading"></fade-loader>
        </div>
        <div v-else>
            <h1>メールを送信しました。添付してあるリンクを押して認証を完了してください。</h1>
        </div>
    </div>
</template>

<script>
    import FadeLoader from 'vue-spinner/src/FadeLoader.vue';

    export default {
        components: {
            FadeLoader
        },
        data() {
            return {
                isLoading: true
            }
        },
        methods: {
            isLoadingStopped() {
                setTimeout(this.loadingToggle, 1500)
            },
            loadingToggle() {
                this.isLoading = !this.isLoading
            }
        },
        created() {
            this.isLoadingStopped()
        }
    }
</script>

<style lang="scss" scoped>
    .loading__container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
</style>
