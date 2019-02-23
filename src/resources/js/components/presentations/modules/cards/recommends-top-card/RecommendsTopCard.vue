<template>
    <div class="column is-one-third">
        <router-link :to="{ name: 'EventIndividual', params: { id: eventId } }" class="activity__container">
            <div class="activity__container__images">
                <progressive-img class="activity__container__images--image" :src="eventImagePath" />
                <p class="activity__container__images--title">
                    {{ eventTime }}
                </p>
            </div>
            <div class="container__category">
                <div class="container__category--name" style="color: lightgreen;">
                    <p>
                        {{ eventCategory }}
                    </p>
                </div>
                <div class="container__category--title">
                    <p class="container__category--title_detail" style="font-weight: bold; font-size: 16px">
                        {{ eventTitle }}
                    </p>
                </div>
                <div class="container__category--time_place">
                    <p>
                        <span><i class="far fa-calendar-alt"></i></span>
                        <span>{{ eventDateTime }}</span>
                        <span class="activity_category--right_space"></span>
                        <i class="fas fa-thumbtack"></i>
                        <span>{{ eventPlace }}</span>
                    </p>
                </div>
                <div class="container__category--child_age">
                    <p>
                        <span><i class="fas fa-child"></i></span>
                        <span>{{ eventMinAge }}</span>
                        <span>歳以上</span>
                        <span class="activity_category--right_space"></span>
                        <span><i class="fas fa-yen-sign"></i></span>
                        <span>一人あたり </span>
                        <span>{{ eventPrice }}</span>
                        <span>円</span>
                    </p>
                </div>
            </div>
        </router-link>
    </div>
</template>

<script>
    export default {
        props: {
            eventId: {
                type: Number,
            },
            eventImagePath: {
                type: [String, Array]
            },
            eventTime: {
                type: String,
            },
            eventCategory: {
                type: String,
            },
            eventTitle: {
                type: String,
            },
            eventDateTime: {
                type: String,
            },
            eventPrice: {
                type: String,
            },
            eventPlace: {
                type: String,
            },
            eventMinAge: {
                type: String,
            },
        },
        data() {
            return {
                top_recommend_image_01: '/images/top_recommend_image_01.jpg'
            }
        }
    }
</script>

<style lang="scss" scoped>
    .column.is-one-third {
        text-align: left;
        margin-bottom: 8px;
        .activity__container {
            width: 100%;
            color: #7a7a7a;
            font-size: 12px;
            &:hover {
                opacity: 0.7;
            }
            &__images {
                position: relative;
                &--image {
                    border-radius: 8px;
                }
                &--title {
                    position: absolute;
                    bottom: 11%;
                    right: 6%;
                    left: 0px;
                    z-index: 10;
                    text-align: right;
                    font-weight: bold;
                    font-size: 36px;
                    letter-spacing: 5px;
                    color: white;
                }
                .container__category {
                    &--name {
                        color: lightseagreen;
                        font-size: 13px;
                    }
                    &--title {
                        &_detail {
                            margin-bottom: 4px;
                            font-weight: bold;
                            font-size: 18px;
                        }
                    }
                    &--time_place {
                        margin-bottom: 4px;
                    }
                    &--child_age {
                        margin-bottom: 4px;
                    }
                    &--right_space {
                        margin-right: 8px;
                    }
                }
            }
        }
    }
</style>
