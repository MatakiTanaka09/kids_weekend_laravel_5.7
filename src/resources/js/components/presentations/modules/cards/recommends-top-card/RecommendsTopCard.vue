<template>
    <div class="column is-one-third">
        <router-link :to="{ name: 'EventIndividual', params: { id: eventId } }" class="activity__container">
            <div class="activity_container_images">
                <progressive-img class="activity_container_images--image" src="http://placehold.jp/325x300.png" />
                <p class="activity_container_images--title">
                    {{ eventTime }}
                </p>
            </div>
            <div class="activity_category_name" style="color: lightgreen;">
                <p>
                    {{ eventCategory }}
                </p>
            </div>
            <div class="activity_category_title">
                <p class="activity_category_title--detail" style="font-weight: bold; font-size: 16px">
                    {{ eventTitle }}
                </p>
            </div>
            <div class="activity_category_time_price">
                <p>
                    <span>{{ eventDateTime }}</span>
                    <span> / </span>
                    <span>一人あたり </span>
                    <span>{{ eventPrice }}</span>
                    <span>円</span>
                </p>
            </div>
            <div class="activity_category_child_age">
                <p>
                    <span>{{ eventPlace }}</span>
                    <span> / </span>
                    <span>{{ eventMinAge }}</span>
                    <span>歳以上</span>
                </p>
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
        }
    }
</script>

<style lang="scss" scoped>
    .column.is-one-third {
        text-align: left;
        margin-bottom: 16px;

        .activity__container {
            width: 100%;
            color: #7a7a7a;
            font-size: 12px;

            &:hover {
                opacity: 0.7;
            }

            .activity_container_images {
                position: relative;

                &--image {
                    border-radius: 8px;
                }

                &--title {
                    position: absolute;
                    bottom: 48px;
                    right: 24px;
                    left: 0px;
                    z-index: 10;
                    text-align: right;
                    font-weight: bold;
                    font-size: 36px;
                    letter-spacing: 5px;
                    color: white;
                }
            }
            .activity_container_category_name {
                color: lightseagreen;
            }
            .activity_container_title {
                &--detail {
                    font-weight: bold;
                    font-size: 18px;
                }
            }
            .activity_container_time_price {
            }
            .activity_container_child_age {
            }
        }
    }
</style>
