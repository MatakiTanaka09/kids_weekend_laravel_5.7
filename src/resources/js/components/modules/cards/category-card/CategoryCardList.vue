<template>
    <div class="category__container">
        <div class="category__container__wrapper">
            <h1 class="category__container__wrapper--title">カテゴリー</h1>
            <div class="category__container__wrapper--more_button is-hidden-mobile">
                <span><i class="fas fa-angle-right"></i></span>
                <a>もっとみる</a>
            </div>
        </div>
        <div class="columns is-multiline">
            <category-card
                v-for="(n, index) in 6"
                :key="n"
                class="is-hidden-mobile"
                :category-id="n"
                :category-image-path="categoryImages[index]"
                :category-name="categoryName[index]"
            ></category-card>
            <swiper
                :options="swiperOption"
                class="is-hidden-desktop">
                <swiper-slide v-for="(n, index) in 6" :key="n">
                    <category-card
                        class="is-hidden-desktop"
                        :category-id="n"
                        :category-image-path="categoryImages[index]"
                        :category-name="categoryName[index]"
                    ></category-card>
                </swiper-slide>
            </swiper>
        </div>
    </div>
</template>

<script>
    import CategoryCard from './CategoryCard';

    export default {
        components: {
            CategoryCard
        },
        data() {
            return {
                categoryImages: [
                    '/images/eventsPage/science.jpg',
                    '/images/eventsPage/sports.jpg',
                    '/images/eventsPage/art.jpg',
                    '/images/eventsPage/language.jpg',
                    '/images/eventsPage/music.jpg',
                    '/images/eventsPage/others.jpg',
                ],
                categoryName: [
                    '科学',
                    'スポーツ',
                    'アート',
                    '外国語',
                    '音楽',
                    'その他'
                ],
                swiperOption: {
                    slidesPerView: 1.2,
                    spaceBetween: 8,
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import "../../../../../sass/variables";
    .category__container {
        margin: 96px 0;
        @media screen and (max-width: 767px){
            margin: 56px 0;
        }
        &__wrapper {
            display: flex;
            align-items: center;
            &--title {
                font-size: 24px;
                margin-right: 30px;
                margin-bottom: 20px;
                @media screen and (max-width: 767px) {
                    margin-right: 12px;
                }
            }
            &--more_button {
                margin-bottom: 20px;
                color: $pink;
                font-weight: bold;
                a {
                    color: $pink;
                }
            }
        }

    }
</style>
