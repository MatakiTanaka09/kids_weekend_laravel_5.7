import http from '../../services/http';
import urls from '../../utils/url';
import types from '../mutation-types';
import util from "../../utils/util";

const state = {
    events: {
        current: {},
        category: {},
        age0: {},
        age1: {},
        calendar: {}
    },
    status: ''
}

const actions = {
    fetchSearchTopEvent({ commit }) {
        commit(types.EVENT_LOADING)
        http.get(urls.EVENT_SEARCH_EVENT_LISTS, res => {
            commit(types.EVENT_CURRENT_SUCCESS, res.data);
            console.log(res.data)
        }, err => {
            console.log(err)
        });
    },
    fetchSearchEventForCalendar({ commit }, payload) {
        commit(types.EVENT_LOADING)
        http.post(urls.EVENT_SEARCH_CALENDAR, payload, res => {
            commit(types.EVENT_CALENDAR_SUCCESS, res.data);
            console.log(res.data)
        }, err => {
            console.log(err)
        })
    }
};

const mutations = {
    [types.EVENT_LOADING](state) {
        state.status = util.EVENT_STATUS_LOADING;
    },
    [types.EVENT_CURRENT_SUCCESS](state, payload) {
        state.status = util.EVENT_STATUS_SUCCESS;
        Object.assign(state.events.current, payload.data);
    },
    [types.EVENT_CATEGORY_SUCCESS](state, payload) {
        state.status = util.EVENT_STATUS_SUCCESS;
        Object.assign(state.events.category, payload.data);
    },
    [types.EVENT_AGE0_SUCCESS](state, payload) {
        state.status = util.EVENT_STATUS_SUCCESS;
        Object.assign(state.events.age0, payload.data);
    },
    [types.EVENT_AGE1_SUCCESS](state, payload) {
        state.status = util.EVENT_STATUS_SUCCESS;
        Object.assign(state.events.age1, payload.data);
    },
    [types.EVENT_CALENDAR_SUCCESS](state, payload) {
        state.status = util.EVENT_STATUS_SUCCESS;
        Object.assign(state.events.calendar, payload.data);
    },
    [types.EVENT_ERROR](state) {
        state.status = util.EVENT_STATUS_ERROR;
    },
};

const getters = {
    getCalendar: state => state.calendar
};

export default {
    namespaced: true,
    state,
    mutations,
    getters,
    actions
};
