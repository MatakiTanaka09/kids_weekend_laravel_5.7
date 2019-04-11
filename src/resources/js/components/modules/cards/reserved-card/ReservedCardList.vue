<template>
    <div class="columns is-multiline">
        <reserved-card
            v-for="(bookDetail, index) in book" :key="index"
            :event-id="bookDetail.uuid"
            :event-time="'10:00'"
            :event-title="bookDetail.activity.name"
            :event-date-time="'4/13'"
            :event-price="bookDetail.price"
            :event-place="bookDetail.event.address1"
        ></reserved-card>
    </div>
</template>

<script>
    import ReservedCard from './ReservedCard';
    export default {
        name: "ReservedCardList",
        components: {
            ReservedCard
        },
        props: {
            book: {
                type: Array,
                default: () => []
            }
        }
    }
</script>

<style lang="scss" scoped>
    .mobile {
        @media screen and (max-width: 768px) {
            display: none;
        }
    }
    .tablet {
        @media screen and (min-width: 768px) {
            display: none;
        }
    }
</style>
