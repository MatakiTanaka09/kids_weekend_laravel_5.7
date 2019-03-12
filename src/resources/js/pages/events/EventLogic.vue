<template>
    <event-presentation
        :event="data.event"
        :activity="data.activity"
        :school="data.school"
    ></event-presentation>
</template>


<script>
    import EventPresentation from "./EventPresentation";
    import http from "../../services/http";
    export default {
        components: {
            EventPresentation,
        },
        data() {
            return {
                data: {
                    activity: {},
                    event: {},
                    school: {}
                }
            }
        },
        methods: {
            fetchEventData() {
                // event_uuidで検索して、一つのデータを持ってきて、個別データに入れる
                // Vuexで管理する
                const ID = "66482970-38c9-11e9-aa82-a93aabbe9be0";
                http.get("/events/search/eventDetail/", res => {
                    this.data = res.data["data"][0];
                    Object.assign(this.data, { event : this.data.event  });
                    Object.assign(this.data, { activity : this.data.activity  });
                    Object.assign(this.data, { school : this.data.school  });
                }, null);
            }
        },
        created() {
            this.fetchEventData();
        }
        // render()を使いたい
    }
</script>
