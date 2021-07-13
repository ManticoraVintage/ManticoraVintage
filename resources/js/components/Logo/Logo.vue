<template>
    <div class="main-logo-container">
        <router-link
            :to="{
                name: 'home'
            }"
        >
            <img src="images/LOGO PNG (1).png"
        /></router-link>
    </div>
</template>

<style scoped>
.main-logo-container {
    width: 75px;
    height: 75px;
    position: fixed;
    left: 20px;
    top: 20px;
    z-index: 10000;
}
img {
    width: 100%;
    height: 100%;
}

@media (max-width: 1366px) {
    .main-logo-container {
        display: none;
        width: 0px;
        height: 0px;
    }
}

@media (max-width: 1566px) {
    .main-logo-container {
       
        width: 50px;
        height: 50px;
    }
}
</style>
<script>
export default {
    name: "Logo"
};
</script>
