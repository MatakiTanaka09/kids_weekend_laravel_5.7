<template>
    <div class="column is-one-quarter place__container">
        <a class="place__container__wrapper">
            <div class="place__container__wrapper__buttons">
                <progressive-img class="" src="./images/eventsPage/toyosu.jpg" />
                <div class="place__container__wrapper__buttons--word">
                    {{ placeName }}
                </div>
            </div>
        </a>
    </div>
</template>

<script>
    export default {
        props: {
            placeName: {
                type: [String, Array]
            }
        }
    }
</script>

<style lang="scss" scoped>
    .place__container {
        @media screen and (min-width: 767px) {
            padding: 0px;
            width: 300px;
            margin-right: 25px;
            &__wrapper {
                &__buttons {
                    width: 300px;
                    display: flex;
                    align-items: center;
                    border: 1px solid rgb(114, 113, 113);
                    -webkit-border-radius: 8px;
                    -moz-border-radius: 8px;
                    border-radius: 8px;
                    &--word {
                        width: 100%;
                        text-align: center;
                    }
                }
            }
        }
    }
</style>
