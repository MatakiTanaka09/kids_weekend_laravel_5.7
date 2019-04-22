<template>
    <div>
        <top-header></top-header>
        <section class="section">
            <div class="form__container">
                <img :src="logo" alt="">
                <div>
                    <p>ご予約ありがとうございます！</p><br/>
                </div>
                <br/>
                <router-link to="/events">
                    <a class="button form__container--more_button">ホームへ戻る</a>
                </router-link>
                <router-link to="/users/me/reserve">
                    <a class="button form__container--more_button">マイページへ</a>
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
                "logo": "/images/logo.png"
            }
        },
        methods: {
        }
    }
</script>

<style lang="scss" scoped>
    @import "../../../../sass/variables";
    .section {
        padding: 128px 24px;
        .form__container {
            text-align: center;
            @media screen and (min-width: 1024px) {
                padding: 0 400px;
            }
            &--more_button {
                @media screen and (max-width: 768px) {
                    width: 100%;
                    text-align: center;
                    margin-top: 24px;
                    padding: 8px;
                    color: $pink;
                    border: 2px solid $pink;
                    border-radius: 4px;
                    a {
                        color: $pink;
                    }
                }
            }
        }
    }
</style>
