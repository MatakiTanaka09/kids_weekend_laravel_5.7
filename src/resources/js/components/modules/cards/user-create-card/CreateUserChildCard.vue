<template>
    <div class="children-infomation">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    お子さんの情報
                </p>
            </header>
            <div class="card-content">
                <div class="content">
                    <div class="field-body">
                        <div class="field">
                            <label class="label">姓</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="text" placeholder="姓" v-model="firstName">
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
                                    <input class="input" type="text" placeholder="名" v-model="lastName ">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">お誕生日</label>
                        <div class="control has-icons-left">
                            <div class="display__edit">
                                <input class="input" type="text" placeholder="2015/01/01" v-model="birthDay">
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
                                <input class="input" type="text" placeholder="3" v-model="age">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="field">
                        <label class="label">性別</label>
                        <div class="control">
                            <div class="select" v-model="sex">
                                <select>
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
        <a class="button is-primary button__save">保存して、確認画面へ</a>
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
        }
    }
</script>

<style scoped>

</style>
