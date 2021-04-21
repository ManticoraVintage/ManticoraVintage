<template>
  <div class="main">
    <header class="d-flex justify-content-between px-4 row">
      <div class="col-4 dropdowns-container d-flex">
        <div class="dropdown mx-2">
          <button
            class="btn btn-secondary dropdown-toggle"
            type="button"
            id="dropdownCategoryButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            {{ currentCategory ? currentCategory.name : "Category" }}
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
                    : false,
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
            class="btn btn-secondary dropdown-toggle"
            type="button"
            id="dropdownTypeButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            {{ currentType ? currentType.name : "Type" }}
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
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
            <div class="price">Quality: {{ item.quality }}</div>
            <div class="price">Made in {{ item.country }}</div>
            <div class="price">{{ item.size }}</div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<style scoped>
.main {
  padding: 100px 200px;
}
.items-row {
  margin-top: 100px;
}
.items-row img {
  height: 400px;
}
</style>

<script>
export default {
  //data to save response and add items to template
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
      (await axios.get(`/api/shop`)).data.forEach((element, i) => {
        this.items[i] = {...element, ...element.item};
        delete this.items[i].item;
        delete this.items[i].id;
      });
      console.log(this.items)
      this.categories = (await axios.get(`/api/categories`)).data;
      this.types = (await axios.get(`/api/types`)).data;
    } catch (err) {
      console.log(err);
    }
  },
  methods: {
    async getFilteredItems() {
      const url = `/api/shop/category/${
        this.currentCategory ? this.currentCategory.id : 'null'
      }/type/${this.currentType ? this.currentType.id : 'null'}`;

      this.items = (await axios.get(url)).data;
    },
    setCurrentCategory(category) {
      this.currentCategory = category;
    },
    setCurrentType(type) {
      this.currentType = type;
    },
  },
};
</script>