<template>
  <div class="main">
    <h1 class="text-center">MANTICORA</h1>
    <div class="row">
      <div
        class="
          col-5
          d-flex
          justify-content-center
          align-items-center
          flex-column
          manticora-container
        "
      >
        <img src="images/logo_manticora.jpg" alt="logo_manticora" />
        <button>
          <router-link
            class="d-flex justify-content-center align-content-center"
            :to="{
              name: 'Shop',
            }"
            >MANTICORA</router-link
          >
        </button>
      </div>
      <div class="col-2"><img src="images/output-onlinepngtools.png" alt="and"></div>
      <div class="col-5"></div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
/* Main component style */
.main {
  width: 100%;
  background: black;
  height: 100vh;
  h1 {
    padding-top: 90px;
    color: rgb(218, 218, 218);
  }
  .manticora-container {
    button {
      margin-top: 70px;
      padding: 10px 50px;
      border: 1px solid white;
      transition: all 0.3s ease-in-out;
      color: white;
      background: transparent;
      &:hover {
        background: #ee2a7b;
      }
      a{
          text-decoration: none;
          color: white;
      }
    }
    img {
      width: 300px;
    }
  }

  .col-5,
  .col-2 {
    border: 1px solid blue;
  }

  .shop-button {
    width: 200px;
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
    Shop,
  },
};
</script>
