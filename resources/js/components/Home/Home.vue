<template>
    <div class="main">
        <div
            class="page-title-container d-flex align-items-center justify-content-center"
        >
            <h1 class="main-title d-none">Manticora Vintage</h1>
        </div>

        <div
            class="logo-container d-flex flex-column justify-content-center align-items-center"
        >
            <div class="logos d-flex flex-column">
                <img src="images/LOGO NEGRO (1).jpg" class="coin" />
                <img src="images/logo zozo3.png" />
            </div>
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
    background: black;
}

/* Main title style */
.page-title-container {
    position: absolute;
    top: 40px;
    padding: 0 25px;
    color: #ffffff;
    letter-spacing: 5px;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
.main-title {
    font-size: 30px;
    width: 100%;
}

/* Logo style */
.logo-container {
    width: 100vw;
    height: 100vh;
}

.logo-container img {
    width: 425px;
}

.coin {
    /* animation: coin-flip 2.5s alternate infinite; */
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
        width: 275px;
    }
}

@media (max-width: 786px) {
    .logo-container img {
        width: 200px;
    }
    .main-title {
        font-size: 18px !important;
    }
}

@keyframes coin-flip {
    from {
        -webkit-transform: scaleX(1);
        transform: scaleX(1);
    }

    to {
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
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
