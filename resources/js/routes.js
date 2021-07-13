
import Index from "./components/Index.vue";
import Admin from "./components/Admin/Admin.vue";
import Shop from "./components/Shop/Shop.vue";
import ShopItemDetails from "./components/Shop/ShopItemDetails.vue";
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
        name: "Admin",
    },
    {
        path: "/shop/manticora",
        component: Shop,
        name: "manticora"
    },
    {
        path: "/shop/zozobra",
        component: Shop,
        name: "zozobra"
    },
    {
        path: "/shopItemDetails/:id",
        component: ShopItemDetails,
        name: "ShopItemDetails",
    }
];

const router = new VueRouter({
    routes,
})

export default router;