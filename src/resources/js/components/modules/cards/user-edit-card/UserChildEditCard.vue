<template>
    <div class="children-infomation">
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    お子さんの情報
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
            <div class="card-content" v-for="(child,index) in children" :key="index">
                <div class="content">
                    <div class="field-body">
                        <div class="field">
                            <label class="label">姓</label>
                            <div class="control has-icons-left">
                                <div class="display__edit">
                                    <input class="input" type="text" placeholder="姓" :value="child.first_name ">
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
                                    <input class="input" type="text" placeholder="名" :value="child.last_name ">
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
                                <input class="input" type="text" placeholder="2015/01/01" :value="child.birth_day">
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
                                <input class="input" type="text" placeholder="3" :value="child.age">
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
                                <select>
                                    <option>性別</option>
                                    <option>男の子</option>
                                    <option>女の子</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="button is-primary button__save">保存する</a>
    </div>
</template>

<script>
    export default {
        name: "UserChildEditCard",
        data() {
            return {}
        },
        props: {
            children: {
                type: Array,
                default: () => []
            }
        }
    }
</script>

<style lang="scss" scoped>
    .children-infomation {
        margin-bottom: 40px;
        .button__save {
            width: 100%;
        }
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
