<template>
    <div class="children-infomation">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    お子さんの情報
                </p>
                <div class="card__header__buttons">
                    <div class="card__header__buttons--button">
                        <a class="button" @click="$emit('editUserChild')">編集</a>
                    </div>
                </div>
            </header>
            <div class="card-content" v-for="(child,index) in children" :key="index">
                <div class="content">
                    <div class="field-body">
                        <div class="field">
                            <label class="label">姓</label>
                            <span>{{ child.first_name }}</span>
                        </div>
                        <div class="field">
                            <label class="label">名</label>
                            <span>{{ child.last_name  }}</span>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">お誕生日</label>
                        <span>{{ child.birth_day }}</span>
                    </div>
                    <div class="field">
                        <label class="label">年齢</label>
                        <span>{{ child.age }}</span>
                    </div>
                    <div class="field">
                        <label class="label">性別</label>
                        <div class="control">
                            <div class="select">
                                <select>
                                    <option>性別</option>
                                    <option>男の子</option>
                                    <option>女の子</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "UserChildProfileCard",
        data() {
            return {}
        },
        props: {
            isEditUserChild: {
                type: Boolean,
                default: false
            },
            children: {
                type: Array,
                default: () => []
            },
        }
    }
</script>

<style lang="scss" scoped>
    .profile-required {
        margin-bottom: 40px;
    }
    .children-infomation {
        margin-bottom: 40px;
    }
    a:hover {
        opacity: 0.6;
    }
    .content p:not(:last-child), .content {
        margin-bottom: 8px;
    }
    .field-body {
        margin-bottom: 12px;
    }
    .card {
        .card-header {
            display: flex;
            align-items: center;

            .card__header__buttons {
                display: flex;
                margin-right: 8px;
                &--button {
                    margin-right: 8px;
                }
            }
        }
    }
</style>
