<template>
  <div class="main">
    <Menu></Menu>
    <div class="page-title-container d-flex align-items-center">
      <h1>Manticora Vintage</h1>
    </div>

    <div class="logo-container"></div>
    <!-- <Shop></Shop> -->
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
  color: #ee2a7b;
  letter-spacing: 5px;
}

/* Logo style */
.logo-container {
  width: 400px;
  height: 400px;
  background-color: #ee2a7b;
  border-radius: 100%;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

<script>
import Menu from "../Menu/Menu";
import Shop from "../Shop/Shop.vue";

export default {
  name: "Home",

  components: {
    Menu,
    Shop,
  },
};
</script>