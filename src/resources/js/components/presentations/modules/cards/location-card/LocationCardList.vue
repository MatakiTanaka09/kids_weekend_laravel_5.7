<template>
    <div class="columns is-multiline">
        <location-card
            v-for="(n, index) in 2" :key="n"
            :location-name="locationName[index]"
        ></location-card>
    </div>
</template>

<script>
    import LocationCard from './LocationCard';

    export default {
        components: {
            LocationCard
        },
        data() {
            return {
                locationName: [
                    '豊洲',
                    '二子玉川'
                ],
                swiperOption: {
                    slidesPerView: 2.2,
                    spaceBetween: 8,
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    .columns.is-multiline {
        margin: 0px;
        display: flex;
        align-items: center;
        @media screen and (max-width: 767px) {
            :first-child {
                padding-left: 0px;
            }
        }
    }
</style>
