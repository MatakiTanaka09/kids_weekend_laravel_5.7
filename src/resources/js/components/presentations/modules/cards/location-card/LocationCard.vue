<template>
    <div class="column is-one-quarter place__container">
        <a class="place__container__wrapper">
            <div class="place__container__wrapper__buttons">
                <progressive-img class="" src="./images/eventsPage/toyosu.jpg" />
                <div class="place__container__wrapper__buttons--word">
                    {{ locationName }}
                </div>
            </div>
        </a>
    </div>
</template>

<script>
    export default {
        props: {
            locationName: {
                type: [String, Array]
            }
        }
    }
</script>

<style lang="scss" scoped>
    @import "../../../../../../sass/_variables.scss";
    .place__container {
        width: 150px;
        margin-right: 8px;
        @media screen and (min-width: 767px) {
            width: 300px;
            margin-right: 25px;
        }
        &__wrapper {
            &__buttons {

                display: flex;
                align-items: center;
                width: 150px;
                border: 1px solid rgb(114, 113, 113);
                -webkit-border-radius: 8px;
                -moz-border-radius: 8px;
                border-radius: 8px;
                @media screen and (min-width: 767px) {
                    width: 300px;
                }
                &--word {
                    width: 100%;
                    text-align: center;
                    font-size: 10px;
                    color: $darkGray;
                    @media screen and (min-width: 767px) {
                        font-size: 16px;
                    }
                }
            }
        }
    }
</style>
