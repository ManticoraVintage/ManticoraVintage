
require('./bootstrap');

import router from "./routes";
import VueRouter from "vue-router";
// import Shop from "./components/Shop/Shop.vue";

window.Vue = require('vue').default;

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('shop', Shop);

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router,
});
