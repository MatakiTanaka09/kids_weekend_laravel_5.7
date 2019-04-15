<template>
    <div>
        <section class="section">
            <div class="form__container">
                <form>
                    <p class="login__title">ログイン</p>
                    <div class="field">
                        <label class="label">メールアドレス</label>
                        <div class="control has-icons-left has-icons-right">
                            <input
                                class="input"
                                type="email"
                                placeholder="半角英数"
                                v-model="email"
                                required
                                autofocus>
                            <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">パスワード</label>
                        <div class="control has-icons-left">
                            <input
                                class="input"
                                type="password"
                                placeholder="半角英数"
                                v-model="password"
                                required>
                            <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                        </div>
                    </div>
                    <div class="btn__container">
                        <button class="button is-block is-fullwidth" @click.prevent="handleLogin">
                            ログインする
                        </button>
                    </div>

                    <div class="reset__password">
                        <router-link to="/register">
                            新規登録の方はこちら
                        </router-link>
                        <span class="is-hidden-mobile">/</span><br class="is-hidden-desktop">
                        <a>パスワードを忘れた方はこちら</a>
                    </div>
                </form>
            </div>
        </section>
    </div>
</template>

<script>
    import { mapActions } from 'vuex';
    export default {
        data() {
            return {
                email    : '',
                password : '',
            }
        },
        methods: {
            ...mapActions({
                login: 'auth/login'
            }),
            async handleLogin() {
                const loginData = {
                    email: this.email,
                    password: this.password
                }
                await this.login(loginData);
                this.$router.go(0);
                this.$router.push('/users/me');
                console.log("start");
            },
        }
    }
</script>

<style lang="scss" scoped>
    .section {
        padding: 128px 24px;
        @media screen and (max-width: 768px) {
            margin: 63px 0px 0px;
            padding: 24px;
        }
        .form__container {
            @media screen and (min-width: 1024px) {
                padding: 0 400px;
            }
            .btn-line {
                background-color: #00c300;
                border: 1px solid #00c300;
                color: white;
            }
            .login__title {
                padding-top: 10px;
                padding-bottom: 15px;
                font-weight: bold;
                font-size: 18px;
            }
            .label {
                font-size: 12px;
                font-weight: normal;
            }
            .btn__container {
                margin-top: 24px;
                .button {
                    background-color: #57b8ff;
                    border: 1px solid #57b8ff;
                    color: white;
                }
            }
            .reset__password {
                margin-top: 15px;
                text-align: center;
            }
        }
    }
</style>
