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
                            <a class="button is-danger" @click="$emit('cancel')">キャンセル</a>
                        </div>
                        <div class="card__header__buttons--button">
                            <a class="button is-primary">更新</a>
                        </div>
                    </div>
                </header>
                <div class="card-content">
                    <div class="content">
                        <div class="field-body">
                            <div class="field">
                                <label class="label">姓</label>
                                <div class="control has-icons-left">
                                    <div class="display__edit">
                                        <input class="input" type="text" placeholder="田中" :value="firstName">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">名</label>
                                <div class="control has-icons-left">
                                    <div class="display__edit">
                                        <input class="input" type="text" placeholder="太郎" :value="lastName">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <label class="label">姓ふりがな</label>
                                <div class="control has-icons-left">
                                    <div class="display__edit">
                                        <input class="input" type="text" placeholder="たなか" :value="firstKana">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">名ふりがな</label>
                                <div class="control has-icons-left">
                                    <div class="display__edit">
                                        <input class="input" type="text" placeholder="たろう" :value="lastKana">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-user"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">メールアドレス</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="email" placeholder="example@example.com" :value="email">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">電話番号(半角英数)</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="email" placeholder="123-4567-8901" :value="tel">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-phone"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">性別</label>
                            <div class="control">
                                <div class="select">
                                    <select>
                                        <option>性別</option>
                                        <option>男</option>
                                        <option>女</option>
                                        <option>その他</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <label class="label">郵便番号（上3ケタ）</label>
                                <div class="control has-icons-left">
                                    <div class="display__edit">
                                        <input class="input" type="text" placeholder="123" :value="zipCode1">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">郵便番号（下4ケタ）</label>
                                <div class="control has-icons-left">
                                    <div class="display__edit">
                                        <input class="input" type="text" placeholder="4567" :value="zipCode2">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <label class="label">都道府県</label>
                                <div class="control has-icons-left">
                                    <div class="display__edit">
                                        <input class="input" type="text" placeholder="例）東京都" :value="state">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-location-arrow"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">市町村</label>
                                <div class="control has-icons-left">
                                    <div class="display__edit">
                                        <input class="input" type="text" placeholder="例）中央区" :value="city">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-location-arrow"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="field-body">
                            <div class="field">
                                <label class="label">住所(丁目・番地・号)</label>
                                <div class="control has-icons-left">
                                    <div class="display__edit">
                                        <input class="input" type="text" placeholder="例）月島１−１−１" :value="address1">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-location-arrow"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">住所(マンション名・号室)</label>
                                <div class="control has-icons-left">
                                    <div class="display__edit">
                                        <input class="input" type="text" placeholder="例）ガーデンプレイス101号室" :value="address2">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-location-arrow"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="button is-primary button__save">保存する</a>
        </div>
    </div>
</template>

<script>
    export default {
        name: "EditUser",
        data() {
            return {
            }
        },
        props: {
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
        margin-bottom: 8px;
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
