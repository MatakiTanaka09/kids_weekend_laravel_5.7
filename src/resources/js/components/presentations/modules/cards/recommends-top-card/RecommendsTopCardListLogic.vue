<template>
    <recommends-top-card-list-render
        :events="events"
    ></recommends-top-card-list-render>
</template>

<script>
    import RecommendsTopCardListRender from "./RecommendsTopCardList";
    import http from "../../../../../services/http";
    export default {
        components: {
            RecommendsTopCardListRender
        },
        data() {
            return {
                events: []
            }
        },
        methods: {
            fetchTopEvent() {
                http.get("/events/search/top", res => {
                    this.events = res.data["data"];
                    console.log(this.events);
                }, null);
            }
        },
        created() {
            this.fetchTopEvent();
        }
    }
</script>

<style lang="scss" scoped></style>
