import Vue from 'vue';
import VueRouter from 'vue-router';

import Top from '../pages/TheTop';

Vue.use(VueRouter);

const routes = [
  {
    path: '/',
    component: Top
  }
];

const router = new VueRouter({
  mode: 'history',
  routes,
  scrollBehavior (to, from, savedPosition) {
    if (savedPosition) {
      return savedPosition
    } else {
      return { x: 0, y: 0 }
    }
  }
});

export default router;
