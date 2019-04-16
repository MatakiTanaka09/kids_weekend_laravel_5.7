<template>
    <div class="searchbar__container">
        <div class="searchbar__container__wrapper">
            <div class="searchbar__container__wrapper--buttons">
                <base-button
                    v-for="(n, index) in 5" :key="n"
                    class="is-hidden-mobile"
                    :button-name="buttonName[index]"
                ></base-button>
            </div>
        </div>
    </div>
</template>

<script>
    import BaseButton from '../../buttons/base-button/BaseButton';

    export default {
        components: {
            BaseButton
        },
        data() {
            return {
                swiperOption: {
                    slidesPerView: 2.5,
                    spaceBetween: 0,
                },
                buttonName: [
                    "カレンダー",
                    "今日・明日",
                    "場所",
                    "こどもの年齢",
                    "カテゴリー"
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import "../../../../../sass/variables";
    .searchbar__container {
        margin: 32px 0;
        width: 100%;
        @media screen and (max-width: 767px){
            margin: 0;
        }
        &__wrapper {
            padding-bottom: 8px;
            border-bottom: 0.5px solid $moreLightGray;
            &--buttons {
                display: flex;
                align-items: center;
            }
        }
    }
</style>
