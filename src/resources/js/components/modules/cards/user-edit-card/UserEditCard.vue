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
                            <a class="button is-primary" @click="activeEditUserConfirmModal">更新</a>
                        </div>
                    </div>
                </header>
                <div class="card-content">
                    <div class="content">
                        <div class="field">
                            <label class="label">お名前</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="text" placeholder="田中太郎" v-model="userInfo.full_name">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">ふりがな</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="text" placeholder="たなかたろう" v-model="userInfo.full_kana">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">メールアドレス</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="email" placeholder="example@example.com" v-model="userInfo.email" disabled>
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
                                    <input class="input" type="email" placeholder="123-4567-8901" v-model="userInfo.tel">
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
                        <div class="field">
                            <label class="label">郵便番号(半角英数)</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="text" placeholder="123-4567" v-model="userInfo.zip_code">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">住所</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="text" placeholder="例）東京都" v-model="userInfo.address">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-location-arrow"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="button is-primary button__save">保存する</a>
        </div>
        <edit-user-confirm-modal
            v-if="showEditUserConfirmModal"
            :show-edit-user-confirm-modal="showEditUserConfirmModal"
            @close="activeEditUserConfirmModal"
        ></edit-user-confirm-modal>
    </div>
</template>

<script>
    import EditUserConfirmModal from '../../modals/edit-user-confirm-modal/EditUserConfirmModal';
    export default {
        name: "EditUser",
        components: {
            EditUserConfirmModal
        },
        data() {
            return {
                showEditUserConfirmModal: false
            }
        },
        props: {
            userInfo: {
                type: Object
            },
            // fullName: {
            //     type: String
            // },
            // fullKana: {
            //     type: String
            // },
            // email: {
            //     type: String
            // },
            // tel: {
            //     type: String
            // },
            // zipCode: {
            //     type: String
            // },
            // address: {
            //     type: String
            // },
        },
        methods: {
            getSex(sex) {
                switch(sex) {
                    case "1":
                        return '男の子'
                        break
                    case "2":
                        return '女の子'
                        break
                }
            },
            activeEditUserConfirmModal() {
                this.showEditUserConfirmModal = !this.showEditUserConfirmModal
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
