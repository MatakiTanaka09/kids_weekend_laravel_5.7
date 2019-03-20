<template>
    <sticky-footer
        @book="bookActive"
        :event-price="eventPrice"
    ></sticky-footer>
</template>

<script>
    import StickyFooter from './StickyFooter';
    import { mapActions, mapGetters } from 'vuex';

    export default {
        components: {
            StickyFooter
        },
        data() {
            return {
            }
        },
        props: {
            eventPrice: {
                type: Number
            }
        },
        methods: {
            bookActive() {
                this.$emit('bookActive');
            }
        },
        // computed: {
        //     ...mapGetters()
        // },
        // methods: {
        //     ...mapActions()
        // },
    }
</script>

