require("./bootstrap");

import router from "./routes";
import VueRouter from "vue-router";
import Vue from "vue";
import Modal from "@burhanahmeed/vue-modal-2";
import VueCarousel from 'vue-carousel';
import Index from "./Index";
import FooterCustom from "./components/Footer/FooterCustom.vue";

window.Vue = require("vue").default;

// Global registration of components here
//We are importing components on our router so we dont have to declare them here again
Vue.use(VueRouter); //To enable vue router
Vue.use(Modal, {
  componentName: "ModalVue"
});
Vue.use(VueCarousel);
Vue.component("footer-custom", FooterCustom);

//Main component of the website that acts as a container
const app = new Vue({
    el: "#app",
    router,
    components: {
      index: Index
  },
});
