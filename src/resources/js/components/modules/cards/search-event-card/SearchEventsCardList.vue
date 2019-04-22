<template>
    <div class="recommends__container">
        <div class="recommends__container__wrapper">
            <h1 class="recommends__container__wrapper--title">{{ recommendsTitle }}</h1>
        </div>
        <div class="columns is-multiline">
            <recommends-events-card
                class="mobile"
                v-for="(data,index) in events" :key="data.uuid"
                :event-id="data.uuid"
                :event-image-path="eventImagePath[index % 3]"
                :event-time="data.time"
                :event-category="data.category_event.category.name"
                :event-title="data.activity.name"
                :event-date-time="data.started_at"
                :event-price="data.price"
                :event-place="eventPlace"
                :event-min-age="data.target_min_age"
            ></recommends-events-card>
            <swiper
                :options="swiperOption"
                class="tablet">
                <swiper-slide v-for="(data,index) in events" :key="data.uuid">
                    <recommends-events-card
                        :event-id="data.uuid"
                        :event-image-path="eventImagePath[index % 3]"
                        :event-time="data.time"
                        :event-category="data.category_event.category.name"
                        :event-title="data.activity.name"
                        :event-date-time="data.started_at"
                        :event-price="data.price"
                        :event-place="eventPlace"
                        :event-min-age="data.target_min_age"
                    ></recommends-events-card>
                </swiper-slide>
                <div class="swiper-pagination" slot="pagination"></div>
            </swiper>
        </div>
    </div>
</template>

<script>
    import RecommendsEventsCard from './SearchEventsCard';
    // import { mapActions, mapGetters } from 'vuex'
    import http from '@/services/http';
    export default {
        components: {
            RecommendsEventsCard
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
                    slidesPerView: 2.2,
                    spaceBetween: 8,
                }
            }
        },
        props: {
            events: {
                type: [Array, Object],
                default: () => []
            },
            recommendsTitle: {
                type: String
            }
        }
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
