<template>
    <div class="children-infomation">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    お子さんの情報
                </p>
                <div class="card__header__buttons">
                    <div class="card__header__buttons--button">
                        <a class="button is-danger" @click.self="$emit('removeUserChild')">削除</a>
                    </div>
                    <div class="card__header__buttons--button">
                        <a class="button" @click.self="$emit('addUserChild')">追加</a>
                    </div>
                </div>
            </header>
            <div class="card-content">
                <div v-for="(child, index) in userChild" :key="index">
                    <div class="content">
                        <div class="field">
                            <label class="label">名字</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="text" placeholder="たなか" v-model="child.firstKana">
                                    <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">お名前</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="text" placeholder="たろう" v-model="child.lastKana">
                                    <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">お誕生日</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="text" placeholder="2015/01/01" v-model="child.birthDay">
                                    <span class="icon is-small is-left">
                                    <i class="fas fa-birthday-cake"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">年齢</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="text" placeholder="3" v-model="child.age">
                                    <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">性別</label>
                            <div class="control">
                                <div class="select">
                                    <select v-model="child.sex">
                                        <option>性別</option>
                                        <option value="1">男の子</option>
                                        <option value="2">女の子</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--<router-link to="/users/create/user" class="button is-primary button__save">前へ</router-link>-->
        <!--<router-link to="/users/create/confirm" class="button is-primary button__save">保存して、確認画面へ</router-link>-->
    </div>
</template>

<script>
    export default {
        name: "CreateUserChild",
        data() {
            return {
                firstName: '',
                lastName: '',
                birthDay: '',
                age: '',
                sex: ''
            }
        },
        props: {
            userChild: {
                type: Array,
                default: () => []
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
