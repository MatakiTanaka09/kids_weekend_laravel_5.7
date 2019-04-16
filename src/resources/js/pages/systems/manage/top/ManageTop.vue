<template>
    <div class="top">
        <div class="top__container">
            <side-bar></side-bar>
        </div>
        <div class="main__container">
            <div class="main__container__wrapper">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    import SideBar from '../../../../components/modules/bars/manage-side-bar/ManageSideBar';
    export default {
        components: {
            SideBar
        }
    }
</script>

<style lang="scss">
    .top {
        margin-top: -96px;
        @media screen and (max-width: 767px) {
            margin: 0px 0px;
        }
        .top__container {
            position: absolute;
        }
        .main__container {
            position: relative;
            top: 30px;
            left: 10%;
            &__wrapper {
            }
        }
    }
</style>
