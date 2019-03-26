<template>
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <router-link to="/" class="navbar-item">
                    <span class="navbar__item--logo">kidsweekend</span>
                </router-link>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarHomeHeader"  @click="dropdownToggle">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navbarHomeHeader" class="navbar-menu" :class="{'is-active': dropdownActive}">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons" v-if="!isLoggedIn">
                            <router-link to="register" class="button buttons__btn--register">
                                <strong>登録する</strong>
                            </router-link>
                            <router-link to="/login" class="button buttons__btn--login">
                                ログインする
                            </router-link>
                        </div>
                        <div class="after__login__buttons" v-else>
                            <div class="after__login__buttons--button">
                                <router-link to="/users/me/reserve" class="">
                                    <span>予約</span>
                                </router-link>
                            </div>
                            <!--<div class="after__login__buttons&#45;&#45;button">-->
                                <!--<router-link to="/" class="">-->
                                    <!--<span>プロフィール</span>-->
                                <!--</router-link>-->
                            <!--</div>-->
                            <div class="after__login__buttons--button">
                                <a class="" @click="showAuthLogoutModalToggle">
                                    <span>サインアウト</span>
                                </a>
                            </div>
                            <div class="after__login__buttons--button">
                                <template v-if="!user.uuid">
                                    <router-link to="/users/me" class="">
                                        <span class="letter--modified">マイアカウント</span>
                                    </router-link>
                                </template>
                                <template v-else>
                                    <router-link :to="{ name : 'UsersInfo' }" class="">
                                        <span class="letter--modified">マイアカウント</span>
                                    </router-link>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <auth-logout-modal
                v-if="authLogoutModalActive"
                :authLogoutModalActive="authLogoutModalActive"
                @logout="handleLogout"
                @close="showAuthLogoutModalToggle"
            ></auth-logout-modal>
        </nav>
    </header>
</template>

<script>
    import AuthLogoutModal from "../../modules/modals/auth-logout-modal/AuthLogoutModal";
    import { mapGetters, mapActions } from "vuex";
    export default {
        components: {
            AuthLogoutModal
        },
        data() {
            return {
                dropdownActive: false,
                authLogoutModalActive: false,
            }
        },
        computed: {
            ...mapGetters({
                isLoggedIn: 'auth/isLoggedIn',
                user: 'user/user'
            })
        },
        methods: {
            showAuthLogoutModalToggle() {
                this.authLogoutModalActive = !this.authLogoutModalActive
            },
            dropdownToggle() {
                this.dropdownActive = !this.dropdownActive
            },
            ...mapActions({
                logout: "auth/logout"
            }),
            async handleLogout() {
                await this.showAuthLogoutModalToggle();
                await this.logout();
                this.$router.push("/");
                this.$router.go(0);
            }
        },
    }
</script>

<style lang="scss" scoped>
    @import '../../../../sass/variables';
    header {
        box-shadow: 0px 3px 25px rgba(77,77,99,0.1);
        font-weight: bold;
        position: fixed;
        z-index: 1000;
        width: 100%;
        height: 63px;
        background-color: white;
        nav.navbar {
            max-width: 1088px;
            margin: 0 auto;
            .navbar__item--logo {
                font-size: 27px;
                letter-spacing: 5px;
                color: #03A1EB;
            }
            .buttons {
                font-size: 14px;
                .buttons__btn--login {
                    border: 1px solid #03A1EB;
                    background-color: #03A1EB;
                    color: white;
                    &:hover {
                        opacity: 0.7;
                    }
                }
            }
            .after__login__buttons {
                display: flex;
                align-items: center;
                font-size: 14px;
                &--button {
                    margin: 8px;
                    span {
                        color: $darkGray;
                        &:hover {
                            color: $lightGreen;
                        }
                    }
                    .letter--modified {
                        color: $pink;
                    }
                }
            }
        }
    }
</style>
