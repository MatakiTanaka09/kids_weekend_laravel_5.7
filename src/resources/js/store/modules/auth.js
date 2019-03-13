import http from '../../services/http';
import urls from '../../utils/url';
import util from '../../utils/util';
import types from '../mutation-types';

const state = {
    user  : {},
    token : localStorage.getItem(util.JWT_TOKEN) || '',
    status: '',
}

const actions = {
    register({ commit }, payload) {
        return new Promise((resolve, reject) => {
            commit(types.AUTH_LOADING);
            http.post(urls.REGISTER, payload, res => {
                commit(types.AUTH_SUCCESS, res.data);
                resolve(res);
            }, err => {
                commit(types.AUTH_ERROR, err);
                localStorage.removeItem(util.JWT_TOKEN);
                reject(err)
            });
        });
    },
    login({ commit }, payload) {
        return new Promise((resolve, reject) => {
            commit(types.AUTH_LOADING);
            http.post(urls.LOGIN, payload, res => {
                console.log(res.data);
                const token = res.data.token;
                const user = res.data.user;
                commit(types.AUTH_SUCCESS, token, user);
                resolve(res);
            }, err => {
                commit(types.AUTH_ERROR, err);
                localStorage.removeItem(util.JWT_TOKEN);
                reject(err)
            });
        });
    },
    logout({ commit }) {
        return new Promise((resolve) => {
            http.get(urls.LOGOUT, () => {
                commit(types.AUTH_LOGOUT);
                localStorage.removeItem(util.JWT_TOKEN);
                resolve();
            }, null);
        });
    },
    setCurrentUser ({ commit }) {
        http.get(urls.ME, res => {
            commit(types.SET_USER, res.data);
        }, null);
    }
};

const mutations = {
    [types.AUTH_LOGOUT]() {
        state.user = {};
        state.token = '';
    },
    [types.SET_USER](state, payload) {
        Object.assign(state, { user: payload });
    },
    [types.AUTH_LOADING](state) {
        state.status = util.AUTH_STATUS_LOADING;
    },
    [types.AUTH_SUCCESS](state, token, user) {
        console.log("login-success");
        state.status = util.AUTH_STATUS_SUCCESS;
        state.token = token;
        Object.assign(state, { user: user });
    },
    [types.AUTH_ERROR](state) {
        state.status = util.AUTH_STATUS_ERROR;
    },
};

const getters = {
    status: state => state.status,
    isLoggedIn: state => !!state.token
};

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};
