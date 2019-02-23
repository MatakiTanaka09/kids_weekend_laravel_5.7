<template>
    <sticky-footer
        @book="bookActive"
    ></sticky-footer>
</template>

<script>
    import StickyFooter from '../presentations/common/footer/StickyFooter';
    import { mapActions, mapGetters } from 'vuex';

    export default {
        components: {
            StickyFooter
        },
        data() {
            return {
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

