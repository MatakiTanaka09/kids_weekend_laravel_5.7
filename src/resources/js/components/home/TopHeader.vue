<template>
  <header>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
          <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

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
              <router-link to="register" class="button is-primary">
                <strong>Sign up</strong>
              </router-link>
              <router-link to="/login" class="button is-light">
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
    padding: 16px;
    position: fixed;
    z-index: 99;
    width: 100%;
    background-color: white;
  }
</style>
