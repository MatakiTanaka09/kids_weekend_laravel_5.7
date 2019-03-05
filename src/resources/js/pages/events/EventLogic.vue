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
                http.get("/events/search/eventDetail", res => {
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
    }
</script>

<style lang="scss" scoped>
</style>
