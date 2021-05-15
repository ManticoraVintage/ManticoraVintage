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
        <header class="d-flex justify-content-between px-4 row">
            <div
                class="col-12 col-sm-4 col-md-4 order-md-1 order-2 order-sm-1 dropdowns-container d-flex"
            >
                <div class="dropdown mx-2">
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
                        <span
                            class="dropdown-item"
                            @click="
                                setCurrentCategory(null);
                                getFilteredItems();
                            "
                            :class="{ active: !currentCategory }"
                            >All</span
                        >
                        <hr />
                        <span
                            v-for="category in categories"
                            :key="category.id"
                            class="dropdown-item"
                            :class="{
                                active:
                                    currentCategory !== null
                                        ? currentCategory.name === category.name
                                        : false
                            }"
                            @click="
                                setCurrentCategory(category);
                                getFilteredItems();
                            "
                            >{{ category.name }}</span
                        >
                    </div>
                </div>
                <div class="dropdown mx-2">
                    <button
                        class="btn btn-secondary dropdown-toggle category-dropdown"
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
                        <span
                            class="dropdown-item"
                            @click="
                                setCurrentType(null);
                                getFilteredItems();
                            "
                            :class="{ active: !currentType }"
                            >All</span
                        >
                        <hr />
                        <span
                            v-for="type in types"
                            :key="type.id"
                            class="dropdown-item"
                            :class="{
                                active:
                                    currentType !== null
                                        ? currentType.name === type.name
                                        : false
                            }"
                            @click="
                                setCurrentType(type);
                                getFilteredItems();
                            "
                            >{{ type.name }}</span
                        >
                    </div>
                </div>
            </div>
            <div
                class="col-12 col-sm-4 col-md-4 col-xs-12 order-sm-2 order-md-2 order-1 mx-100 text-center text-container"
            >
                <h4>
                    {{ currentType ? currentType.name : "EVERY COLLECTION" }}
                </h4>
                <h6>
                    {{ currentCategory ? currentCategory.name : "ALL ITEMS" }}
                </h6>
            </div>
            <nav
                class="col-12 col-md-4 col-sm-4 order-3 col-xs-12 navbar navbar-light align-items-start p-0 search-container"
            >
                <form class="form-inline d-flex">
                    <input
                        class="form-control mr-sm-2"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                        v-model="itemSearched"
                    />
                    <button
                        class="btn btn-outline-success my-2 my-sm-0"
                        type="submit"
                    >
                        Search
                    </button>
                </form>
            </nav>
        </header>
        <section>
            <div class="row items-row">
                <div
                    class="col-lg-4 col-md-6 col-sm-12 item"
                    v-for="(item, key) in items"
                    :key="item.id"
                >
                    <!--  -->
                    <div
                        class="d-flex justify-content-center justify-content-md-start"
                        style="margin-top:20px"
                    >
                        <img
                            class="test"
                            :src="
                                hovered === key
                                    ? `images/shop/${
                                          item.photo.split(',')[1]
                                      }.jpg`
                                    : `images/shop/${
                                          item.photo.split(',')[0]
                                      }.jpg`
                            "
                            @mouseover="hovered = key"
                            @mouseleave="hovered = null"
                        />
                    </div>
                    <div class="itemData d-flex align-items-start flex-column">
                        <div class="item-info-container">
                            <div class="itemName">{{ item.name }}</div>
                            <div class="price">{{ item.price }}€</div>
                            <div class="country">
                                Made in {{ item.country }}
                            </div>
                            <div class="size">{{ item.size }}</div>
                            <div class="d-flex align-items-center quality">
                                Quality
                                <i
                                    v-for="i in item.quality"
                                    :key="i"
                                    class="fas fa-star"
                                ></i>
                            </div>
                            <div v-if="item.type_id === 2">
                                SELECTED <i class="fas fa-fire"></i>
                            </div>
                            <div v-if="!item.available">
                                <div v-if="item.type_id === 3">
                                    OUT OF STOCK
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <div v-else>
                                    SOLD OUT
                                    <i class="fas fa-shopping-basket"></i>
                                </div>
                            </div>
                        </div>
                        <router-link
                            class="d-flex justify-content-center align-items-center detail-button"
                            :to="{
                                name: 'ShopItemDetails',
                                params: { id: item.item_id }
                            }"
                            >DETAILS</router-link
                        >
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
    background: #f2f3f5;
}

.items-row {
    margin-top: 100px;
}

.test:hover {
    transition: 0.1s ease-in-out;
    cursor: pointer;
}

.carousel {
    width: 100vw;
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
    height: 900px; /*Media query añadir */
    max-height: 100vh;
    margin: 0 auto;
}

/* Header */

header {
    max-width: 1250px;
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
    background: #ee2a7b;
    border: 1px solid #ee2a7b;
    color: white;
    box-shadow: none !important;
}

.dropdown-item.active {
    background: #ee2a7b;
}

.dropdown-item:hover {
    background: #ee2a7b;
    color: white;
}

.dropdowns-container {
    margin: 10px 0px;
}

.dropdown-menu span {
    cursor: pointer;
}

.text-container {
    margin-top: 10px;
}

.search-container {
    margin-top: 10px;
    justify-content: flex-end;
}

.detail-button {
    background-color: #ee2a7c1e;
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    transition: 0.5s cubic-bezier(0.075, 0.82, 0.165, 1);
}

.detail-button:hover {
    color: white;
    background-color: #ee2a7c;
}

/* search filter */

input,
form button {
    margin-left: 10px;
}

input:focus,
input:active {
    box-shadow: none !important;
    border: 1px solid #ee2a7b;
}

form button {
    background: transparent;
    border: 1px solid #3a3a3a;
    color: #3a3a3a;
}

form button:focus,
form button:active,
form button:hover {
    background: #ee2a7b;
    border: 1px solid #ee2a7b;
    color: white;
    box-shadow: none !important;
}

/* Items */

.items-row {
    margin-top: 100px;
    max-width: 1250px;
    margin: 0 auto;
}

.items-row img {
    margin: 5px 0px;
    height: 450px;
    width: auto;
}
.items-section span {
    font-size: 30px;
    margin-bottom: 50px;
}
.items-section .fa-tshirt {
    font-size: 140px;
    color: #a5a5a577;
}

.item-info-container {
    min-width: 300px;
    min-height: 170px;
}
.fas {
    color: #ee2a7b;
    margin-left: 5px;
}

.itemName {
    color: #8a8a8a;
}

.price {
    font-weight: bold;
}

.country {
}

.quality {
}

.size {
    font-weight: bold;
}

@media (max-width: 1066px) {
    .carousel {
        height: auto;
        margin-top: 40px;
    }
    .slider-image {
        height: 450px;
    }
    .dropdowns-container {
        justify-content: center;
    }
    .search-container {
        justify-content: center;
        align-items: center;
    }
}

@media (max-width: 786px) {
    .slider-image {
        height: 250px;
    }
    .dropsdown-content {
        justify-content: center;
    }
    .search-container {
        justify-content: center;
        align-items: center;
    }
}
</style>

<script>
import { Carousel, Slide } from "vue-carousel";
import ShopItemDetails from "./ShopItemDetails";

export default {
    data() {
        return {
            items: [],
            categories: null,
            currentCategory: null,
            types: null,
            currentType: null,
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
                "images/main_slider/03-32.jpg"
            ],
            hoverState: 0,
            hovered: null,
            shownImage: "",
            shopImages: [],
            imagesFormatted: [],
            itemSearched: null
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
        async fetchItemData(url) {
            return (await axios.get(url)).data.map(element => {
                // We merge nested objects for easier access to item properties
                element = {
                    ...element,
                    ...element.item,
                    ...element.item_attributes?.[0]
                };
                delete element.item;
                delete element.item_attributes;
                delete element.id;
                return element;
            });
        },

        setCurrentCategory(category) {
            this.currentCategory = category;
        },
        setCurrentType(type) {
            this.currentType = type;
        }
    },

    computed: {
        filteredList() {
            if (this.itemSearched) {
                return this.items.filter(item => {
                    return item.name
                        .toLowerCase()
                        .includes(this.itemSearched.toLowerCase());
                });
            }
            return this.items;
        }
    },

    components: {
        Carousel,
        Slide,
        ShopItemDetails
    }
};
</script>
