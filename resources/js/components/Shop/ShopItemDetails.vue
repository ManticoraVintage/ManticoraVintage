<template>
    <div class="main" >
        <div class="main-container row">
            <div
                class="information-container d-flex justify-content-center flex-column col-12 col-sm-12 col-lg-6"
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
                        <span>{{ item[0].item.quality }}</span>
                    </div>
                    <br />

                    <div class="stock">
                        <span class="d-title">Available:</span>
                        <br />
                        <span>{{ item[0].available }}</span>
                    </div>
                    <br />
                </div>

                <div class="type-description" style="font-size:16px">
                    Los dosmiles siempre han sido criticados en el mundo de la
                    moda por sus combinaciones arriesgadas y conjuntos
                    “estrambóticos”; pantalones de tiro bajo, mini-faldas,
                    colores llamativos... Manticora.Vntg tiene como meta traer
                    de vuelta esa esencia descarada y provocativa, devolviendo
                    el valor a todas esa marcas de ropa con estilo propio que
                    fueron devoradas por multinacionales. Miss Sixty, Morgan de
                    toi, Lois, Baby Phat... Marcas que actualmente han perdido
                    todo lo que fueron para perderse en un estilo comercial y
                    descafeinado.<br />
                    Nuestra labor es encontrar esas piezas únicas que marcaron
                    una década, las cuales la mayoría fabricaban en sus paises
                    de origen ( y no en países donde predomina la producción
                    masiva o la explotación). Además, Manticora.vntg ofrece
                    también una selección de marcas de grandes diseñadores que
                    lo fueron todo en los dosmiles.
                    <br />
                    <br />
                    Manticora aposta por experimentar y dejar al lado los
                    estigmas creados por la ropa dividida por géneros y que cada
                    cual arriesgue y provoque como más le plazca.
                </div>
            </div>
            <div
                class="media-container col-12  col-sm-12 col-lg-6  d-flex justify-content-center align-items-center row"
            >
                <div class="img-1 col-12  col-md-12 col-xl-6">
                    <img
                        class="test"
                        :src="
                            `images/shop/${
                                item[0].item.photo.split(',')[0]
                            }.jpg`
                        "
                    />
                </div>
                <div class="img-2 col-12 col-md-12 col-xl-6">
                    <img
                        class="test"
                        :src="
                            `images/shop/${
                                item[0].item.photo.split(',')[1]
                            }.jpg`
                        "
                    />
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.main {
    width: 100vw;
    height: 100vh;
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
export default {
    name: "ShopItemDetails",

    data() {
        return {
            item: "",
            item_id: this.$route.params.id
        };
    },

    async mounted() {
        try {
            this.item = (await axios.get(`/api/shop/${this.item_id}`)).data;
            console.log(this.item);
        } catch (err) {
            console.log(err);
        }
    }
};
</script>
