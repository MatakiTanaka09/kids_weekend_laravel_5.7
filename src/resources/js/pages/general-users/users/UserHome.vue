<template>
    <main>
        <div class="loading__container" v-if="isLoading">
            <fade-loader class="loading"></fade-loader>
        </div>
        <div class="section">
            <div class="container container-expand">
                <div class="columns edit-wrapper">
                    <div class="column is-one-quarter">
                        <side-menu
                            :is-empty-object="!isEmptyKeysLength(userDetail)"
                            @edit="editToggle"
                        ></side-menu>
                    </div>
                    <div class="column">
                        <div class="main-edit">
                            <template v-if="isEmptyKeysLength(userDetail)">
                                <create-user-card
                                    :user-info="userParent"
                                    :email="auth.email"
                                ></create-user-card>
                                <a class="button is-primary button__save" @click="activeShowCreateUserModalToggle">保存する（確認画面へ）</a>
                            </template>
                            <template v-else>
                                <template v-if="!isEditUser">
                                    <user-profile-card
                                        :full-name="userDetail.full_name"
                                        :full-kana="userDetail.full_kana"
                                        :email="userDetail.email"
                                        :tel="userDetail.tel"
                                        :sex="userDetail.sex"
                                        :zip-code="userDetail.zip_code"
                                        :address="userDetail.address"
                                        @editUser="editToggle('user')"
                                    ></user-profile-card>
                                </template>
                                <template v-else>
                                    <edit-user
                                        :user-info="userDetail"
                                        @cancel="editToggle('user')"
                                    ></edit-user>
                                </template>
                                <template v-if="isEmptyKeysLength(userDetail.children)">
                                    <create-user-child-card
                                        :user-child="userChildren"
                                        @addUserChild="addUserChild"
                                        @removeUserChild="removeUserChild"
                                    ></create-user-child-card>
                                    <a class="button is-primary button__save" @click="activeShowCreateUserChildModalToggle">保存する（確認画面へ）</a>
                                </template>
                                <template v-else>
                                    <template v-if="!isEditUserChild">
                                        <user-child-profile-card
                                            :children="userDetail.children"
                                            @editUserChild="editToggle('userChild')"
                                        ></user-child-profile-card>
                                    </template>
                                    <template v-else>
                                        <edit-user-child
                                            :children="userDetail.children"
                                            @cancel="editToggle('userChild')"
                                        ></edit-user-child>
                                    </template>
                                </template>
                            </template>
                            <div class="children-infomation" v-if="userDetail.children === []">>
                                お子さんの情報を入力する
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <create-user-confirm-modal
            v-if="showCreateUserConfirmModal"
            :show-create-user-confirm-modal="showCreateUserConfirmModal"
            :user-info="userParent"
            :email="auth.email"
            @close="activeShowCreateUserModalToggle"
            @saveUserInfo="saveUserInfo"
        ></create-user-confirm-modal>
        <create-user-child-confirm-modal
            v-if="showCreateUserChildConfirmModal"
            :show-modal="showCreateUserChildConfirmModal"
            :user-child-info="userChildren"
            @close="activeShowCreateUserChildModalToggle"
            @saveUserChildInfo="saveUserChildInfo"
        ></create-user-child-confirm-modal>
        <create-user-response-ok-modal
            v-if="showCreateUserResponseOkModal"
            :show-modal="showCreateUserResponseOkModal"
            @close="activeShowCreateUserResponseOkModalToggle"
        ></create-user-response-ok-modal>
    </main>
</template>

<script>
    import FadeLoader from 'vue-spinner/src/FadeLoader.vue'
    import { mapGetters, mapActions } from 'vuex'
    import SideMenu from '../../../components/modules/menus/user-profile-side-menu/UserProfileSideMenu'
    import CreateUserChildConfirmModal from '../../../components/modules/modals/create-user-confirm-modal/CreateUserChildConfirmModal'
    import CreateUserConfirmModal from '../../../components/modules/modals/create-user-confirm-modal/CreateUserConfirmModal'
    import CreateUserResponseOkModal from '../../../components/modules/modals/create-user-confirm-modal/CreateUserResponseOkModal'
    import UserProfileCard from '../../../components/modules/cards/user-profile-card/UserProfileCard'
    import UserChildProfileCard from '../../../components/modules/cards/user-profile-card/UserChildProfileCard'
    import EditUser from '../../../components/modules/cards/user-edit-card/UserEditCard'
    import EditUserChild from '../../../components/modules/cards/user-edit-card/UserChildEditCard'
    import CreateUserCard from '../../../components/modules/cards/user-create-card/CreateUserCard'
    import CreateUserChildCard from '../../../components/modules/cards/user-create-card/CreateUserChildCard'
    import http from '../../../services/http'
    import url from '../../../utils/url'
    export default {
        components: {
            FadeLoader,
            SideMenu,
            CreateUserConfirmModal,
            CreateUserChildConfirmModal,
            CreateUserResponseOkModal,
            UserProfileCard,
            UserChildProfileCard,
            EditUser,
            EditUserChild,
            CreateUserCard,
            CreateUserChildCard
        },
        data() {
            return {
                userDetail: {},
                isEditUser: false,
                isEditUserChild: false,
                isCreate: false,
                isLoading: false,
                showCreateUserConfirmModal: false,
                showCreateUserChildConfirmModal: false,
                showCreateUserResponseOkModal: false,
                userParent: {
                    fullName: '',
                    fullKana: '',
                    lastKana: '',
                    tel: '',
                    zipCode: '',
                    address: ''
                },
                userChildren: [
                    {
                        firstName: '',
                        lastName: '',
                        firstKana: '',
                        lastKana: '',
                        birthDay: '',
                        age: '',
                        sex: ''
                    },
                ],
                userChildrenInfo: []
            }
        },
        computed: {
            ...mapGetters({
                auth: 'auth/user',
                user: 'user/user'
            }),
        },
        methods: {
            ...mapActions({
                storeUserInfo: 'user/storeUserInfo',
                storeUserChildInfo: 'user/storeUserChildInfo'
            }),
            editToggle(name) {
                if(name === 'user') {
                    this.isEditUser = !this.isEditUser;
                }
                if(name === 'userChild') {
                    this.isEditUserChild = !this.isEditUserChild;
                }
            },
            createToggle() {
                this.isCreate = !this.isCreate;
            },
            fetchUserDetail() {
                this.isLoadingToggle()
                http.get(url.USER_DETAIL, res => {
                    this.userDetail = res.data["data"][0];
                    Object.assign({}, { userDetail: this.userDetail });
                    setTimeout(this.isLoadingToggle, 750);
                }, err => {
                    console.log("error", err);
                    this.userDetail = {}
                })
            },
            isLoadingToggle() {
                this.isLoading = !this.isLoading
            },
            activeShowCreateUserModalToggle() {
                this.showCreateUserConfirmModal = !this.showCreateUserConfirmModal
            },
            activeShowCreateUserChildModalToggle() {
                this.showCreateUserChildConfirmModal = !this.showCreateUserChildConfirmModal
            },
            activeShowCreateUserResponseOkModalToggle() {
                this.showCreateUserResponseOkModal = !this.showCreateUserResponseOkModal
            },
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
                const userChildrenData = {
                    firstName : this.childFirstName,
                    lastName  : this.childLastName,
                    birth_day : this.childBirthDay,
                    sex       : this.childSex,
                    age       : this.childAge,
                };
                localStorage.setItem("userParent", JSON.stringify(userParentData));
                localStorage.setItem("userChildren", JSON.stringify(userChildrenData));
                http.post('/users', userParentData, res => {
                    console.log(res);
                }, null)
            },
            isEmptyKeysLength(obj){
                return !Object.keys(obj).length;
            },
            async saveUserInfo() {
                const userParentData = {
                    first_name: this.userParent.firstName,
                    last_name : this.userParent.lastName,
                    first_kana: this.userParent.firstKana,
                    last_kana : this.userParent.lastKana,
                    tel       : this.userParent.tel,
                    sex       : this.userParent.sex,
                    zip_code1 : this.userParent.zipCode1,
                    zip_code2 : this.userParent.zipCode2,
                    state     : this.userParent.state,
                    city      : this.userParent.city,
                    address1  : this.userParent.address1,
                    address2  : this.userParent.address2
                };
                await this.storeUserInfo(userParentData);
                this.activeShowCreateUserModalToggle()
                this.activeShowCreateUserResponseOkModalToggle()
            },
            async saveUserChildInfo() {
                console.log("before");
                const userChild = []
                this.userChildren.forEach(el => {
                    const userChildData = {
                        last_name : el.firstName,
                        first_name: el.lastName,
                        last_kana : el.lastKana,
                        first_kana: el.firstKana,
                        birth_day : el.birthDay,
                        sex       : el.sex
                    }
                    userChild.push(userChildData)
                })
                // console.log(userChild)
                const data = [
                    {
                        last_name : "a",
                        first_name: "a",
                        last_kana : "a",
                        first_kana: "a",
                        birth_day : "a",
                        sex       : "a"
                    },
                    {
                        last_name : "a",
                        first_name: "a",
                        last_kana : "a",
                        first_kana: "a",
                        birth_day : "a",
                        sex       : "a"
                    },
                ]
                console.log(data)
                console.log(userChild);
                // console.log(JSON.stringify(this.userChildrenInfo));
                await this.storeUserChildInfo(userChild);
                // await this.storeUserChildInfo(JSON.stringify(this.userChildrenInfo));
                console.log("after");
                // this.$router.go(0);
            },
            addUserChild() {
                const userChild = {
                    firstName: '',
                    lastName: '',
                    birthDay: '',
                    age: '',
                    sex: ''
                }
                this.userChildren.push(userChild)
            },
            removeUserChild() {
                this.userChildren.pop()
            }
        },
        created() {
            this.fetchUserDetail();
        },
    }

</script>

<style lang="scss" scoped>
    .section {
        padding: 128px 24px;
        @media screen and (max-width: 767px){
            margin-top: 63px;
            padding: 36px 24px;
        }
        .button__save {
            margin-top: 16px;
            width: 100%;
        }
    }
    .loading__container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container-expand {
    }
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
    .main-edit {
    }
</style>


