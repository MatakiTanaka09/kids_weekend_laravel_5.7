<template>
    <transition name="modal" :class="{ 'is-active': showAuthLogoutModal }" appear>
        <div class="modal-mask">
            <div class="modal-wrapper" @click.self="$emit('close')">
                <div class="modal-container">
                    <div class="modal-header">
                        <slot name="header">
                            <button class="delete" aria-label="close" @click.self="$emit('close')"></button>
                        </slot>
                    </div>
                    <div class="modal-body">
                        <slot name="body">
                            本当にサインアウトしますか？
                        </slot>
                    </div>
                    <div class="modal-footer">
                        <slot name="footer">
                            <div class="buttons">
                                <a class="button button--no is-danger" @click="$emit('close')">
                                    <span class="">いいえ</span>
                                </a>
                                <a class="button button--yes is-info" @click="$emit('logout')">
                                    <span class="">サインアウトする</span>
                                </a>
                            </div>
                        </slot>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>
    export default {
        data() {
            return {
            }
        },
        props: {
            showAuthLogoutModal: Boolean,
        },
        methods: {
        }
    }
</script>

<style lang="scss" scoped>
    @import "../../../../../../sass/_variables.scss";
    .modal-mask {
        position: fixed;
        z-index: 9998;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, .5);
        display: table;
        transition: opacity .3s ease;
    }
    .modal-wrapper {
        display: table-cell;
        vertical-align: middle;
    }
    .modal-container {
        width: 500px;
        margin: 0px auto;
        padding: 20px 30px;
        background-color: #fff;
        border-radius: 2px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
        transition: all .3s ease;
        font-family: Helvetica, Arial, sans-serif;

        @media screen and (max-width: 767px) {
            width: 300px;
        }
    }
    .modal-header h3 {
        margin-top: 0;
        color: #42b983;
    }
    .modal-body {
        margin: 20px 0;
    }
    .modal-default-button {
        float: right;
    }
    .modal-footer {
        .footer {
            .buttons {
                display: flex;
                button {
                    &--no {
                        color: white;
                        background-color: $pink;
                    }
                    &--yes {
                        color: white;
                        background-color: $darkBlue;
                    }
                }
            }
        }
    }
    .modal-enter {
        opacity: 0;
    }
    .modal-leave-active {
        opacity: 0;
    }
    .modal-enter .modal-container,
    .modal-leave-active .modal-container {
        -webkit-transform: scale(1.1);
        transform: scale(1.1);
    }
    input[type=checkbox] {
        display: none;
    }
    .checkbox {
        box-sizing: border-box;
        -webkit-transition: background-color 0.2s linear;
        transition: background-color 0.2s linear;
        position: relative;
        display: inline-block;
        margin: 0 20px 8px 0;
        padding: 12px 12px 12px 42px;
        border-radius: 8px;
        background-color: #f6f7f8;
        vertical-align: middle;
        cursor: pointer;
    }
    .checkbox:hover {
        background-color: #e2edd7;
    }
    .checkbox:hover:after {
        border-color: #53b300;
    }
    .checkbox:after {
        -webkit-transition: border-color 0.2s linear;
        transition: border-color 0.2s linear;
        position: absolute;
        top: 50%;
        left: 15px;
        display: block;
        margin-top: -10px;
        width: 16px;
        height: 16px;
        border: 2px solid #bbb;
        border-radius: 6px;
        content: '';
    }
    .checkbox:before {
        -webkit-transition: opacity 0.2s linear;
        transition: opacity 0.2s linear;
        position: absolute;
        top: 50%;
        left: 21px;
        display: block;
        margin-top: -7px;
        width: 5px;
        height: 9px;
        border-right: 3px solid #53b300;
        border-bottom: 3px solid #53b300;
        content: '';
        opacity: 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    input[type=checkbox]:checked + .checkbox:before {
        opacity: 1;
    }
</style>
