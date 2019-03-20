<template>
    <div class="side-menu">
        <div class="side-nav">
            <ul>
                <li class="side-nav-item">
                    <div v-if="isEmptyObject">
                        <strong class="side-nav-item-title">プロフィール</strong>
                    </div>
                    <a v-else class="button btn-profile">
                        <strong class="side-nav-item-title" @click="$emit('create')">プロフィールを作成</strong>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        name: "UserProfileSideMenu",
        props: {
            isEmptyObject: {
                type: Boolean,
                default: true
            }
        }
    }
</script>

<style lang="scss" scoped>
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
</style>
