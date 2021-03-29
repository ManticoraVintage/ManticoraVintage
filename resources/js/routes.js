
import Index from "./components/Index.vue";
import Admin from "./components/Admin/Admin.vue";
import Shop from "./components/Shop/Shop.vue";
import VueRouter from "vue-router";

const routes = [
    {
        path: "/",
        component: Index,
        name: "index",
    },
    {
        path: "/admin",
        component: Admin,
        name: "admin",
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