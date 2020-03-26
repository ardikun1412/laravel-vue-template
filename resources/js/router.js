import Vue from 'vue';
import Router from 'vue-router';
import Welcome from './Views/Welcome.vue';

Vue.use(Router);

const routes = [
    {
        path: '/',
        component: Welcome
    }
];

const router = new Router({
    routes: routes
});

export default router;
