import store from '../store';
import axios from 'axios';
import * as auth from './auth_service';

export function http() {
    return axios.create({
        baseURL: store.state.apiURL,
        headers: {
            Authorization: 'Bearer '+auth.getAccessToken(),
        }
    });
}

export function httpFile() {
    return axios.create({
        baseURL: store.state.apiURL,
        // headers: {
        //     Authorization: 'Bearer '+auth.getAccessToken(),
        //     'Content-Type': "multipart/form-data; charset=utf-8; boundary=----WebKitFormBoundaryrF24WLGV1wb2QwNd"
        // }
    });
}