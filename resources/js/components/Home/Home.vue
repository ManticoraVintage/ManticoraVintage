<template>
  <div class="main">
    <div class="row mb-4">
      <div
        class="col-12 col-xl-6 d-flex justify-content-end manticora-container"
      >
        <div class="flex-column manticora-inner-container">
          <img src="images/logo_manticora.jpg" alt="logo_manticora" />

          <router-link
            :to="{
              name: 'Shop',
            }"
            ><button>MANTICORA</button></router-link
          >
        </div>
      </div>
      <div
        class="col-12 col-xl-6 d-flex justify-content-start zozobra-container"
      >
        <div
          class="
            d-flex
            flex-column
            justify-content-between
            align-items-center
            zozobra-inner-container
          "
        >
          <img src="images/logo_zozobra.png" alt="logo_zozobra" />

          <router-link
            :to="{
              name: 'Shop',
            }"
            ><button>ZOZOBRA</button></router-link
          >
        </div>
      </div>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@mixin flex-center {
  display: flex;
  justify-content: center;
  align-items: center;
}

.main {
  @include flex-center();
  width: 100%;
  background: black;
  height: 100vh;
  overflow: hidden;
  .manticora-container,
  .zozobra-container {
    a {
      @include flex-center();
      text-decoration: none;
      color: #e2e2e2;
      button {
        margin-top: 70px;
        padding: 10px 50px;
        border: 1px solid #e2e2e2;
        transition: all 0.3s ease-in-out;
        color: #e2e2e2;
        background: transparent;
        width: 200px;
        &:hover {
          background: #ee2a7b;
        }
      }
    }
  }
  .manticora-container {
    padding-right: 200px;
    .manticora-inner-container {
      @include flex-center();
    }
    img {
      width: 300px;
    }
  }
  .zozobra-container {
    padding-left: 135px;
    .zozobra-inner-container img {
      padding-top: 70px;
      width: 400px;
    }
  }
  .logo-divider-container {
    @include flex-center();
    i {
      font-size: 50px;
      color: #e2e2e2;
    }
  }

  @media only screen and (max-width: 1200px) {
    .row {
      height: 100%;
      .zozobra-container,
      .manticora-container {
        padding: 0;
        justify-content: center !important;
        button {
          margin-top: 20px;
        }
      }
      .zozobra-container {
        .zozobra-inner-container {
          justify-content: initial !important;
          img {
            padding: 0;
          }
        }
      }
    }
  }
  @media only screen and (max-width: 768px) {
    .manticora-container,
    .zozobra-container {
      button {
        font-size: 16px;
      }
    }
    .manticora-container {
      img {
        width: 200px;
      }
    }
    .zozobra-container {
      img {
        width: 270px !important;
      }
    }
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
