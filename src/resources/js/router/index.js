import Vue from 'vue';
import VueRouter from 'vue-router';

import Top from '../pages/common/TheTop';
import Login from '../pages/auth/Login';
import Register from '../pages/auth/Register';
import RegisterConfirmation from '../pages/auth/RegisterConfirmation';
import Events from '../pages/events/Events';
import EventIndividual from '../pages/events/EventLogic';
import UsersInfo from '../pages/users/UsersInfo';

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
    },
    {
        path: '/events',
        component: Events
    },
    {
        path:'/events/:id',
        name: 'EventIndividual',
        component: EventIndividual,
        props: route => ({
            id: Number(route.params.id)
        })
    },
    {
        path: '/users',
        component: UsersInfo
    },
    {
        path: '*',
        component: Top
    }
];

const router = new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        }
        else {
            return { x: 0, y: 0 }
        }
    }
});

export default router;
