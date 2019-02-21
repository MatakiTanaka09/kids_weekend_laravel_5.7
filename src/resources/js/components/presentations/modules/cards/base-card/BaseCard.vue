<template>
    <div class="column" :class="columnType">
        <router-link :to="{ name: 'EventIndividual', params: { id: eventId } }" class="activity__container">
            <div class="activity__container__images">
                <progressive-img class="activity_container_images--image" src="http://placehold.jp/325x300.png" />
                <p class="activity__container__images--title">
                    {{ eventTime }}
                </p>
            </div>
            <div class="activity__category__name" style="color: lightgreen;">
                <p>
                    {{ eventCategory }}
                </p>
            </div>
            <div class="activity__category__title">
                <p class="activity__category__title--detail" style="font-weight: bold; font-size: 16px">
                    {{ eventTitle }}
                </p>
            </div>
            <div class="activity__category__time__price">
                <p>
                    <span><i class="far fa-calendar-alt"></i></span>
                    <span>{{ eventDateTime }}</span>
                    <span> / </span>
                    <span>一人あたり </span>
                    <span>{{ eventPrice }}</span>
                    <span>円</span>
                </p>
            </div>
            <div class="activity__category__child--age">
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
            columnType: {
                type: String,
                default: 'is-one-third'
            },
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
            &__images {
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
            &__category__name {
                color: lightseagreen;
            }
            &__title {
                &--detail {
                    font-weight: bold;
                    font-size: 18px;
                }
            }
            &__time__price {
            }
            &child--age {
            }
        }
    }
</style>
