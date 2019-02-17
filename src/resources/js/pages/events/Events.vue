<template>
    <main>
        <div class="loading-container" v-if="isLoading">
            <fade-loader class="loading"></fade-loader>
        </div>
        <section v-else class="section">
            <h1 class="title big-title is-block is-3">カテゴリー</h1>
            <div class="category-wrapper">
                <div class="columns is-multiline is-centered">
                    <router-link to="/" class="column is-quarter">
                        <div class="image-container">
                            <div class="image-box">
                                <figure class="image">
                                    <progressive-img class="" src="http://placehold.jp/325x300.png" />
                                </figure>
                            </div>
                        </div>
                        <div class="content-container">
                            <div class="content">
                                <div class="school-title text-completion-mobile has-text-weight-semibold has-text-primary">
                                    <span class="school-title-detail">aaa</span>
                                </div>
                                <div class="activity-title text-completion-mobile has-text-weight-bold">
                                    bbb
                                </div>
                                <div class="activity-time text-completion">
                                    <span class="icon is-small"><i class="far fa-clock has-text-primary"></i></span>
                                    <time datetime="2016-1-1">ssss</time>
                                </div>
                                <div class="short-description text-completion is-7">
                                    <span class="icon is-small"><i class="fas fa-child has-text-danger"></i></span>
                                    <span>2</span>
                                    <span> 〜 </span>
                                    <span>5才</span>
                                    <span class="icon is-small"><i class="fas fa-money-bill-alt has-text-warning"></i></span>
                                    <span>2000円</span>
                                </div>
                                <div class="category text-completion">
                                    <span class="tag is-light">English</span>
                                </div>
                                <div class="review text-completion">
                                    <span class="review-ave has-text-primary">4.99</span>
                                    <span class="icon is-small"><i class="fas fa-star has-text-warning"></i></span>
                                    <span class="icon is-small"><i class="fas fa-star has-text-warning"></i></span>
                                    <span class="icon is-small"><i class="fas fa-star has-text-warning"></i></span>
                                    <span class="icon is-small"><i class="fas fa-star has-text-warning"></i></span>
                                    <span class="icon is-small"><i class="fas fa-star has-text-warning"></i></span>
                                    <span class="review-amount has-text-gray">61</span>
                                </div>
                            </div>
                        </div>
                    </router-link>
                </div>
            </div>
            <router-link to="/events/1" class="is-block is-2 display-category">
                <span>すべてのカテゴリーを表示する</span>
                <span class="is-hidden-mobile"><i class="fa fa-angle-right"></i></span>
            </router-link>
        </section>
    </main>
</template>

<script>
    import FadeLoader from 'vue-spinner/src/FadeLoader.vue';

    export default {
        components: {
            FadeLoader
        },
        data() {
            return {
                isLoading: false
            }
        },
    }
</script>

<style lang="scss" scoped>
    .loading-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .section {
        padding: 20px 20px 40px;
    }
    .container-expand {
        padding-bottom: 56px;
    }
    .column.is-one-quarter {
        max-width: 540px;
    }
    figure.image {
        height: 100%;
        width: 100%;
    }
    .content-container {
        background: white;
        height: auto;
    }
    .text-completion {
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        color: black;
    }
    .category-wrapper {
        margin-bottom: 20px;
    }
    .big-title {
        padding-bottom: 8px;
        border-bottom: 2px solid #f2f2f2;
    }
    .school-title {
        font-size: 12px;
        padding-top: 4px;
        padding-bottom: 4px;
    }
    .activity-title {
        padding-bottom: 4px;
    }
    .activity-time {
        padding-bottom: 4px;
    }
    .short-description {
        padding-bottom: 4px;
    }
    .category {
        padding-bottom: 4px;
    }
    .review {
        padding-bottom: 4px;
    }
    .review-ave {
        font-size: 10px;
    }
    .review-amount {
        font-size: 10px;
    }
    a:hover {
        opacity: 0.6;
    }
    .display-category {
        margin-top: 24px;
        font-size: 18px;
        font-weight: bold;
        color: #57b8ff;
    }


    .search {
    }
    .search-today {
        width: 80%;
        height: auto;
        margin-right: 8px;
        border: 1px solid #EBEBEB;
        border-radius: 4px;
    }
    .search-tomorrow {
        height: auto;
        margin-right: 8px;
        border: 1px solid #EBEBEB;
        border-radius: 4px;
    }
    .search-date {
        height: auto;
        margin-right: 8px;
        border: 1px solid #EBEBEB;
        border-radius: 4px;
    }
    .search-card {
        height: auto;
    }
    .search-card-part {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .search-card-left-part {
        width: auto;
        margin-right: 16px;
    }
    .search-card-right-part {
    }
    @media screen and (min-width:480px) {
        .text-completion-mobile {
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            color: black;
        }
    }
    @media screen and (max-width: 768px) {
        .display-category {
            width: 100%;
            text-align: center;
            margin-top: 24px;
            padding: 8px;
            color: #57b8ff;
            border: 2px solid #57b8ff;
            border-radius: 4px;
        }
    }
</style>
