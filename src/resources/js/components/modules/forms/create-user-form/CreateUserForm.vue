<template>
    <router-view></router-view>
</template>

<script>
    import SideMenu from '../../../../components/modules/menus/user-profile-side-menu/UserProfileSideMenu'
    export default {
        name: "CreateUserForm",
        components: {
            SideMenu,
        },
        props: {
        },
        // beforeRouteEnter (to, from, next) {
        //     console.log("beforeRouteEnter");
        // },
    }
</script>

<style lang="scss" scoped>
</style>
