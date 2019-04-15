import http from '../../services/http';
import urls from '../../utils/url';
import util from '../../utils/util';
import types from '../mutation-types';
import store from '../../store/';

const state = {
    user  : {},
    status: ''
};

const actions = {
    setCurrentUser ({ commit }) {
        if (store.getters['auth/isLoggedIn']) {
            return new Promise((reject) => {
                commit(types.USER_LOADING);
                http.get(urls.USER, res => {
                    if(res === null) {
                        console.log("null man");
                        commit(types.USER_NULL);
                        return
                    }
                    commit(types.USER, res.data);
                    console.log(res.data)
                }, err => {
                    commit(types.USER_ERROR, err);
                    reject(err);
                });
            });
        }
        else {
            console.log("no logged in")
        }
    },
    storeUserInfo({ commit }, payload) {
        return new Promise((resolve, reject) => {
            commit(types.USER_LOADING)
            http.post(urls.SAVING_USER_INFO, payload, res => {
                commit(types.USER_SAVED, res.data);
                resolve()
            }, err => {
                commit(types.USER_ERROR, err);
                reject(err);
            })
        })
    },
    storeUserChildInfo({ commit }, payload) {
        return new Promise((resolve, reject) => {
            commit(types.USER_LOADING)
            http.post(urls.SAVING_USER_CHILD_INFO, payload, res => {
                console.log(res.data);
                commit(types.USER_CHILD_SAVED);
                resolve();
            }, err => {
                commit(types.USER_ERROR, err);
                reject(err);
            })
        })
    }
};

const mutations = {
    [types.USER_LOADING](state) {
        state.status = util.AUTH_STATUS_LOADING;
    },
    [types.USER](state, payload) {
        state.status = util.AUTH_STATUS_SUCCESS;
        const userData = payload.data[0];
        Object.assign(state, { user: userData });
    },
    [types.USER_SAVED](state, payload) {
        state.status = util.AUTH_STATUS_SUCCESS;
        const userData = payload;
        Object.assign(state.user, { user: userData });
    },
    [types.USER_CHILD_SAVED](state) {
        state.status = util.AUTH_STATUS_SUCCESS;
    },
    [types.USER_NULL](state) {
        state.status = util.AUTH_STATUS_SUCCESS;
    },
    [types.USER_ERROR](state) {
        state.status = util.AUTH_STATUS_ERROR;
    },
};

const getters = {
    user: state => state.user,
};

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};
