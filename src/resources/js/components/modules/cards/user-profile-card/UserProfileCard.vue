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
                        <div class="field-body">
                            <div class="field">
                                <label class="label">姓</label>
                                <span>{{ firstName }}</span>
                            </div>
                            <div class="field">
                                <label class="label">名</label>
                                <span>{{ lastName }}</span>
                            </div>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <label class="label">姓ふりがな</label>
                                <span>{{ firstKana }}</span>
                            </div>
                            <div class="field">
                                <label class="label">名ふりがな</label>
                                <span>{{ lastKana }}</span>
                            </div>
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
                            {{ sex }}
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <label class="label">郵便番号（上3ケタ）</label>
                                <span>{{ zipCode1 }}</span>
                            </div>
                            <div class="field">
                                <label class="label">郵便番号（下4ケタ）</label>
                                <span>{{ zipCode2 }}</span>
                            </div>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <label class="label">都道府県</label>
                                <span>{{ state }}</span>
                            </div>
                            <div class="field">
                                <label class="label">市町村</label>
                                <span>{{ city }}</span>
                            </div>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <label class="label">住所(丁目・番地・号)</label>
                                <span>{{ address1 }}</span>
                            </div>
                            <div class="field">
                                <label class="label">住所(マンション名・号室)</label>
                                <span>{{ address2 }}</span>
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
            firstName: {
                type: String
            },
            lastName: {
                type: String
            },
            firstKana: {
                type: String
            },
            lastKana: {
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
            zipCode1: {
                type: String
            },
            zipCode2: {
                type: String
            },
            state: {
                type: String
            },
            city: {
                type: String
            },
            address1: {
                type: String
            },
            address2: {
                type: String
            },
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
