<template>
    <div class="sticky-footer">
        <div class="container sticky-footer-container">
            <div class="sticky-footer-wrapper">
                <div>
                    <div class="left-item is-hidden-mobile">
                        <div class="image-box">
                            <figure class="image image-size">
                                <!--<progressive-img class="is-rounded" placeholder="https://unsplash.it/1920/1080?random" />-->
                            </figure>
                        </div>
                        <div class="content">
                            <div class="school-name">
                                <span>English!</span>
                            </div>
                            <div>
                                <div class="review">
                                </div>
                                <div class="review-link">
                                    <span class="">
                                        <a>495件のレビュー</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-item-wrapper">
                    <div class="right-item">
                        <div class="price-part">
                            <div class="price-container">
                                <span class="activity-price has-text-weight-bold">¥1,000</span>
                                <span> / 1人</span>
                            </div>
                        </div>
                        <div class="schdule-part">
                            <div>
                                <a class="button btn-expand" @click="book">
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
    export default {
        props: {
        },
        methods: {
            book() {
                this.$emit('book');
            }
        },
    }
</script>

<style lang="scss" scoped>
    .sticky-footer {
        height: 70px;
        position: fixed;
        bottom: 0;
        width: 100%;
        border-top: 1px solid #EBEBEB;
        box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.05);
        background-color: white;
    }
    .sticky-footer-container {
    }
    .sticky-footer-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 10px;
        padding-bottom: 10px;
    }
    .left-item {
        display: flex;
        /*width: 240px;*/
        height: 50px;
    }
    .right-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        /*width: 300px;*/
        height: 50px;
    }
    .content {
        width: 100%;
    }
    .price-part {
    }
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
</style>
