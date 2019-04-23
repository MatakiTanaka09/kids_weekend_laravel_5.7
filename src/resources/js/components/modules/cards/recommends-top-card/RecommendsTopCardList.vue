<template>
    <div class="columns is-multiline">
        <recommends-top-card
            class="mobile"
            v-for="(data,index) in events" :key="data.event_uuid"
            :event-id="data.event_uuid"
            :event-image-path="eventImagePath[index % 3]"
            :event-time="data.event.time"
            :event-category="data.event.category_event.category.name"
            :event-title="data.event.activity.name"
            :event-date-time="data.event.started_at"
            :event-price="data.event.price"
            :event-place="eventPlace"
            :event-min-age="data.event.target_min_age"
        ></recommends-top-card>
        <swiper
            :options="swiperOption"
            class="tablet">
            <swiper-slide v-for="(data,index) in events" :key="data.event_uuid">
                <recommends-top-card
                    :event-id="data.event_uuid"
                    :event-image-path="eventImagePath[index % 3]"
                    :event-time="data.event.time"
                    :event-category="data.event.category_event.category.name"
                    :event-title="data.event.activity.name"
                    :event-date-time="data.event.started_at"
                    :event-price="data.event.price"
                    :event-place="eventPlace"
                    :event-min-age="data.event.target_min_age"
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
                eventTime: '10:00:00',
                eventCategory: 'language',
                eventTitle: 'プログラミングであそぼう',
                eventDateTime: '2/15',
                eventPrice: '3,000',
                eventPlace: '豊洲',
                eventMinAge: '3',
                swiperOption: {
                    slidesPerView: 2.2,
                    spaceBetween: 15,
                }
            }
        },
        props: {
            events: {
                type: [Array, Object],
                default: () => []
            }
        }
    }
</script>

<style lang="scss" scoped>
    .swiper-wrapper {
        margin-bottom: 8px;
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
