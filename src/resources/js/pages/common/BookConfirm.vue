<template>
    <div>
        <top-header></top-header>
        <section class="section">
            <div class="form__container">
                <div>予約完了！</div>
                <router-link to="/events">
                    <a class="button is-primary">ホームへ</a>
                </router-link>
                <router-link to="/users">
                    <a class="button is-primary">マイページへ</a>
                </router-link>
            </div>
        </section>
    </div>
</template>

<script>
    import TopHeader from "@/components/common/header/TopHeader";
    export default {
        components: {
            TopHeader
        },
        data() {
            return {
            }
        },
        methods: {
        }
    }
</script>

<style lang="scss" scoped>
    .section {
        padding: 128px 24px;
        .form__container {
            @media screen and (min-width: 1024px) {
                padding: 0 400px;
            }

        }
    }
</style>
