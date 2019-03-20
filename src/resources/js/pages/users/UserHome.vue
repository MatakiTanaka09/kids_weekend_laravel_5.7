<template>
    <main>
        <!--<div class="loading-container" v-if="isLoading">-->
            <!--<fade-loader class="loading"></fade-loader>-->
        <!--</div>-->
        <div class="section">
            <div class="container container-expand">
                <div class="columns edit-wrapper">
                    <div class="column is-one-quarter">
                        <side-menu
                            :is-empty-object="!isEmptyKeysLength(userDetail)"
                            @edit="editToggle"
                            @create="createToggle"
                        ></side-menu>
                    </div>
                    <div class="column">
                        <div class="main-edit">
                            <template v-if="isEmptyKeysLength(userDetail)">
                                <router-view></router-view>
                            </template>
                            <template v-else>
                                <div>
                                    <template v-if="!isEditUser">
                                        <user-profile-card
                                            :first-name="userDetail.first_name"
                                            :last-name="userDetail.last_name"
                                            :first-kana="userDetail.first_kana"
                                            :last-kana="userDetail.last_kana"
                                            :email="userDetail.email"
                                            :tel="userDetail.tel"
                                            :zip-code1="userDetail.zip_code1"
                                            :zip-code2="userDetail.zip_code2"
                                            :state="userDetail.state"
                                            :city="userDetail.city"
                                            :address1="userDetail.address1"
                                            :address2="userDetail.address2"
                                            @editUser="editToggle('user')"
                                        ></user-profile-card>
                                    </template>
                                    <template v-else>
                                        <edit-user
                                            :first-name="userDetail.first_name"
                                            :last-name="userDetail.last_name"
                                            :first-kana="userDetail.first_kana"
                                            :last-kana="userDetail.last_kana"
                                            :email="userDetail.email"
                                            :tel="userDetail.tel"
                                            :zip-code1="userDetail.zip_code1"
                                            :zip-code2="userDetail.zip_code2"
                                            :state="userDetail.state"
                                            :city="userDetail.city"
                                            :address1="userDetail.address1"
                                            :address2="userDetail.address2"
                                            @cancel="editToggle('user')"
                                        ></edit-user>
                                    </template>
                                </div>
                                <div>
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
                                </div>
                            </template>
                            <div class="children-infomation" v-if="userDetail.children === []">>
                                お子さんの情報を入力する
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    import FadeLoader from 'vue-spinner/src/FadeLoader.vue'
    import { mapGetters } from 'vuex'
    import SideMenu from '../../components/modules/menus/user-profile-side-menu/UserProfileSideMenu'
    import UserProfileCard from '../../components/modules/cards/user-profile-card/UserProfileCard'
    import UserChildProfileCard from '../../components/modules/cards/user-profile-card/UserChildProfileCard'
    import EditUser from '../../components/modules/cards/user-edit-card/UserEditCard'
    import EditUserChild from '../../components/modules/cards/user-edit-card/UserChildEditCard'
    import CreateUserCard from '../../components/modules/cards/user-create-card/CreateUserCard'
    import CreateUserChildCard from '../../components/modules/cards/user-create-card/CreateUserChildCard'
    import http from '../../services/http'
    import url from '../../utils/url'
    export default {
        components: {
            FadeLoader,
            SideMenu,
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
                userParent: {},
                userChildren: {},
                childFirstName: '',
                childLastName: '',
                childBirthDay: '',
                childAge: '',
                childSex: '',
            }
        },
        computed: {
            ...mapGetters({
                auth: 'auth/user',
                user: 'user/user'
            }),
        },
        methods: {
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
                this.$router.push("/users/create")
            },
            fetchUserDetail() {
                http.get(url.USER_DETAIL, res => {
                    this.userDetail = res.data["data"][0];
                    Object.assign(this.userDetail, { userDetail: this.userDetail });
                }, err => {
                    console.log("error", err);
                    this.userDetail = {}
                })
            },
            isLoadingToggle() {
                this.isLoading = !this.isLoading
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
            saveUserData() {

            }
        },
        created() {
            this.fetchUserDetail();
        }
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
            width: 100%;
        }
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


