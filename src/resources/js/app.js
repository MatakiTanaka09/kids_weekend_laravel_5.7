
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

import Vue from 'vue';
import App from './App.vue';
import router from './router/';
import store from './store/';
import { sync } from 'vuex-router-sync';
import VueProgressiveImage from 'vue-progressive-image'

Vue.use(VueProgressiveImage, {
  blur: 30
});

sync(store, router);

const app = new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app');
