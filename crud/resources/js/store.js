import Vue from 'vue';
import Vuex from 'vuex';
import * as auth from './services/auth_service';
import axios from 'axios';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        isLoggedIn: null,
        apiURL: 'http://service.ru/api/',
        serverPath: 'http://service.ru/',
        profile: {},
        tasksObj: {}
    },
    mutations: {
        authenticate(state, payload) {
            state.isLoggedIn = auth.isLoggedIn();
            if (state.isLoggedIn) {
                state.profile = payload;
            } else {
                state.profile = {};
            }
        },
        sliceArr(state, payload) {
            state.tasksObj.splice(payload.index, 1);
        },
        tasksSet(state, payload) {
            state.tasksObj = payload;
        }
    },
    actions: {
        authenticate(context, payload) {
            context.commit('authenticate', payload);
        },
        tasksSet(context, payload) {
            context.commit('tasksSet', payload);
        },
        sliceArr(context, payload) {
            context.commit('sliceArr', payload);
        }
    },
    getters: {
        getUserId: (state, getters) => {
          return state.profile.id;
        }
    }
})