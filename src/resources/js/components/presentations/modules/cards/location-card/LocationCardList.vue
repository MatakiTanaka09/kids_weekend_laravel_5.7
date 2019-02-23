<template>
    <div class="columns is-multiline">
        <place-card
            v-for="(n, index) in 2" :key="n"
            :place-name="placeName[index]"
        ></place-card>
    </div>
</template>

<script>
    import PlaceCard from './PlaceCard';

    export default {
        components: {
            PlaceCard
        },
        data() {
            return {
                placeName: [
                    '豊洲',
                    '二子玉川'
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>
    .columns.is-multiline {
        margin: 0px;
    }
</style>
