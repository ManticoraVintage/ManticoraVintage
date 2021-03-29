
require('./bootstrap');

import router from "./routes";
import VueRouter from "vue-router";
// import Shop from "./components/Shop/Shop.vue";

window.Vue = require('vue').default;

Vue.component('index', require('./components/Index.vue').default);

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router,
});
