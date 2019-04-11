<template>
    <event-presentation
        :event="data.event"
        :school="data.school"
        :activity="data.activity"
    ></event-presentation>
</template>


<script>
    import EventPresentation from "./EventPresentation";
    import http from "@/services/http";
    export default {
        components: {
            EventPresentation,
        },
        data() {
            return {
                data: {
                    event: {},
                    school: {},
                    activity: {}
                }
            }
        },
        methods: {
            fetchEventData() {
                // event_uuidで検索して、一つのデータを持ってきて、個別データに入れる
                // Vuexで管理する
                http.get("/events/search/eventDetail/", res => {
                    this.data = res.data["data"][0];
                    Object.assign({}, { event : this.data.event });
                    Object.assign({}, { school : this.data.school });
                    Object.assign({}, { activity : this.data.activity });
                }, null);
            }
        },
        created() {
            this.fetchEventData();
        }
        // render()を使いたい
    }
</script>
