<template>
    <div class="main">
        <div class="carousel-container">
            <carousel
                class="carousel"
                :autoplay="true"
                :loop="true"
                :autoplayTimeout="5000"
                :centerMode="true"
                :perPage="1"
                :autoplayHoverPause="false"
                :adjustableHeight="true"
                :speed="1000"
                :paginationSize="0"
                :touchDrag="false"
                :mouseDrag="false"
            >
                <slide
                    v-for="(image, index) in images"
                    :key="index"
                    class="slide"
                    ><div class="slide-img">
                        <img class="slider-image" :src="image" /></div
                ></slide>
            </carousel>
        </div>
        <header class="d-flex justify-content-around px-4 row">
            <div class="col-4 dropdowns-container d-flex">
                <div class="dropdown mx-2 ">
                    <button
                        class="btn btn-secondary dropdown-toggle category-dropdown"
                        type="button"
                        id="dropdownCategoryButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        {{
                            currentCategory ? currentCategory.name : "Category"
                        }}
                    </button>
                    <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                    >
                        <a
                            class="dropdown-item"
                            href="#"
                            @click="
                                setCurrentCategory(null);
                                getFilteredItems();
                            "
                            :class="{ active: !currentCategory }"
                            >All</a
                        >
                        <hr />
                        <a
                            v-for="category in categories"
                            :key="category.id"
                            class="dropdown-item"
                            :class="{
                                active:
                                    currentCategory !== null
                                        ? currentCategory.name === category.name
                                        : false
                            }"
                            href="#"
                            @click="
                                setCurrentCategory(category);
                                getFilteredItems();
                            "
                            >{{ category.name }}</a
                        >
                    </div>
                </div>
                <div class="dropdown mx-2">
                    <button
                        class="btn btn-secondary dropdown-toggle filter-dropdown"
                        type="button"
                        id="dropdownTypeButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    >
                        {{ currentType ? currentType.name : "Type" }}
                    </button>
                    <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownMenuButton"
                    >
                        <a
                            class="dropdown-item"
                            href="#"
                            @click="
                                setCurrentType(null);
                                getFilteredItems();
                            "
                            :class="{ active: !currentType }"
                            >All</a
                        >
                        <hr />
                        <a
                            v-for="type in types"
                            :key="type.id"
                            class="dropdown-item"
                            :class="{
                                active:
                                    currentType !== null
                                        ? currentType.name === type.name
                                        : false
                            }"
                            href="#"
                            @click="
                                setCurrentType(type);
                                getFilteredItems();
                            "
                            >{{ type.name }}</a
                        >
                    </div>
                </div>
            </div>
            <div class="col-4 text-center">
                <h4>
                    {{ currentType ? currentType.name : "EVERY COLLECTION" }}
                </h4>
                <h6>
                    {{ currentCategory ? currentCategory.name : "ALL ITEMS" }}
                </h6>
            </div>
            <nav
                class="col-4 navbar navbar-light justify-content-end align-items-start p-0"
            >
            <hr />
            <a
              v-for="type in types"
              :key="type.id"
              class="dropdown-item"
              :class="{
                active:
                  currentType !== null ? currentType.name === type.name : false,
              }"
              href="#"
              @click="
                setCurrentType(type);
                getFilteredItems();
              "
              >{{ type.name }}</a
            >
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        <h4>{{ currentType ? currentType.name : "EVERY COLLECTION" }}</h4>
        <h6>{{ currentCategory ? currentCategory.name : "ALL ITEMS" }}</h6>
      </div>
      <nav
        class="col-4 navbar navbar-light justify-content-end align-items-start p-0"
      >
        <form class="form-inline d-flex">
          <input
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
            Search
          </button>
        </form>
      </nav>
    </header>
    <section>
      <div class="row items-row">
        <div class="col-4" v-for="item in items" :key="item.id">
          <div class="d-flex justify-content-center">
            <img src="images/fake_clothes/34GQ8uAugoE.jpg" alt="" />
          </div>
          <div class="itemData d-flex align-items-center flex-column">
            <div class="itemName">{{ item.name }}</div>
            <div class="price">{{ item.price }}€</div>
            <div class="country">Made in {{ item.country }}</div>
            <div class="size">{{ item.size }}</div>
            <div class="d-flex align-items-center">
              Quality
              <i v-for="i in item.quality" :key="i" class="fas fa-star"></i>
            </div>
            <div v-if="item.type_id === 1">
              SELECTED <i class="fas fa-fire"></i>
            </div>
            <div v-if="!item.available">
              <div v-if="item.type_id === 3">
                OUT OF STOCK <i class="fas fa-shipping-fast"></i>
              </div>
              <div v-else>SOLD OUT <i class="fas fa-shopping-basket"></i></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<style scoped>
.main {
    margin: 0 auto;
    padding: 0 5%;
}
.items-row {
    margin-top: 100px;
}

.carousel {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel-container {
    display: flex;
    justify-content: center;
    align-items: center;
    align-content: center;
}

.slide {
    margin: 0 auto;
}

.slide-img {
    /* background: url("../../../../public/images/main_slider/01-26.jpg"); */
    /* background-size: cover;
    background-size: 75%;
    background-position: center;
    background-repeat: no-repeat; */
    margin: 0 auto;
    display: flex;
}

.slider-image {
    max-width: 100%;
    height: 250px; /*Media query añadir */
    max-height: 100vh;
    margin: 0 auto;
} 

/* Header */

header {
    max-width: 1600px;
    margin: 0 auto;
    
}
/* Category Dropdown */

.category-dropdown,
.filter-dropdown {
    background: transparent;
    border: 1px solid #3a3a3a;
    color: #3a3a3a;
}

.category-dropdown:focus,
.category-dropdown:active,
.category-dropdown:hover,
.filter-dropdown:focus,
.filter-dropdown:active,
.filter-dropdown:hover {
    background: #f522e4;
    border: 1px solid #f522e4;
    color: white;
    box-shadow: none !important;
}

.dropdown-item.active {
    background: #f522e4;
}

.dropdown-item:hover {
    background: #f522e4;
    color: white;
}

/* search filter */

input,
form button {
    margin-left: 10px;
}

input:focus,
input:active {
    box-shadow: none !important;
    border: 1px solid #f522e4;
}

form button {
    background: transparent;
    border: 1px solid #3a3a3a;
    color: #3a3a3a;
}

form button:focus,
form button:active,
form button:hover {
    background: #f522e4;
    border: 1px solid #f522e4;
    color: white;
    box-shadow: none !important;
}

.items-row {
    margin-top: 100px;
}
.items-row img {
    margin: 30px 10px;
    height: 500px;
    width: auto;
}
.fas {
  color: #777777;
}
</style>

<script>
import { Carousel, Slide } from "vue-carousel";

export default {
  data() {
    return {
      items: [],
      categories: null,
      currentCategory: null,
      types: null,
      currentType: null,
    };
  },
  async mounted() {
    try {
      this.items = await this.fetchItemData("/api/shop");
      console.log(this.items);
      this.categories = (await axios.get(`/api/categories`)).data;
      this.types = (await axios.get(`/api/types`)).data;
    } catch (err) {
      console.log(err);
    }
  },
  methods: {
    async getFilteredItems() {
      const url = `/api/shop/category/${
        this.currentCategory ? this.currentCategory.id : "null"
      }/type/${this.currentType ? this.currentType.id : "null"}`;
      this.items = await this.fetchItemData(url);
      console.log(this.items);
    },
    components: {
        Carousel,
        Slide
    },

    async mounted() {
        try {
            this.items = (await axios.get(`/api/shop`)).data;
            this.categories = (await axios.get(`/api/categories`)).data;
            this.types = (await axios.get(`/api/types`)).data;
        } catch (err) {
            console.log(err);
        }
    },
  },
    data: () => ({
        images: [
            "images/main_slider/01-26.jpg",
            "images/main_slider/01-31.jpg",
            "images/main_slider/02-4.jpg",
            "images/main_slider/02-10.jpg",
            "images/main_slider/02-28.jpg",
            "images/main_slider/02-30.jpg",
            "images/main_slider/02-34.jpg",
            "images/main_slider/03-20.jpg",
            "images/main_slider/03-21.jpg",
            "images/main_slider/03-25.jpg",
            "images/main_slider/03-32.jpg",
          
            
        ]
    }),

    components: {
        Carousel,
        Slide
    },

    async mounted() {
        try {
            this.items = (await axios.get(`/api/shop`)).data;
            this.categories = (await axios.get(`/api/categories`)).data;
            this.types = (await axios.get(`/api/types`)).data;
        } catch (err) {
            console.log(err);
        }
    },
    methods: {
        async getFilteredItems() {
            const url = `/api/shop/category/${
                this.currentCategory ? this.currentCategory.id : "null"
            }/type/${this.currentType ? this.currentType.id : "null"}`;

            this.items = (await axios.get(url)).data;
        },
        setCurrentCategory(category) {
            this.currentCategory = category;
        },
        setCurrentType(type) {
            this.currentType = type;
        }
    }
};
</script>
