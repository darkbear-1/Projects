import {http, httpFile} from './http_service';
import jwt from 'jsonwebtoken';
import store from '../store';

export function register(user) {
    return http().post('/auth/register', user);
}

export function login(user) {
    return http().post('/auth/login', user)
    .then(response => {
        if (response.status === 200) {
            setToken(response.data);
        }

        return response.data;
    });
}

function setToken(user) {
    const token = jwt.sign({ user: user }, 'crudservice');
    localStorage.setItem('crud-service', token);
    store.dispatch('authenticate', user.user);
}

export function isLoggedIn() {
    const token = localStorage.getItem('crud-service');
    return token != null;
}

export function logout() {
    http().get('/auth/logout');
    localStorage.removeItem('crud-service');
}

export function getAccessToken() {
    const token = localStorage.getItem('crud-service');
    if (!token) {
        return null;
    }

    const tokenData = jwt.decode(token);
    return tokenData.user.access_token;
}

export function getProfile() {
    return http().get('/auth/profile');
}

export function resetPasswordRequest(user) {
    return http().post('/auth/reset-password-request', user);
}

export function resetPassword(user) {
    return http().post('/auth/reset-password', user);
}

export function verifyEmail(payload) {
    return new Promise((resolve, reject) => {
        http().get('/auth/email-verification', {
                params: payload
            })
            .then((response) => {
                resolve(response);
            })
            .catch((error) => {
                reject(error);
            })
    })
}

export function resendVerificationEmail(payload) {
    console.log(payload)
    return http().post('/auth/resend-verification', payload);
}