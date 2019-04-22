<template>
    <div class="searchbar__container">
        <div class="searchbar__container__wrapper">
            <div class="searchbar__container__wrapper--buttons">
                <calendar-button></calendar-button>
                <base-button
                    :button-name="'カテゴリー'"
                ></base-button>
                <base-button
                    :button-name="'年齢'"
                ></base-button>
            </div>
        </div>
    </div>
</template>

<script>
    import BaseButton from '../../buttons/base-button/BaseButton';
    import CalendarButton from '../../dropdowns/SearchCalendarDropdown/SearchCalendarDropdown';
    export default {
        components: {
            BaseButton,
            CalendarButton,
        },
        data() {
            return {
                swiperOption: {
                    slidesPerView: 2.5,
                    spaceBetween: 0,
                },
                buttonName: [
                    "今日・明日",
                    "場所",
                    "こどもの年齢",
                    "カテゴリー"
                ],
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
