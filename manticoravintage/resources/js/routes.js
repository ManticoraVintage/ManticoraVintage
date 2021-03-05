
import Index from "./components/Index.vue";
import VueRouter from "vue-router";

const routes = [
    {
        path: "/",
        component: Index,
        name: "index"
    },
];

const router = new VueRouter({
    routes,
})

export default router;