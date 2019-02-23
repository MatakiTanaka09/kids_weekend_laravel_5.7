<template>
    <div class="column is-half">
        <router-link :to="{ name: 'EventIndividual', params: { id: categoryId } }" class="category__container">
            <div class="category__container__images">
                <progressive-img class="category__container__images--image" :src="categoryImagePath" />
                <p class="content_all_center category__container__image--title">
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
    .column.is-half {
        text-align: left;
        padding-bottom: 0px;
        @media screen and (max-width: 767px) {
        }
        .category__container {
            width: 100%;
            color: #7a7a7a;
            font-size: 40px;
            font-weight: bold;
            &:hover {
                opacity: 0.7;
            }
            &__images {
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
