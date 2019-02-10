import Vue from 'vue';
import VueRouter from 'vue-router';

import Top from '../pages/TheTop';
import Login from '../pages/Login';
import Register from '../pages/Register';
import RegisterConfirmation from '../pages/RegisterConfirmation';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        component: Top
    },
    {
        path: '/login',
        component: Login
    },
    {
        path: '/register',
        component: Register
    },
    {
        path: '/register/confirmation',
        component: RegisterConfirmation
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
