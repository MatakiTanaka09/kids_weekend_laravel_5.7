<template>
    <recommends-events-card-list-render
        :events="events"
        :recommends-title="'4月23日のアクティビティ'"
    ></recommends-events-card-list-render>
</template>

<script>
    import RecommendsEventsCardListRender from "./SearchEventsCardList";
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
                const payload = {
                    started_at: '2019-04-23'
                }
                http.post("events/search/calendar", payload, res => {
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
