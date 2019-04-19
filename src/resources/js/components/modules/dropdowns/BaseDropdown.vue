<template>
    <!--<transition name="dropdown" class="dropdown" :class="{ 'is-active': showDropdown}" appear>-->
        <div class="dropdown-mask dropdown" :class="{ 'is-active': showDropdown}" >
            <div class="dropdown-wrapper"  @click.self="$emit('close')">
                <div class="dropdown-trigger">
                    <button class="button" aria-haspopup="true" aria-controls="dropdown-menu2" @click="activeDropdown">
                        <span>{{ name }}</span>
                    </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu2" role="menu" >
                    <div class="dropdown-content">
                        <div class="main__container">
                            <div class="header__container">
                                検索日：{{ customformat(defaultDate) }}
                            </div>
                            <div class="main__container--date">
                                <datepicker
                                    :value="''"
                                    v-model="defaultDate"
                                    :name="'calendar'"
                                    :disabled-dates="disabledDates"
                                    :inline="true"
                                    :language="ja"
                                    :bootstrapStyling="true"
                                ></datepicker>
                            </div>
                            <div class="footer__container">
                                <div class="clear__button">
                                    <a class="button" @click="activeDropdown">クリア</a>
                                </div>
                                <div class="search__button">
                                    <strong>
                                        <a class="button">検索</a>
                                    </strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--</transition>-->
</template>

<script>
    import Datepicker from 'vuejs-datepicker'
    import { ja } from 'vuejs-datepicker/dist/locale'
    import dateFormat from '../../../utils/dateFormat'
    export default {
        name: "BaseDropdown",
        components: {
            Datepicker
        },
        props: {
            name: {
                type: String,
                default: 'カレンダー'
            }
        },
        data() {
            return {
                showDropdown: false,
                ja: ja,
                defaultDate: new Date(),
                disabledDates: {
                    to: new Date(Date.now() - 8640000)
                }
            }
        },
        methods: {
            activeDropdown() {
                this.showDropdown = !this.showDropdown
            },
            customformat(value){
                return dateFormat.customformat(value)
            }
        }
    }
</script>

<style lang="scss" scoped>
    .dropdown-mask {
        display: table;
        transition: opacity .3s ease;
        .dropdown-wrapper {
            display: table-cell;
            vertical-align: middle;
            .dropdown-menu {
                .main__container {
                    margin: 16px;
                    .header__container {
                        width: 100%;
                        margin-bottom: 8px;
                    }
                    &--date {
                        /*display: flex;*/
                        /*justify-content: center;*/
                        width: 100%;
                        margin-bottom: 8px;
                    }
                    .footer__container {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        width: 100%;
                    }
                }
            }
        }
    }
</style>
