require('./bootstrap');

window.Vue = require('vue');
import VueRouter from 'vue-router'
import {routes} from './routes.js'
Vue.use(VueRouter)
const router = new VueRouter({
    mode :'history',
    routes
})
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    router
});
