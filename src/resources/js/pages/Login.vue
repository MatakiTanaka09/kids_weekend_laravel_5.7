<template>
    <section class="section">
        <div class="form__container">
            <form>
                <p class="login-title">ログイン</p>
                <div class="field">
                    <label class="label">メールアドレス</label>
                    <div class="control has-icons-left has-icons-right">
                        <input
                            class="input"
                            type="email"
                            placeholder="半角英数"
                            v-model="email"
                            @keyup.enter="login"
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
                            @keyup.enter="login"
                            required>

                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                </div>
                <div class="btn-container">
                    <button class="button is-block is-fullwidth" @click="handleLogin">
                        ログインする
                    </button>
                </div>

                <div class="reset-password">
                    <a>パスワードを忘れた方</a>
                </div>
            </form>
        </div>
    </section>
</template>

<script>
    import { mapActions } from 'vuex';
    export default {
        data() {
            return {
                email: '',
                password: '',
            }
        },
        methods: {
            ...mapActions({
                login: 'auth/login'
            }),
            async handleLogin() {
                await this.login({email: this.email, password: this.password});
                this.$router.push('/');
            },
        }
    }
</script>

<style type="scss" scoped>
    .btn-line {
        background-color: #00c300;
        border: 1px solid #00c300;
        color: white;
    }
    .login-title {
        padding-top: 10px;
        padding-bottom: 15px;
        font-weight: bold;
        font-size: 18px;
    }
    .label {
        font-size: 12px;
        font-weight: normal;
    }
    .btn-container {
        margin-top: 24px;
    }
    .btn-container .button {
        background-color: #57b8ff;
        border: 1px solid #57b8ff;
        color: white;
    }
    .reset-password {
        margin-top: 15px;
        text-align: center;
    }
    @media screen and (min-width: 1024px) {
        .form__container {
            padding: 0 400px;
        }
    }
</style>
