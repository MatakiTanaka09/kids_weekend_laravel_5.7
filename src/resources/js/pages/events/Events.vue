<template>
    <main>
        <div class="loading-container" v-if="isLoading">
            <fade-loader class="loading"></fade-loader>
        </div>
        <section v-else class="section">
            <!--SearchBar-->
            <search-bar></search-bar>
            <!--Place-->
            <location-card-list></location-card-list>

            <recommends-events-card-list
                :recommends-title="recommendsRecently"
                :card-display-number="cardDisplayEight"
            ></recommends-events-card-list>
            <category-card-list></category-card-list>
            <recommends-events-card-list
                :recommends-title="recommendsZeroYearOldChild"
                :card-display-number="cardDisplayFour"
            ></recommends-events-card-list>
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
    import CategoryCardList from '../../components/presentations/modules/cards/category-card/CategoryCardList';
    import RecommendsEventsCardList from '../../components/presentations/modules/cards/recommends-events-card/RecommendsEventsCardList';
    import SearchBar from '../../components/presentations/modules/bars/search-bar/SearchBar';
    import LocationCardList from '../../components/presentations/modules/cards/location-card/LocationCardList';

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
                cardDisplayType: 'is-one-third',
            }
        },
    }
</script>

<style lang="scss" scoped>
    .section {
        margin: 0px 96px;
        @media screen and (max-width: 767px) {
            margin: 63px 0px 0px;
            padding: 24px;
        }
    }
</style>
