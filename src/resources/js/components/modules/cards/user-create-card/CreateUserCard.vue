<template>
    <div class="profile-required" >
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    必須項目
                </p>
            </header>
            <div class="card-content">
                <div class="content">
                    <div class="field-body">
                        <div class="field">
                            <label class="label">姓</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="text" placeholder="田中" v-model="lastName">
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
                                    <input class="input" type="text" placeholder="太郎" v-model="firstName">
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
                                    <input class="input" type="text" placeholder="たなか" v-model="lastNameKana">
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
                                    <input class="input" type="text" placeholder="たろう" v-model="firstNameKana">
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
                                <input class="input" type="email" placeholder="" :value="email" disabled>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">電話番号</label>
                        <div class="control has-icons-left">
                            <div class="display__edit">
                                <input class="input" type="tel" placeholder="123-4567-8901" v-model="tel">
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
                                <select v-model="sex">
                                    <option selected>性別</option>
                                    <option value="1">男</option>
                                    <option value="2">女</option>
                                    <option value="9">その他</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="field-body">
                        <div class="field">
                            <label class="label">郵便番号（上3ケタ）</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="text" placeholder="123" v-model="zipCode1">
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
                                    <input class="input" type="text" placeholder="4567" v-model="zipCode2">
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
                                    <input class="input" type="text" placeholder="例）東京都" v-model="state">
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
                                    <input class="input" type="text" placeholder="例）中央区" v-model="city">
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
                                    <input class="input" type="text" placeholder="例）月島１−１−１" v-model="address1">
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
                                    <input class="input" type="text" placeholder="例）ガーデンプレイス101号室" v-model="address2">
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
        <router-link to="/users/create/userChild" class="button is-primary button__save" @click="">保存して、次へ</router-link>
    </div>
</template>

<script>
    export default {
        name: "CreateUser",
        data() {
            return {
                firstName: '',
                lastName: '',
                firstNameKana: '',
                lastNameKana: '',
                tel: '',
                sex: '',
                zipCode1: '',
                zipCode2: '',
                state: '',
                city: '',
                address1: '',
                address2: '',
            }
        },
        props: {
            email: String
        },
        methods: {
            setLocalStrage() {
                const userParentData = {
                    first_name: this.firstName,
                    last_name : this.lastName,
                    first_kana: this.firstNameKana,
                    last_kana : this.lastNameKana,
                    tel       : this.tel,
                    sex       : this.sex,
                    zip_code1 : this.zipCode1,
                    zip_code2 : this.zipCode2,
                    state     : this.state,
                    city      : this.city,
                    address1  : this.address1,
                    address2  : this.address2
                };
                localStorage.setItem("userParent", JSON.stringify(userParentData));
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
