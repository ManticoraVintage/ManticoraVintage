<template>
    <div class="main">
        <Menu></Menu>
        <div class="page-title-container d-flex align-items-center">
            <h1>Manticora Vintage</h1>
        </div>

        <div class="logo-container d-flex justify-content-center align-items-center">
            <img src="images/LOGO NEGRO (1).jpg" />
        </div>
    </div>
</template>

<style scoped>
/* Main component style */
.main {
    width: 100vw;
}

/* Main title style */
.page-title-container {
    position: absolute;
    top: 40px;
    padding: 0 25px;
    color: #ffffff;
    letter-spacing: 5px;
}

/* Logo style */
.logo-container {
    width: 100vw;
    height: 100vh;
    background-color: #000000;
}

.logo-container img {
    width: 600px;
    height: 600px;
   
}
</style>

<script>
import Menu from "../Menu/Menu";
import Shop from "../Shop/Shop.vue";

export default {
    name: "Home",

    components: {
        Menu,
        Shop
    }
};
</script>
