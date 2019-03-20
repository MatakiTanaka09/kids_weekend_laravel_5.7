import Vue from 'vue';
import VueRouter from 'vue-router';
import store from '../store';
import Top from '../pages/common/TheTop';
import Login from '../pages/auth/Login';
import Register from '../pages/auth/Register';
import RegisterConfirmation from '../pages/auth/RegisterConfirmation';
import Events from '../pages/events/Events';
import EventIndividual from '../pages/events/EventLogic';
import UserHome from '../pages/users/UserHome';
import CreateUserForm from '../components/modules/forms/create-user-form/CreateUserForm';
import CreateUserFormParent from '../components/modules/cards/user-create-card/CreateUserCard';
import CreateUserFormChild from '../components/modules/cards/user-create-card/CreateUserChildCard';
import BookConfirm from '../pages/common/BookConfirm';

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
        path: '/users',
        name: 'users',
        component: UserHome,
        meta: {
            requiresAuth: true
        }
    },
    {
        path: '/users/create',
        name: 'usersCreate',
        component: CreateUserForm,
        meta: {
            requiresAuth: true
        }
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
    // {
    //     path: 'users/:id',
    //     component: UserHome,
    //     props: route => ({
    //         id: Number(route.params.id)
    //     }),
    //     meta: {
    //         requiresAuth: true
    //     },
    //     children: [
    //         {
    //             path: '',
    //             component: '',
    //         },
    //         {
    //             path: 'edit',
    //             component: '',
    //         },
    //     ]
    // }
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
