<template>
    <div class="columns is-multiline">
        <recommends-top-card
            class="is-hidden-mobile"
            v-for="n in 9" :key="n"
            :event-id=n
            :event-image-path="eventImagePath[n % 3]"
            :event-time="eventTime"
            :event-category="eventCategory"
            :event-title="eventTitle"
            :event-date-time="eventDateTime"
            :event-price="eventPrice"
            :event-place="eventPlace"
            :event-min-age="eventMinAge"
        ></recommends-top-card>
        <swiper
            :options="swiperOption"
            class="is-hidden-desktop">
            <swiper-slide v-for="n in 5" :key="n">
                <recommends-top-card
                    class="is-hidden-desktop"
                    :event-id=n
                    :event-image-path="eventImagePath[n % 3]"
                    :event-time="eventTime"
                    :event-category="eventCategory"
                    :event-title="eventTitle"
                    :event-date-time="eventDateTime"
                    :event-price="eventPrice"
                    :event-place="eventPlace"
                    :event-min-age="eventMinAge"
                ></recommends-top-card>
                </swiper-slide>
                <div class="swiper-pagination" slot="pagination"></div>
        </swiper>
    </div>
</template>

<script>
    import RecommendsTopCard from './RecommendsTopCard';

    export default {
        components: {
            RecommendsTopCard
        },
        data() {
            return {
                eventImagePath: [
                    '/images/top_recommend_image_01.jpg',
                    '/images/top_recommend_image_02.jpg',
                    '/images/top_recommend_image_03.jpg',
                ],
                eventTime: '10:00',
                eventCategory: 'language',
                eventTitle: 'プログラミングであそぼう',
                eventDateTime: '2/15',
                eventPrice: '3,000',
                eventPlace: '豊洲',
                eventMinAge: '3',
                swiperOption: {
                    slidesPerView: 1.2,
                    spaceBetween: 15,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                    }
                }
            }
        },
        props: {
            events: {
                type: Array,
                default: () => []
            }
        },
    }
</script>

<style lang="scss" scoped>
    .swiper-wrapper {
        margin-bottom: 8px;
    }
</style>
