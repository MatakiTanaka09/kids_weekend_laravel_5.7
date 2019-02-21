<template>
    <header>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <router-link to="/" class="navbar-item">
                    <span class="navbar__item--logo">kidsweekend</span>
                </router-link>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarHomeHeader" @click="dropdownToggle">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div id="navbarHomeHeader" class="navbar-menu" :class="{'is-active': dropdownActive}">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <div class="buttons">
                            <router-link to="register" class="button buttons__btn--register">
                                <strong>Sign up</strong>
                            </router-link>
                            <router-link to="/login" class="button buttons__btn--login">
                                Log in
                            </router-link>
                        </div>
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
      box-shadow: 0px 3px 25px rgba(77,77,99,0.1);
      font-weight: bold;
      position: fixed;
      z-index: 1000;
      width: 100%;
      height: 63px;
      background-color: white;
      nav.navbar {
          max-width: 980px;
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
      }
  }
</style>
