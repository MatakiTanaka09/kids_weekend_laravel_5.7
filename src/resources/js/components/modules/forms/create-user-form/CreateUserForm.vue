<template>
    <div class="section">
        <div class="container container-expand">
            <div class="columns edit-wrapper">
                <div class="column is-one-quarter">
                    <!--<side-menu-->
                        <!--@edit="editToggle"-->
                        <!--@create="createToggle"-->
                    <!--&gt;</side-menu>-->
                </div>
                <div class="column">
                    <div class="main-edit">
                        Hello World!
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!--<router-view></router-view>-->
    </div>
</template>

<script>
    import SideMenu from '../../../../components/modules/menus/user-profile-side-menu/UserProfileSideMenu'
    export default {
        name: "CreateUserForm",
        components: {
            SideMenu
        },
        props: {
        },
        // beforeRouteEnter (to, from, next) {
        //     console.log("beforeRouteEnter");
        // },
    }
</script>

<style lang="scss" scoped>
    .section {
        padding: 128px 24px;
        @media screen and (max-width: 767px){
            margin-top: 63px;
            padding: 36px 24px;
        }
    }
</style>
