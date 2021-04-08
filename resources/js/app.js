require("./bootstrap");

import router from "./routes";
import VueRouter from "vue-router";
import Vue from "vue";
import Modal from "@burhanahmeed/vue-modal-2";

Vue.use(Modal, {
  componentName: "ModalVue"
});

window.Vue = require("vue").default;

Vue.component("index", require("./components/Index.vue").default);
//Vue.component('admin', require('./components/Admin/Admin.vue'));

Vue.use(VueRouter);


const app = new Vue({
    el: "#app",
    router
});
