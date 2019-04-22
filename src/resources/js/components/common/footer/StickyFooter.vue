<template>
    <div class="sticky__footer">
        <div class="sticky__footer__container">
            <div class="sticky__footer__container__wrapper">
                <div class="left__item__container">
                    <div class="left__item__container__wrapper is-hidden-mobile">
                        <div class="image-box">
                            <div class="image image-size" style="width:48px; height:48px">
                                <img :src="logo" />
                            </div>
                        </div>
                        <div class="content">
                            <div class="school-name">
                                <span>{{ schoolName }}</span>
                            </div>
                            <div>
                                <div class="review">
                                </div>
                                <div class="review-link">
                                    <span class="">
                                        <a>100件のレビュー</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right__item__container">
                    <div class="right__item__container__wrapper">
                        <div class="price-part">
                            <div class="price-container">
                                <span class="activity-price has-text-weight-bold">¥{{ eventPrice }}</span>
                                <span> / 1人</span>
                            </div>
                        </div>
                        <div class="schdule-part">
                            <div>
                                <a class="button btn-expand" @click="book" :class="{ disable: !isLoggedIn}">
                                    <span class="has-text-weight-bold">今すぐ予約する</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';
    export default {
        data() {
            return {
                'logo': '/images/sp.png',
            }
        },
        props: {
            schoolName: {
                type: String
            },
            eventPrice: {
                type: Number
            }
        },
        computed: {
            ...mapGetters({
                isLoggedIn: 'auth/isLoggedIn',
            })
        },
        methods: {
            book() {
                this.$emit('book');
            }
        },
    }
</script>

<style lang="scss" scoped>
    .sticky__footer {
        height: 70px;
        position: fixed;
        bottom: 0;
        width: 100%;
        border-top: 1px solid #EBEBEB;
        box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.05);
        background-color: white;
        z-index: 1000;
        &__container {
            margin: 0px 20px;
            &__wrapper {
                display: flex;
                justify-content: space-around;
                align-items: center;
                padding-top: 10px;
                padding-bottom: 10px;
                width: 100%;
                .left__item__container {
                    &__wrapper {
                        display: flex;
                        height: 50px;
                        .image-box {
                            margin-right: 8px;
                        }
                        .content {
                            width: 100%;
                        }
                    }
                }
                .right__item__container {
                    &__wrapper {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        height: 50px;
                        .price-container {
                            width: 100%;
                            padding-right: 8px;
                        }
                        .btn-expand {
                            width: 200px;
                            height: 48px;
                            background-color: #ffd046;
                            border: 1px solid #ffd046;
                            color: white;
                        }
                    }
                }
            }
        }
    }
</style>
