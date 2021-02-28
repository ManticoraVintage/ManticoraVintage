
import Home from "./components/Home/Home.vue";
import Shop from "./components/Shop/Shop.vue";
import VueRouter from "vue-router";

const routes = [
    {
        path: "/",
        component: Home,
        name: "home"
    },
    {
        path: "/shop",
        component: Shop,
        name: "shop"
    },
];

const router = new VueRouter({
    routes,
})

export default router;