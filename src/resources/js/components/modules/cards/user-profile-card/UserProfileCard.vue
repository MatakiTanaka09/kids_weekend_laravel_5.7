<template>
    <div>
        <div class="profile-required">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        必須項目
                    </p>
                    <div class="card__header__buttons">
                        <div class="card__header__buttons--button">
                            <a class="button" @click="$emit('editUser')">編集</a>
                        </div>
                    </div>
                </header>
                <div class="card-content">
                    <div class="content">
                        <div class="field">
                            <label class="label">お名前</label>
                            <span>{{ fullName }}</span>
                        </div>
                        <div class="field">
                            <label class="label">ふりがな</label>
                            <span>{{ fullKana }}</span>
                        </div>
                        <div class="field">
                            <label class="label">メールアドレス</label>
                            <span>{{ email }}</span>
                        </div>
                        <div class="field">
                            <label class="label">電話番号(半角英数)</label>
                            <span>{{ tel }}</span>
                        </div>
                        <div class="field">
                            <label class="label">性別</label>
                            {{ getSex(sex) }}
                        </div>
                        <div class="field">
                            <label class="label">郵便番号</label>
                            <span>{{ zipCode }}</span>
                        </div>
                        <div class="field">
                            <label class="label">住所</label>
                            <span>{{ address }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "UserProfile",
        data() {
            return {
            }
        },
        props: {
            isEditUser: {
                type: Boolean,
                default: false
            },
            fullName: {
                type: String
            },
            fullKana: {
                type: String
            },
            email: {
                type: String
            },
            tel: {
                type: String
            },
            sex: {
                type: String
            },
            zipCode: {
                type: String
            },
            address: {
                type: String
            },
        },
        methods: {
            getSex(sex) {
                switch(sex) {
                    case "1":
                        return '男性'
                        break
                    case "2":
                        return '女性'
                        break
                }
            }
        }
    }
</script>

<style lang="scss" scoped>
    .profile-required {
        margin-bottom: 40px;
        .button__save {
            width: 100%;
        }
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
