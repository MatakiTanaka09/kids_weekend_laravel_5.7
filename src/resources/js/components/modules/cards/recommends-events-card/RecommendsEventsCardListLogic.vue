<template>
    <recommends-events-card-list-render
        :events="events"
    ></recommends-events-card-list-render>
</template>

<script>
    import RecommendsEventsCardListRender from "./RecommendsEventsCardList";
    import http from "@/services/http";
    export default {
        components: {
            RecommendsEventsCardListRender
        },
        data() {
            return {
                events: []
            }
        },
        methods: {
            fetchTopEvent() {
                http.get("/events/search/eventList", res => {
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
