<template>
    <main>
        <div class="loading-container" v-if="isLoading">
            <fade-loader class="loading"></fade-loader>
        </div>
        <section v-else class="section">
            <search-bar></search-bar>
            <location-card-list></location-card-list>
            <recommends-events-card-list
                :recommends-title="recommendsZeroYearOldChild"
                :card-display-number="cardDisplayFour"
            ></recommends-events-card-list>
            <category-card-list></category-card-list>
            <recommends-events-card-list
                :recommends-title="recommendsRecently"
                :card-display-number="cardDisplayEight"
            ></recommends-events-card-list>
            <!--<category-card-list></category-card-list>-->
            <!--<recommends-events-card-list-->
                <!--:recommends-title="recommendsZeroYearOldChild"-->
                <!--:card-display-number="cardDisplayFour"-->
            <!--&gt;</recommends-events-card-list>-->
            <recommends-events-card-list
                :recommends-title="recommendsOneYearOldChild"
                :card-display-number="cardDisplayFour"
            ></recommends-events-card-list>
            <recommends-events-card-list
                :recommends-title="recommendsAll"
                :card-display-number="cardDisplayEight"
            ></recommends-events-card-list>
        </section>
    </main>
</template>

<script>
    import FadeLoader from 'vue-spinner/src/FadeLoader.vue';
    import CategoryCardList from '@/components/modules/cards/category-card/CategoryCardList';
    import RecommendsEventsCardList from '@/components/modules/cards/recommends-events-card/RecommendsEventsCardList';
    import SearchBar from '@/components/modules/bars/search-bar/SearchBar';
    import LocationCardList from '@/components/modules/cards/location-card/LocationCardList';
    export default {
        components: {
            FadeLoader,
            CategoryCardList,
            RecommendsEventsCardList,
            SearchBar,
            LocationCardList
        },
        data() {
            return {
                isLoading: false,
                recommendsZeroYearOldChild: "0歳に人気",
                recommendsOneYearOldChild: "1歳に人気",
                recommendsAll: "すべてみる",
                recommendsRecently: "今日・明日",
                cardDisplayFour: 4,
                cardDisplayEight: 8,
                cardDisplayType: 'is-one-third'
            }
        }
    }
</script>

<style lang="scss" scoped>
    .section {
        margin: 0px 96px;
        @media screen and (max-width: 768px) {
            margin: 63px 0px 0px;
            padding: 24px;
        }
        @media screen and (min-width: 1024px) {
            max-width: 980px;
            margin: 0 auto;
        }
    }
</style>
