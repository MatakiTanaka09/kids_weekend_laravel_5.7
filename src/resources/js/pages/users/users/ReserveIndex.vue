<template>
    <main>
        <div class="loading__container" v-if="isLoading">
            <fade-loader class="loading"></fade-loader>
        </div>
        <div class="section">
            <div class="container container-expand">
                <div class="columns edit-wrapper">
                    <div class="column is-one-quarter">
                        <side-menu
                        ></side-menu>
                    </div>
                    <div class="column">
                        <div class="main-edit">
                            <reserved-card-list
                                :book="book"
                            ></reserved-card-list>
                            <!--:event-id="book[0].uuid"-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

</template>

<script>
    import FadeLoader from 'vue-spinner/src/FadeLoader.vue'
    import SideMenu from '../../../components/modules/menus/user-reserve-index-side-menu/UserReservedSideMenu'
    import ReservedCardList from '../../../components/modules/cards/reserved-card/ReservedCardList'
    import http from '../../../services/http';
    export default {
        name: "ReserveIndex",
        components: {
            FadeLoader,
            SideMenu,
            ReservedCardList
        },
        data() {
            return {
                isLoading: false,
                book: []
            }
        },
        computed: {
        },
        methods: {
            isLoadingToggle() {
                this.isLoading = !this.isLoading
            },
            fetchData: function() {
                this.isLoadingToggle()
                http.get('/book/user', res => {
                    this.book = res.data.book
                    console.log("res.data: ",res.data)
                    console.log(this.book)
                }, err => {
                    console.log(err)
                })
                setTimeout(this.isLoadingToggle, 750)
            }
        },
        created() {
            this.fetchData()
        }
    }
</script>

<style lang="scss" scoped>
    .section {
        padding: 128px 24px;
        @media screen and (max-width: 767px){
            margin-top: 63px;
            padding: 36px 24px;
        }
        .button__save {
            margin-top: 16px;
            width: 100%;
        }
    }
    .loading__container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container-expand {
    }
    .side-menu {
    }
    .side-nav-item {
        padding-bottom: 8px;
    }
    .side-nav-item-title {
        color: black;
    }
    .btn-profile {
        margin-top: 8px;
        width: 100%;
    }
    .main-edit {
    }
</style>
