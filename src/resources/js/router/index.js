import Vue from 'vue';
import VueRouter from 'vue-router';
import store from '../store';
import Top from '../pages/general-users/common/TheTop';
import Login from '../pages/general-users/auth/Login';
import Register from '../pages/general-users/auth/Register';
import RegisterConfirmation from '../pages/general-users/auth/RegisterConfirmation';
import RegisterConfirmed from '../pages/general-users/auth/RegisterConfirmed';
import Events from '../pages/general-users/events/Events';
import EventIndividual from '../pages/general-users/events/EventLogic';
import UserHome from '../pages/general-users/users/UserHome';
import ReserveIndex from '../pages/general-users/users/ReserveIndex';
import ManageTop from '../pages/systems/manage/top/ManageTop';
import BookConfirm from '../pages/general-users/common/BookConfirm';

import TopHeader from '../components/common/header/ManageTopHeader';

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        name: 'top',
        component: Top
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/register',
        name: 'register',
        component: Register
    },
    {
        path: '/register/confirmation',
        name: 'registerConfirmation',
        component: RegisterConfirmation
    },
    {
        path: '/verify',
        name: 'RegisterConfirmed',
        component: RegisterConfirmed,
        // queryURL: route => ({
        //     url: route.params.query
        // })
    },
    {
        path: '/events',
        name: 'events',
        component: Events
    },
    {
        path:'/events/:id',
        name: 'eventIndividual',
        component: EventIndividual,
        props: route => ({
            id: Number(route.params.id)
        })
    },
    {
        path: '/users/me',
        name: 'UsersInfo',
        component: UserHome,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/users/me/reserve',
        name: 'ReserveIndex',
        component: ReserveIndex,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/manage/',
        name: 'Manage',
        component: ManageTop
    },
    {
        path: '/book/confirm',
        name: 'bookConfirm',
        component: BookConfirm
    },
    {
        path: '*',
        name: 'any',
        component: Top
    },
];

const router = new VueRouter({
    mode: 'history',
    base: __dirname,
    routes,
    scrollBehavior (to, from, savedPosition) {
        if(savedPosition) {
            return savedPosition
        }
        else {
            return { x: 0, y: 0 }
        }
    }
});

router.beforeEach((to, from, next) => {
    if(to.matched.some(record => record.meta.requiresAuth)) {
        if(store.getters['auth/isLoggedIn']) {
            next();
            console.log("pass the auth");
            return
        }
        next('/login');
    } else {
        next();
    }
});

export default router;
