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
                    <div class="field">
                        <label class="label">おなまえ</label>
                        <span>{{ child.first_kana }}</span>
                    </div>
                    <div class="field">
                        <label class="label">お誕生日</label>
                        <span>{{ child.birth_day }}</span>
                    </div>
                    <div class="field">
                        <label class="label">性別</label>
                        <span :value="child.sex">{{ getSex(child.sex) }}</span>
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
        },
        methods: {
            getName(firstName, lastName) {
                return lastName + ' ' + firstName
            },
            getSex(sex) {
                switch(sex) {
                    case "1":
                        return '男の子'
                        break
                    case "2":
                        return '女の子'
                        break
                }
            }
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
