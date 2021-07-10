<template>
  <div class="main d-flex">
    <Login></Login>
    <div class="vertical-navbar d-flex flex-column">
      <div class="main-title d-flex justify-content-center align-items-center">
        Manticora Vintage Administration
      </div>
      <div class="profile-details">
        <div class="profile-image"></div>
      </div>
      <div class="vertical-navbar-menu d-flex flex-column align-items-center">
        <ul
          class="
            dashboard-options
            d-flex
            align-items-center
            justify-content-center
          "
          style="margin: 20px 0"
        >
          <li>Dashboard</li>
        </ul>

        <ul
          class="
            vertical-navbar-options
            d-flex
            flex-column
            align-items-center
            justify-content-center
          "
          style="width: 100%"
        >
          <li
            class="
              left-menu-list
              d-flex
              justify-content-center
              align-items-center
            "
            v-on:click="openTab(0)"
          >
            View All
          </li>
          <li
            class="
              left-menu-list
              d-flex
              justify-content-center
              align-items-center
            "
            v-on:click="openTab(1)"
          >
            Modify
          </li>
          <li
            class="
              left-menu-list
              d-flex
              justify-content-center
              align-items-center
            "
            v-on:click="openTab(2)"
          >
            Delete
          </li>
          <li
            class="
              left-menu-list
              d-flex
              justify-content-center
              align-items-center
            "
            v-on:click="openTab(3)"
          >
            Insert
          </li>
        </ul>
      </div>
    </div>

    <div class="information-container d-flex flex-column">
      <modal-vue
        class="deletePopup"
        @on-close="$vm2.close('modal-1')"
        name="modal-1"
        :headerOptions="{
          title: 'Want to delete this item?',
        }"
        :footerOptions="{
          btn1: 'Cancel',
          btn2: 'Delete',
          btn2Style: {
            backgroundColor: 'red',
          },
          btn2OnClick: () => {
            doDelete();
          },
          btn1OnClick: () => {
            $vm2.close('modal-1');
          },
        }"
      >
        This process cannot be undone
      </modal-vue>

      <div
        class="
          information-title-container
          d-flex
          justify-content-center
          align-items-center
        "
      >
        <h1>Estadisticas Manticora Vintage</h1>
      </div>
      <div class="chart-container d-flex justify-content-around d-none">
        <div class="chart"></div>
        <div class="chart"></div>
        <div class="chart"></div>
      </div>

      <div class="table-container">
        <form
          v-if="!isInsertActive"
          class="form-inline d-flex justify-content-end align-items-center"
        >
          <input
            style="height: 35px; width: 200px; margin: 10px 0px"
            class="form-control mr-sm-2"
            type="search"
            placeholder="Search"
            aria-label="Search"
            v-model="itemSearched"
          />
          <button
            style="height: 35px; padding: 0px 20px; margin-right: 30px"
            class="btn btn-outline-success my-2 my-sm-0"
            type="submit"
          >
            Search
          </button>
        </form>
        <div class="view-all-table" v-bind:class="{ active: isViewAllActive }">
          <div class="table-head">
            <table class="table table-hover">
              <thead class="thead-light">
                <tr class="d-flex">
                  <th scope="col" style="width: 100px">ID</th>
                  <th scope="col" style="width: 300px">NOMBRE</th>
                  <th scope="col" style="width: 100px">PRECIO</th>
                  <th scope="col" style="width: 100px">SIZE</th>
                  <th scope="col" style="width: 130px">QUALITY</th>
                  <th scope="col" style="width: 150px">COUNTRY</th>
                  <!-- <th scope="col" style="width: 100px">STOCK</th> -->
                  <th scope="col" style="width: 150px">THUMBNAIL</th>
                  <th scope="col" style="width: 150px">CATEGORIA</th>
                  <th scope="col" style="width: 150px">TIPO</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="table-body">
            <table>
              <tbody>
                <tr v-for="(cloth, index) in filteredList" :key="index">
                  <td style="width: 100px">
                    {{ cloth.item.id }}
                  </td>
                  <td style="width: 300px">
                    {{ cloth.item.name }}
                  </td>
                  <td style="width: 100px">{{ cloth.price }}€</td>
                  <td style="width: 100px">
                    {{ cloth.size }}
                  </td>
                  <td style="width: 130px">
                    {{ cloth.item.quality }}
                    <i class="fas fa-star"></i>
                  </td>
                  <td style="width: 150px">
                    {{ cloth.item.country }}
                  </td>

                  <td style="width: 150px">
                    <img
                      class="thumbnail"
                      :src="`images/shop/${cloth.item.photo.split(',')[1]}.jpg`"
                    />
                  </td>

                  <td style="width: 150px">
                    {{ cloth.item.category_id }}
                  </td>

                  <td v-if="cloth.item.type_id === 1">VINTAGE</td>
                  <td v-if="cloth.item.type_id === 2">SELECTED</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div
          class="modify-table"
          style="display: none"
          v-bind:class="{ active: isModifyActive }"
        >
          <div class="table-head">
            <table class="table table-hover">
              <thead class="thead-light">
                <tr class="d-flex">
                  <th scope="col">MODIFY</th>
                  <th scope="col">name</th>
                  <th scope="col">price</th>
                  <th scope="col">available</th>
                  <th scope="col">photo</th>
                  <th scope="col">categoryid</th>
                  <th scope="col">typeid</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="table-body">
            <table>
              <tbody>
                <tr v-for="(cloth, index) in items" :key="index">
                  <td>{{ cloth.id }}</td>
                  <td>{{ cloth.name }}</td>
                  <td>{{ cloth.price }}</td>
                  <td>{{ cloth.available }}</td>
                  <td>
                    {{ cloth.photo }}
                  </td>
                  <td>{{ cloth.category_id }}</td>
                  <td>{{ cloth.type_id }}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div
          class="delete-table"
          style="display: none"
          v-bind:class="{ active: isDeleteActive }"
        >
          <div class="table-head">
            <table class="table table-hover">
              <thead class="thead-light">
                <tr class="d-flex">
                  <th scope="col" style="width: 100px">ID</th>
                  <th scope="col" style="width: 300px">NOMBRE</th>
                  <th scope="col" style="width: 100px">PRECIO</th>
                  <th scope="col" style="width: 100px">SIZE</th>
                  <th scope="col" style="width: 130px">QUALITY</th>
                  <th scope="col" style="width: 150px">COUNTRY</th>
                  <!-- <th scope="col" style="width: 100px">STOCK</th> -->
                  <th scope="col" style="width: 150px">THUMBNAIL</th>
                  <th scope="col" style="width: 150px">CATEGORIA</th>
                  <th scope="col" style="width: 150px">TIPO</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="table-body">
            <table>
              <tbody>
                <tr v-for="(cloth, index) in filteredList" :key="index">
                  <td style="width: 100px">
                    {{ cloth.item.id }}
                  </td>
                  <td style="width: 300px">
                    {{ cloth.item.name }}
                  </td>
                  <td style="width: 100px">{{ cloth.price }}€</td>
                  <td style="width: 100px">
                    {{ cloth.size }}
                  </td>
                  <td style="width: 130px">
                    {{ cloth.item.quality }}
                    <i class="fas fa-star"></i>
                  </td>
                  <td style="width: 150px">
                    {{ cloth.item.country }}
                  </td>

                  <td style="width: 150px">
                    <img
                      class="thumbnail"
                      :src="`images/shop/${cloth.item.photo.split(',')[1]}.jpg`"
                    />
                  </td>

                  <td style="width: 150px">
                    {{ cloth.item.category_id }}
                  </td>

                  <td v-if="cloth.item.type_id === 1">VINTAGE</td>
                  <td v-if="cloth.item.type_id === 2">SELECTED</td>
                  <td>
                    <button
                      class="remove-button"
                      v-on:click="showDeletePopup(cloth.item.id, index)"
                    >
                      REMOVE
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div
          class="insert-table"
          style="display: none"
          v-bind:class="{ active: isInsertActive }"
        >
          <div>
            <label for="name">Name</label>
            <input v-model="itemToAdd.name" type="text" name="name" />
          </div>
          <div>
            <label for="price">Price</label>
            <input v-model="itemToAdd.price" type="text" name="price" />
          </div>
          <div>
            <label for="size">Size</label>
            <input type="text" v-model="itemToAdd.size" name="size" />
          </div>
          <div>
            <label for="quality">Quality</label>
            <input type="text" name="quality" v-model="itemToAdd.quality" />
          </div>
          <div>
            <label for="country">Country</label>
            <input type="text" name="country" v-model="itemToAdd.country" />
          </div>
          <div>
            <label for="photoName">Photo name</label>
            <input
              type="text"
              name="photoName"
              v-model="itemToAdd.photo_name"
            />
          </div>
          <div>
            <label for="photoName">URL</label>
            <input type="text" name="url" v-model="itemToAdd.url" />
          </div>
          <div>
            <label for="available"
              >Available: Yes<input
                type="radio"
                name="available"
                value="1"
                v-model="itemToAdd.available" />No<input
                v-model="itemToAdd.available"
                type="radio"
                name="available"
                value="0"
            /></label>
          </div>
          <div>
            <label for="categoryDropdown">Category</label>
            <select
              name="categoryDropdown"
              id="categoryDropdown"
              v-model="itemToAdd.category"
            >
              <option value="">--Select the category--</option>
              <option
                :value="category.name"
                v-for="(category, index) in categories"
                :key="index"
              >
                {{ category.name }}
              </option>
            </select>
          </div>
          <div>
            <label for="typeDropdown">Type</label>
            <select
              name="typeDropdown"
              id="typeDropdown"
              v-model="itemToAdd.type"
            >
              <option value="">--Selecciona the type--</option>
              <option
                :value="type.name"
                v-for="(type, index) in types"
                :key="index"
              >
                {{ type.name }}
              </option>
            </select>
          </div>
          <button v-on:click="addItem()">Add Item</button>
        </div>
        <p>{{ showRequestStatus() }}</p>
      </div>
    </div>
  </div>
</template>

<style scoped>
* {
  font-family: "Roboto" !important;
  margin: 0;
  padding: 0;
}

.main-title {
  font-weight: 700;
  color: white;
  padding: 10px;
  width: 100%;
  font-size: 16px;
  position: relative;
}

/* Vertical Navbar */

.vertical-navbar {
  height: 100%;
  width: 275px;
  border-right: 1px solid #ee2a7b;
  background-color: #ee2a7b;
  position: fixed;
  z-index: 2;
}

.profile-details {
  height: 250px;
  width: 100%;
}

.dashboard-options {
  width: 100%;
}

.vertical-navbar-menu {
  height: calc(100% - 250px);
  width: 100%;
  background-color: rgb(240, 240, 240);
}
.left-menu-list {
  padding: 10px;
  border-bottom: 1px solid #ee2a7b;
  width: 100%;
}
.left-menu-list:hover {
  cursor: pointer;
  background-color: #ee2a7b;
  color: white;
}

/* Information container */

.information-container {
  position: absolute;
  padding: 20px;
  top: 0px;
  left: 275px;
  width: calc(100% - 300px);
  height: 100vh;
  margin: 0 auto;
  z-index: -1;
}

.delete-table,
.modify-table,
.view-all-table {
  transition: 0.5s ease ease-in-out;
}

.information-title-container,
.chart-container {
  width: 100%;
}

.chart {
  width: 250px;
  height: 250px;
  background-color: #f522e4;
}

/* View All Table */

.view-all-table {
  display: none;
}

.thumbnail {
  width: 50px;
}

input {
  border: 1px solid black;
}

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

.modify-table {
  display: none;
}

.table-container {
  border: 2px solid rgb(221, 221, 221);
  margin: 50px auto;
}

.table-header {
  overflow: hidden;
  width: 100%;
}

.table-body {
  height: 680px;
  width: 100%;
  overflow: auto;
}

th,
td {
  padding: 20px !important;
  border-color: 2px solid rgb(221, 221, 221);
}

tr:hover {
  background-color: #acacac;
}

.active {
  display: block !important;
  transition: 0.5s ease ease-in-out;
}

.modal-body {
  padding: 20px;
}

.remove-button {
  width: 100%;
  border-radius: 3px;
  padding: 8px;
  background-color: #ee2a7b;
  color: white;
}
</style>

<script>
import Login from "../Login/Login";

export default {
  name: "Admin",

  components: {
    Login,
  },

  data() {
    return {
      items: [],
      categories: null,
      types: null,
      isViewAllActive: true,
      isModifyActive: false,
      isDeleteActive: false,
      isInsertActive: false,
      tabType: 0,
      selectedId: 0,
      selectedIndex: 0,
      itemSearched: null,
      cloth: null,
      itemToAdd: {
        name: null,
        price: null,
        size: null,
        quality: null,
        country: null,
        photo_name: null,
        url: null,
        available: null,
        category: null,
        type: null,
      },
      request_status: null,
    };
  },

  async mounted() {
    try {
      this.items = (await axios.get(`/api/shop`)).data;
      console.log(this.items);
      this.categories = (await axios.get(`/api/categories`)).data;
      console.log(this.categories);
      this.types = (await axios.get(`/api/types`)).data;
      console.log(this.types);
    } catch (err) {
      console.log(err);
    }
  },

  methods: {
    openTab: function (tabType) {
      switch (tabType) {
        case 0:
          this.isViewAllActive = true;
          this.isModifyActive = false;
          this.isDeleteActive = false;
          this.isInsertActive = false;
          break;
        case 1:
          this.isViewAllActive = false;
          this.isModifyActive = true;
          this.isDeleteActive = false;
          this.isInsertActive = false;
          break;
        case 2:
          this.isViewAllActive = false;
          this.isModifyActive = false;
          this.isDeleteActive = true;
          this.isInsertActive = false;
          break;
        case 3:
          this.isViewAllActive = false;
          this.isModifyActive = false;
          this.isDeleteActive = false;
          this.isInsertActive = true;
          break;
      }
    },

    showDeletePopup: function (id, index) {
      this.$vm2.open("modal-1");
      this.selectedId = id;
      this.selectedIndex = index;
    },

    async addItem() {
      try {
        const response = await axios.post("api/admin", this.itemToAdd);
        this.request_status = response.status;
        console.log(response);
      } catch (error) {
        this.request_status = error;
        console.log(error);
      }
    },

    doDelete: function () {
      axios
        .post(`api/admin/${this.selectedId}`)
        .then((response) => console.log(response.data, "de locos"))
        .catch((error) => console.log(error.response.data));
      this.items.splice(this.selectedIndex, 1);

      this.$vm2.close("modal-1");
    },
    showRequestStatus() {
      if (this.request_status) {
        return this.request_status === 201
          ? "Item added to the database"
          : this.request_status;
      }
    },
  },
  computed: {
    filteredList() {
      if (this.itemSearched) {
        return this.items.filter((cloth) => {
          return cloth.item.name
            .toLowerCase()
            .includes(this.itemSearched.toLowerCase());
        });
      }
      return this.items;
    },
  },
};
</script>
