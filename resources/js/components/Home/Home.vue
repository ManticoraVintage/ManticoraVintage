<template>
  <div class="main">
    <h1 class="text-center">MANTICORA</h1>
    <div class="row">
      <div class="col-6 manticora-container">
        <div class="manticora-inner-container">
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
      </div>

      <!-- <div class="col-2 logo-divider-container">
         <i class="fab fa-xbox"></i>
      </div> -->
      <div class="col-6 zozobra-container">
        <div class="zozobra-inner-container">
          <img src="images/logo_zozobra.png" alt="logo_zozobra" />
          <button>
            <router-link
              class="d-flex justify-content-center align-content-center"
              :to="{
                name: 'Shop',
              }"
              >ZOZOBRA</router-link
            >
          </button>
        </div>
      </div>
    </div>

    <div class="footer-container">
      <p class="footer-text">
        Los dosmiles siempre han sido criticados en el mundo de la moda por sus
        combinaciones arriesgadas y conjuntos “estrambóticos”, pantalones de
        tiro bajo, mini-faldas, colores llamativos... Manticora tiene como meta
        traer de vuelta esa esencia descarada y provocativa, devolviendo el
        valor a todas esa marcas de ropa con estilo propio que fueron devoradas
        por multinacionales.
      </p>
    </div>
  </div>
</template>

<style lang="scss" scoped>
@mixin flex-center {
  display: flex;
  justify-content: center;
  align-items: center;
}
/* Main component style */
.main {
  width: 100%;
  background: black;
  height: 100vh;
  h1 {
    padding: 80px 0;
    color: #e2e2e2;
  }
  .manticora-container,
  .zozobra-container {
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
      a {
        text-decoration: none;
        color: #e2e2e2;
      }
    }
  }
  .manticora-container {
    display: flex;
    justify-content: flex-end;
    padding-right: 200px;
    .manticora-inner-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }
    img {
      width: 300px;
    }
  }
  .zozobra-container {
    display: flex;
    justify-content: flex-start;
    padding-left: 150px;
    .zozobra-inner-container {
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      align-items: center;
    }
    img {
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

  .col-6,
  .col-2 {
  }
  .footer-container {
    display: flex;
    justify-content: center;
    position: absolute;
    bottom: 40px;
    width: 100%;
    .footer-text {
      color: #e2e2e2;
      font-size: 13px;
      text-align: justify;
      width: 700px;
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
