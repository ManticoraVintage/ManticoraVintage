
import Index from "./components/Index.vue";
import Admin from "./components/Admin/Admin.vue";
import Shop from "./components/Shop/Shop.vue";
import ShopZozobra from "./components/Shop/ShopZozobra.vue";
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
        path: "/shop",
        component: Shop,
        name: "Shop"
    },
    {
        path: "/shop/zozobra",
        component: ShopZozobra,
        name: "ShopZozobra"
    },
    {
        path: "/shopItemDetails/:id",
        component: ShopItemDetails,
        name: "ShopItemDetails"
    }
];

const router = new VueRouter({
    routes,
})

export default router;