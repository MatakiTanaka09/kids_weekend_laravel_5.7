<template>
    <div class="column is-half category__card__container">
        <router-link :to="{ name: 'EventIndividual', params: { id: categoryId } }" class="category__card__container__wrapper">
            <div class="category__container__images">
                <progressive-img class="category__container__images--image" :src="categoryImagePath" />
                <p class="content_all_center category__container__images--title">
                    {{ categoryName }}
                </p>
            </div>
        </router-link>
    </div>
</template>

<script>
    export default {
        props: {
            categoryId: {
                type: Number,
            },
            categoryImagePath: {
                type: [String, Array]
            },
            categoryName: {
                type: [String, Array]
            }
        },
        data() {
            return {
            }
        }
    }
</script>

<style lang="scss" scoped>
    .category__card__container {
        text-align: left;
        padding-bottom: 0px;
        &__wrapper {
            width: 100%;
            color: #7a7a7a;
            font-size: 40px;
            font-weight: bold;
            @media screen and (max-width: 767px) {
                font-size: 24px;
            }
            &:hover {
                opacity: 0.7;
            }
            .category__container__images {
                position: relative;
                &--image {
                    border-radius: 8px;
                    opacity: 0.8;
                }
                .content_all_center {
                    position: absolute;
                    text-align: center;
                    top: 50%;
                    left: 50%;
                    -ms-transform: translate(-50%,-50%);
                    -webkit-transform: translate(-50%,-50%);
                    transform: translate(-50%,-50%);
                    margin:0;
                    padding:0;
                    z-index: 100;
                    color: white;
                }
            }
        }
    }
</style>
