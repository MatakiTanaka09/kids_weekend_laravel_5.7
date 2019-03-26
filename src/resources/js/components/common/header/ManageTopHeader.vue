<template>
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <!--<router-link to="/" class="navbar-item">-->
                <!--<span class="navbar__item&#45;&#45;logo">fms</span>-->
                <!--</router-link>-->

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarHomeHeader" @click="dropdownToggle">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarHomeHeader" class="navbar-menu" :class="{'is-active': dropdownActive}">
                <div class="navbar-end">
                    <div class="navbar-item">
                        company_name
                    </div>
                    <div class="navbar-item">
                        image
                        <progressive-img class="image" src="http://placehold.jp/32x32.png" />
                    </div>
                    <div class="navbar-item">
                        dropdown
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
    export default {
        data() {
            return {
                dropdownActive: false,
            }
        },
        methods: {
            dropdownToggle() {
                this.dropdownActive = !this.dropdownActive;
            },
        },
    }
</script>

<style lang="scss" scoped>
    header {
        background-color: #1B9BE1;
        font-weight: bold;
        padding: 8px;
        position: fixed;
        height: 64px;
        width: 80%;
        left: 20%;
        z-index: 1000;
        nav.navbar {
            max-width: 980px;
            margin: 0 auto;
            background-color: #1B9BE1;
            &-menu {
                .navbar-item {
                }
            }
            .navbar__item--logo {
                font-size: 24px;
                letter-spacing: 5px;
                color: #03A1EB;
            }
            .buttons__btn--login {
                border: 1px solid #03A1EB;
                background-color: #03A1EB;
                color: white;
                &:hover {
                    opacity: 0.7;
                }
            }
        }
    }
</style>
