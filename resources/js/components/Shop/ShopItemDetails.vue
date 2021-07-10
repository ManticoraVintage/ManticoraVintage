<template>
  <div class="main">
    <Logo></Logo>
    <div class="main-container row">
      <div
        class="
          information-container
          d-flex
          justify-content-center
          flex-column
          col-12 col-sm-12 col-lg-6
        "
      >
        <div class="title">
          <h1>{{ item[0].item.name }}</h1>
          <h4>Pants</h4>
          <!-- If selected -->
        </div>

        <div class="details">
          <div class="size">
            <span class="d-title">Size:</span>
            <br />
            <span>{{ item[0].size }}</span>
          </div>
          <br />
          <div class="quality">
            <span class="d-title"> Quality: </span>
            <br />

            <span>{{ item[0].item.quality }} <i class="fas fa-star"></i></span>
          </div>
          <br />

          <div class="price">
            <span class="d-title">Price:</span>
            <br />
            <span>{{ item[0].price }}€</span>
          </div>
          <div class="collection">
            <br />
            <span class="d-title">Collection:</span>
            <br />
            <span v-if="item[0].item.type_id === 1"> VINTAGE </span>
            <span v-if="item[0].item.type_id === 2"> SELECTED </span>
          </div>

          <br />
        </div>

        <div class="type-description" style="font-size: 16px">
          Los dosmiles siempre han sido criticados en el mundo de la moda por
          sus combinaciones arriesgadas y conjuntos “estrambóticos”; pantalones
          de tiro bajo, mini-faldas, colores llamativos... Manticora.Vntg tiene
          como meta traer de vuelta esa esencia descarada y provocativa,
          devolviendo el valor a todas esa marcas de ropa con estilo propio que
          fueron devoradas por multinacionales. Miss Sixty, Morgan de toi, Lois,
          Baby Phat... Marcas que actualmente han perdido todo lo que fueron
          para perderse en un estilo comercial y descafeinado.<br />
          Nuestra labor es encontrar esas piezas únicas que marcaron una década,
          las cuales la mayoría fabricaban en sus paises de origen ( y no en
          países donde predomina la producción masiva o la explotación). Además,
          Manticora.vntg ofrece también una selección de marcas de grandes
          diseñadores que lo fueron todo en los dosmiles.
          <br />
          <br />
          Manticora aposta por experimentar y dejar al lado los estigmas creados
          por la ropa dividida por géneros y que cada cual arriesgue y provoque
          como más le plazca.
        </div>
        <div class="cta-container">
          <router-link
            class="
              text-center
              detail-button
              order-5
            "
            :to="{
              name: 'Shop',
            }"
            ><i class="fas fa-arrow-left"></i>
          </router-link>
          <a
            class="
              text-center
              detail-button
              order-5
            "
            :href="item[0].url"
            target="_blank"
          >
            BUY<i class="fas fa-shopping-cart"></i>
          </a>
        </div>
      </div>
      <div
        class="
          media-container
          col-12 col-sm-12 col-lg-6
          d-flex
          justify-content-center
          align-items-center
          row
          order-4
        "
      >
        <div class="img-1 col-12 col-md-12 col-xl-6">
          <img
            class="test"
            :src="`images/shop/${item[0].item.photo.split(',')[0]}.jpg`"
          />
        </div>
        <div class="img-2 col-12 col-md-12 col-xl-6">
          <img
            class="test"
            :src="`images/shop/${item[0].item.photo.split(',')[1]}.jpg`"
          />
        </div>
      </div>
    </div>
  </div>
</template>
<style lang="scss" scoped>
.main {
  width: 100vw;
  min-height: 100vh;
}
.main-container {
  height: 100%;
  width: 100%;
  margin: 0 auto;
}

.information-container {
  height: 100%;
  padding: 75px;
}
.media-container {
  height: 100%;
  padding: 75px;
  margin: 0 auto;
}

.details {
  margin-top: 50px;
}

.cta-container {
  max-height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 25px;
  .detail-button {
    background-color: #ee2a7c1e;
    width: 100%;
    padding: 10px;
    transition: 0.5s cubic-bezier(0.075, 0.82, 0.165, 1);
    height: 100%;
  }
  .detail-button:hover {
    color: white;
    background-color: #ee2a7c;
  }
  .detail-button:hover .fas {
    color: white;
  }
}

.fas {
  color: #ee2a7b;
  margin-left: 5px;
  width: 18px;
  height: 18px;
}

img {
  width: 100%;
  margin-top: 10px;
}

.d-title,
.title h1 {
  font-weight: bold;
  color: #ee2a7b;
}

@media (max-width: 786px) {
  .main {
    height: auto;
  }
  .information-container,
  .media-container {
    padding: 10px;
  }
}
</style>
<script>
import Logo from "../Logo/Logo";
export default {
  name: "ShopItemDetails",

  data() {
    return {
      item: [],
      item_id: this.$route.params.id,
    };
  },
  components: {
    Logo,
  },

  async mounted() {
    try {
      this.item = (await axios.get(`/api/shop/${this.item_id}`)).data;
      console.log(this.item);
    } catch (err) {
      console.log(err);
    }
  },
};
</script>
