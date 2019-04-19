<template>
    <div class="recommends__container">
        <div class="recommends__container__wrapper">
            <h1 class="recommends__container__wrapper--title">{{ recommendsTitle }}</h1>
            <div class="recommends__container__wrapper--more_button is-hidden-mobile">
                <span><i class="fas fa-angle-right"></i></span>
                <a>もっとみる</a>
            </div>
        </div>
        <div class="columns is-multiline">
            <recommends-events-card
                class="mobile"
                v-for="n in cardDisplayNumber" :key="n"
                :event-display-type="cardDisplayType"
                :event-id=n
                :event-image-path="eventImagePath[n % 3]"
                :event-time="eventTime"
                :event-category="eventCategory"
                :event-title="eventTitle"
                :event-date-time="eventDateTime"
                :event-price="eventPrice"
                :event-place="eventPlace"
                :event-min-age="eventMinAge"
            ></recommends-events-card>
            <swiper
                :options="swiperOption"
                class="tablet">
                <swiper-slide v-for="n in cardDisplayNumber" :key="n">
                    <recommends-events-card
                        :event-id=n
                        :event-image-path="eventImagePath[n % 3]"
                        :event-time="eventTime"
                        :event-category="eventCategory"
                        :event-title="eventTitle"
                        :event-date-time="eventDateTime"
                        :event-price="eventPrice"
                        :event-place="eventPlace"
                        :event-min-age="eventMinAge"
                    ></recommends-events-card>
                </swiper-slide>
            </swiper>
        </div>
        <div class="recommends__container--more_button is-hidden-desktop">
            <span><i class="fas fa-angle-right"></i></span>
            <a>もっとみる</a>
        </div>
    </div>
</template>

<script>
    import RecommendsEventsCard from './RecommendsEventsCard';

    export default {
        components: {
            RecommendsEventsCard
        },
        data() {
            return {
                // events: {},
                eventImagePath: [
                    '/images/top_recommend_image_01.jpg',
                    '/images/top_recommend_image_02.jpg',
                    '/images/top_recommend_image_03.jpg',
                ],
                eventTime: '10:00:00',
                eventCategory: 'language',
                eventTitle: 'プログラミングであそぼう',
                eventDateTime: '2019-04-16 10:00:00',
                eventPrice: '3,000',
                eventPlace: '豊洲',
                eventMinAge: '3',
                swiperOption: {
                    slidesPerView: 2.2,
                    spaceBetween: 8,
                }
            }
        },
        props: {
            events: {
                type: Array,
                default: () => []
            },
            recommendsAge: {
                type: Number
            },
            recommendsTitle: {
                type: String
            },
            cardDisplayNumber: {
                type: Number
            },
            cardDisplayType: {
                type: String
            },
        },
    }
</script>

<style lang="scss" scoped>
    @import "../../../../../sass/variables";
    .recommends__container {
        margin: 64px 0;
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
        .swiper-wrapper {
            margin-bottom: 8px;
        }
        &--more_button {
            @media screen and (max-width: 767px) {
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
    .mobile {
        @media screen and (max-width: 768px) {
            display: none;
        }
    }
    .tablet {
        @media screen and (min-width: 768px) {
            display: none;
        }
    }
</style>
