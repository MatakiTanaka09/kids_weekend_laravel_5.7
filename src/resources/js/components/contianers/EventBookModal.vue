<template>
    <event-book-modal></event-book-modal>
</template>

<script>
    import EventBookModal from '../modules/modals/event-book-modal';
    import { mapActions, mapGetters } from 'vuex';
    export default {
        components: {
            EventBookModal
        },
        data() {
            return {
            }
        },
        props: {
            showBookModal: Boolean,
        },
        methods: {
        },
        // computed: {
        //     ...mapGetters()
        // },
        // methods: {
        //     ...mapActions()
        // },
    }
</script>

