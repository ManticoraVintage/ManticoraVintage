<template>
    <div class="main">
        <Menu menuColor="#ffffff" backgroundColor="#d12a704a"></Menu>
        <div class="page-title-container d-flex align-items-center">
            <h1 class="main-title">Manticora Vintage</h1>
        </div>

        <div
            class="logo-container d-flex flex-column justify-content-center align-items-center"
        >
            <img src="images/LOGO NEGRO (1).jpg" />
            <div class="button-container">
                <router-link
                    class="d-flex justify-content-center align-content-center shop-button button"
                    :to="{
                        name: 'Shop'
                    }"
                    >SHOP</router-link
                >

                <router-link
                    class="d-flex justify-content-center align-content-center about-button button"
                    :to="{
                        name: 'Shop'
                    }"
                    >ABOUT US</router-link
                >
            </div>
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
.main-title {
    font-size: 30px;
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

.button {
    padding: 10px;
    border: 1px solid white;
    margin: 0 auto;
    margin-top: 25px;
    transition: all 0.3s ease-in-out;
    color: white;
}

.button:hover {
    background: #ee2a7b;
    color: white;
}

.shop-button {
    width: 200px;
}
.about-button {
    width: 250px;
}

@media (max-width: 1386px) {

    .logo-container img {
        width: 400px;
        height: 400px;
    }
}

@media (max-width: 786px) {
    .logo-container img {
        width: 300px;
        height: 300px;
    }
    .main-title {
        font-size: 18px !important;
    }
}
</style>

<script>
import Menu from "../Menu/Menu";
import Shop from "../Shop/Shop";

export default {
    name: "Home",

    components: {
        Menu,
        Shop
    }
};
</script>
