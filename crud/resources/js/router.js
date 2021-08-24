import Vue from 'vue';
import Router from 'vue-router';
import Home from './views/Home.vue';
import Dashboard from './views/Dashboard.vue';
import * as auth from './services/auth_service'
// import Register from './views/authentification/Register.vue';

Vue.use(Router);

const routes = [
    {
        path: '/',
        name: Home,
        component: Home
    },
    {
        path: '/dashboard',
        component: Dashboard,
        async beforeEnter(to, from, next) {
            if (!auth.isLoggedIn()) {
                next('/login');
            } else if (auth.isLoggedIn()) {
                const response = await auth.getProfile();
                if (response.data.email_verified_at == null)
                    next('/email/verify');
                else
                    next();
            }
        }
    },
    {
        path: '/login',
        name: 'login',
        component: () => import('./views/authentification/Login.vue'),
        async beforeEnter(to, from, next) {
            if (!auth.isLoggedIn()) {
                next();
            } else if (auth.isLoggedIn()) {
                const response = await auth.getProfile();
                if (response.data.email_verified_at == null)
                    next('/email/verify');
                else
                    next('/dashboard');
            }
        }
    },
    {
        path: '/register',
        name: 'register',
        component: () => import('./views/authentification/Register.vue')
    },
    {
        path: '/reset-password-request',
        name: 'reset-password-request',
        component: () => import('./views/authentification/ResetPasswordRequest.vue'),
        beforeEnter(to, from, next) {
            if (!auth.isLoggedIn()) {
                next();
            } else {
                next('/dashboard');
            }
        }
    },
    {
        path: '/reset-password',
        name: 'reset-password',
        component: () => import('./views/authentification/ResetPassword.vue'),
        beforeEnter(to, from, next) {
            if (!auth.isLoggedIn()) {
                next();
            } else {
                next('/dashboard');
            }
        }
    },
    {
        path: '/verify-email',
        name: 'verifyEmail',
        component: () => import('./views/authentification/VerifyEmail.vue')
    },
    {
        path: '/email/verify',
        name: 'verifyCheck',
        component: () => import('./views/authentification/VerifyEmailCheck.vue'),
        async beforeEnter(to, from, next) {
            if (auth.isLoggedIn()) {
                const response = await auth.getProfile();
                if (response.data.email_verified_at != null)
                    next('/dashboard');
                else
                    next()
            }
        }
    }
];

const router = new Router({
    mode: 'history',
    routes: routes
});

export default router;