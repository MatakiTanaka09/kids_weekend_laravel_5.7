import http from '../../services/http';
import urls from '../../utils/url';
import util from '../../utils/util';
import types from '../mutation-types';

const state = {
    user: {},
    token: localStorage.getItem(util.JWT_TOKEN) || '',
    status: '',
}

const actions = {
    register({ commit }, payload) {
        http.post(urls.REGISTER, payload, res => {
            commit(types.AUTH_REGISTER, res.data);
        }, null);
    },
    login({ commit }, payload) {
        http.post(urls.LOGIN, payload, res => {
            commit(types.AUTH_LOGIN, res.data);
        }, err => {
            console.log(util.ERROR, err);
        });
    },
    logout({ commit }) {
        http.get(urls.LOGOUT, () => {
            commit(types.AUTH_LOGOUT);
        }, null);
    },
    setCurrentUser ({ commit }) {
        http.get(urls.ME, res => {
            commit(types.SET_USER, res.data);
        }, null);
    }
};

const mutations = {
    [types.AUTH_REGISTER](state, payload) {
        Object.assign(state, { user: payload });
        this.state.authenticated = true;
    },
    [types.AUTH_LOGIN](state, payload) {
        Object.assign(state, { user: payload });
        this.state.authenticated = true;
    },
    [types.AUTH_LOGOUT]() {
        localStorage.removeItem(util.JWT_TOKEN);
        this.state.user = {};
        this.state.authenticated = false;
    },
    [types.SET_USER](state, payload) {
        Object.assign(state, { user: payload });
        this.state.authenticated = true;
    }
};

const getters = {
    user: (state, getters, rootState) => state.user,
    isLoggedIn: state => !!state.token
};

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};
