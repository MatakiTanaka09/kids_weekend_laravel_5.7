import http from '../../services/http';
import urls from '../../utils/url';
import util from '../../utils/util';
import types from '../mutation-types';

const state = {
    user  : {},
    token : localStorage.getItem(util.JWT_TOKEN) || '',
    status: '',
};

const actions = {
    register({ commit }, payload) {
        return new Promise((resolve, reject) => {
            commit(types.AUTH_LOADING);
            http.post(urls.REGISTER, payload, res => {
                commit(types.AUTH_SUCCESS, res.data);
                resolve(res.data);
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
                commit(types.AUTH_SUCCESS, res);
                resolve();
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
        if (!!state.token) {
            return new Promise((reject) => {
                commit(types.AUTH_LOADING);
                http.get(urls.ME, res => {
                    commit(types.AUTH_ME, res.data);
                }, err => {
                    commit(types.AUTH_ERROR, err);
                    localStorage.removeItem(util.JWT_TOKEN);
                    reject(err);
                });
            });
        }
    }
};

const mutations = {
    [types.AUTH_LOGOUT]() {
        state.user = {};
        state.token = '';
    },
    [types.AUTH_LOADING](state) {
        state.status = util.AUTH_STATUS_LOADING;
    },
    [types.AUTH_SUCCESS](state, payload) {
        state.status = util.AUTH_STATUS_SUCCESS;
        state.token = payload.token;
        Object.assign({}, payload.user);
    },
    [types.AUTH_ERROR](state) {
        state.status = util.AUTH_STATUS_ERROR;
    },
    [types.AUTH_ME](state, payload) {
        state.status = util.AUTH_STATUS_SUCCESS;
        Object.assign(state, { user: payload.data });
    },
};

const getters = {
    user: state => state.user,
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
