<template>
    <div class="main d-flex">
        <Login></Login>
        <div class="vertical-navbar d-flex flex-column">
            <div
                class="main-title d-flex justify-content-center align-items-center"
            >
                Manticora Vintage Administration
            </div>
            <div class="profile-details">
                <div class="profile-image"></div>
            </div>
            <div
                class="vertical-navbar-menu d-flex flex-column align-items-center"
            >
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
                        View All Cloth
                    </li>
                    <li
                        class="
              left-menu-list
              d-flex
              justify-content-center
              align-items-center
            "
                        v-on:click="openTab(5)"
                    >
                        View All Categories
                    </li>
                    <li
                        class="
              left-menu-list
              d-flex
              justify-content-center
              align-items-center
            "
                        v-on:click="openTab(0)"
                    >
                        View All Types
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
                    title: 'Want to delete this item?'
                }"
                :footerOptions="{
                    btn1: 'Cancel',
                    btn2: 'Delete',
                    btn2Style: {
                        backgroundColor: 'red'
                    },
                    btn2OnClick: () => {
                        doDelete();
                    },
                    btn1OnClick: () => {
                        $vm2.close('modal-1');
                    }
                }"
            >
                This process cannot be undone
            </modal-vue>
            <modal-vue
                class="deletePopup2"
                @on-close="$vm2.close('modal-2')"
                name="modal-2"
                :headerOptions="{
                    title: 'Want to delete this category?'
                }"
                :footerOptions="{
                    btn1: 'Cancel',
                    btn2: 'Delete',
                    btn2Style: {
                        backgroundColor: '#ee2a7b'
                    },
                    btn2OnClick: () => {
                        doDeleteCategory();
                    },
                    btn1OnClick: () => {
                        $vm2.close('modal-2');
                    }
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
            ></div>

            <div v-if="isTableActive" class="table-container">
                <div
                    class="menu-actions-container d-flex justify-content-between align-items-center"
                >
                    <h4 style="margin-left:20px; font-weight:bold;">
                        MANTICORA ITEM LIST
                    </h4>
                    <div
                        class="search-add-container d-flex justify-content-end align-items-center"
                    >
                        <form
                            class="form-inline d-flex justify-content-end align-items-center"
                        >
                            <input
                                style="height: 35px; width: 200px; margin: 10px 0px; padding:5px !important; border: 2px solid #ee2a7b;"
                                class="form-control mr-sm-2"
                                type="search"
                                placeholder="Search"
                                aria-label="Search"
                                v-model="itemSearched"
                            />
                        </form>

                        <div
                            class="insert-container d-flex justify-content-center align-items-start"
                            v-on:click="openTab(3)"
                        >
                            <i class="fas fa-plus-square fa-lg"></i>
                        </div>
                    </div>
                </div>

                <div
                    class="view-all-table"
                    v-bind:class="{ active: isViewAllActive }"
                >
                    <div class="table-head">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr class="d-flex">
                                    <th scope="col" style="width: 100px">ID</th>
                                    <th scope="col" style="width: 300px">
                                        NOMBRE
                                    </th>
                                    <th scope="col" style="width: 100px">
                                        PRECIO
                                    </th>
                                    <th scope="col" style="width: 100px">
                                        SIZE
                                    </th>
                                    <th scope="col" style="width: 130px">
                                        QUALITY
                                    </th>
                                    <th scope="col" style="width: 150px">
                                        COUNTRY
                                    </th>
                                    <!-- <th scope="col" style="width: 100px">STOCK</th> -->
                                    <th scope="col" style="width: 150px">
                                        THUMBNAIL
                                    </th>
                                    <th scope="col" style="width: 150px">
                                        CATEGORIA
                                    </th>
                                    <th scope="col" style="width: 150px">
                                        TIPO
                                    </th>
                                    <th scope="col" style="width: 150px">
                                        ACTION
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table-body">
                        <table>
                            <tbody>
                                <tr
                                    v-for="(cloth, index) in filteredList"
                                    :key="index"
                                >
                                    <td style="width: 100px">
                                        {{ cloth.item.id }}
                                    </td>
                                    <td style="width: 300px">
                                        {{ cloth.item.name }}
                                    </td>
                                    <td style="width: 100px">
                                        {{ cloth.price }}€
                                    </td>
                                    <td style="width: 100px">
                                        {{ cloth.size }}
                                    </td>
                                    <td style="width: 130px">
                                        {{ cloth.item.quality }}
                                        <i
                                            class="fas fa-star"
                                            style="color:#ee2a7b"
                                        ></i>
                                    </td>
                                    <td style="width: 150px">
                                        {{ cloth.item.country }}
                                    </td>

                                    <td style="width: 150px">
                                        <img
                                            class="thumbnail"
                                            :src="
                                                `images/shop/${
                                                    cloth.item.photo.split(
                                                        ','
                                                    )[1]
                                                }.jpg`
                                            "
                                        />
                                    </td>

                                    <td style="width: 150px">
                                        {{ cloth.item.category_id }}
                                    </td>

                                    <td v-if="cloth.item.type_id === 1">
                                        VINTAGE
                                    </td>
                                    <td v-if="cloth.item.type_id === 2">
                                        SELECTED
                                    </td>
                                    <td>
                                        <div class="buttons d-flex flex-row">
                                            <button
                                                class="action-button"
                                                v-on:click="
                                                    showDeletePopup(
                                                        cloth.item.id,
                                                        index
                                                    )
                                                "
                                            >
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <button class="action-button">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div
                v-if="isViewCategoryActive"
                class="table-container"
                style="width:575px"
            >
                <div
                    class="menu-actions-container d-flex justify-content-between align-items-center"
                >
                    <h4 style="margin-left:20px; font-weight:bold;">
                        MANTICORA ITEM LIST
                    </h4>
                    <div
                        class="search-add-container d-flex justify-content-end align-items-center"
                    >
                        <div
                            class="insert-container d-flex justify-content-center align-items-start"
                            v-on:click="openTab(3)"
                        >
                            <i class="fas fa-plus-square fa-lg"></i>
                        </div>
                    </div>
                </div>
                <div
                    class="view-all-table"
                    v-bind:class="{ active: isViewCategoryActive }"
                >
                    <div class="errorMsg" style="width:100%;">
                        {{ errorMsg }}
                        {{ responseMsg }}
                    </div>
                    <div class="table-head">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr class="d-flex">
                                    <th scope="col" style="width: 100px">ID</th>
                                    <th scope="col" style="width: 300px">
                                        NOMBRE
                                    </th>
                                    <th scope="col" style="width: 150px">
                                        ACTION
                                    </th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table-body">
                        <table>
                            <tbody>
                                <tr
                                    v-for="(category, index) in categories"
                                    :key="index"
                                >
                                    <td style="width: 100px">
                                        {{ category.id }}
                                    </td>
                                    <td style="width: 300px">
                                        {{ category.name }}
                                    </td>
                                    <td>
                                        <div class="buttons d-flex flex-row">
                                            <button
                                                class="action-button"
                                                v-on:click="
                                                    showDeletePopup2(
                                                        category.id,
                                                        index
                                                    )
                                                "
                                            >
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <button class="action-button">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div v-if="isInsertMenuActive">
                <div
                    class="insert-menu-option-container d-flex justify-content-center align-items-center flex-column"
                >
                    <div class="first-row">
                        <button
                            class="cloth-button"
                            v-bind:class="{ active: isInsertActive }"
                            v-on:click="openTab(1)"
                        >
                            INSERT CLOTH <i class="fas fa-tshirt"></i>
                        </button>
                        <button class="cloth-button" v-on:click="openTab(0)">
                            <i class="fas fa-sign-out-alt"></i>
                        </button>
                    </div>
                    <div class="second-row d-flex justify-content-arond">
                        <button
                            class="category-button"
                            v-bind:class="{ active: isCategoryInsertActive }"
                            v-on:click="openTab(2)"
                        >
                            INSERT CATEGORY <i class="fas fa-people-arrows"></i>
                        </button>
                        <button
                            class="type-button"
                            v-bind:class="{ active: isTypeInsertActive }"
                            v-on:click="openTab(4)"
                        >
                            INSERT TYPE <i class="fas fa-star"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div
                class="insert-table"
                style="display: none"
                v-bind:class="{ active: isInsertActive }"
            >
                <form
                    method="PUT"
                    class="form"
                    ref="insertClothForm"
                    @submit="preventSubmit"
                >
                    <h4
                        style="margin-botton:10px; width:100%; font-weight:bold;"
                    >
                        INSERT A NEW {{ insertItemTitle }}
                    </h4>
                    <div>
                        <label for="name">Name</label>
                        <input
                            v-model="itemToAdd.name"
                            type="text"
                            name="name"
                            required
                        />
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input
                            v-model="itemToAdd.price"
                            type="text"
                            name="price"
                            required
                        />
                    </div>
                    <div>
                        <label for="size">Size</label>
                        <input
                            type="text"
                            v-model="itemToAdd.size"
                            name="size"
                            required
                        />
                    </div>
                    <div>
                        <label for="quality">Quality</label>
                        <input
                            type="text"
                            name="quality"
                            v-model="itemToAdd.quality"
                            required
                        />
                    </div>
                    <div>
                        <label for="country">Country</label>
                        <input
                            type="text"
                            name="country"
                            v-model="itemToAdd.country"
                            required
                        />
                    </div>
                    <div>
                        <label for="photoName">Photo name</label>
                        <input
                            type="text"
                            name="photoName"
                            v-model="itemToAdd.photo_name"
                            required
                        />
                    </div>
                    <div>
                        <label for="photoName">URL</label>
                        <input
                            type="text"
                            name="url"
                            v-model="itemToAdd.url"
                            required
                        />
                    </div>
                    <div>
                        <label for="available">Available: </label>

                        <input
                            type="radio"
                            name="available"
                            value="1"
                            v-model="itemToAdd.available"
                        />
                        YES

                        <input
                            v-model="itemToAdd.available"
                            type="radio"
                            name="available"
                            value="0"
                        />
                        NO
                    </div>
                    <div>
                        <label for="categoryDropdown">Category</label>
                        <select
                            name="categoryDropdown"
                            id="categoryDropdown"
                            v-model="itemToAdd.category"
                            required
                        >
                            <option value="" selected
                                >--Select the category--</option
                            >
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
                            required
                            name="typeDropdown"
                            id="typeDropdown"
                            v-model="itemToAdd.type"
                        >
                            <option value="" selected
                                >--Selecciona the type--</option
                            >
                            <option
                                :value="type.name"
                                v-for="(type, index) in types"
                                :key="index"
                            >
                                {{ type.name }}
                            </option>
                        </select>
                    </div>
                    <div
                        class="button-container d-flex justify-content-between"
                    >
                        <button type="submit" v-on:click="addItem()">
                            Add Item
                        </button>
                        <button type="submit" v-on:click="openTab(3)">
                            Return
                        </button>
                    </div>
                </form>
                <p style="display:none;">{{ showRequestStatus() }}</p>
            </div>

            <div
                class="category-table"
                style="display: none"
                v-bind:class="{ active: isCategoryInsertActive }"
            >
                <form
                    method="PUT"
                    class="form"
                    ref="insertCategoryForm"
                    @submit="preventSubmit"
                >
                    <h4
                        style="margin-botton:10px; width:100%; font-weight:bold;"
                    >
                        INSERT A NEW {{ insertItemTitle }}
                    </h4>
                    <div>
                        <label for="name">Name</label>
                        <input
                            v-model="categoryToAdd.name"
                            type="text"
                            name="name"
                        />
                    </div>
                    <div
                        class="button-container d-flex justify-content-between"
                    >
                        <button type="submit" v-on:click="addCategory()">
                            Add Category
                        </button>
                        <button type="submit" v-on:click="openTab(3)">
                            Return
                        </button>
                    </div>
                </form>
               <p style="display:none;">{{ showRequestStatus() }}</p>
            </div>
            <div
                class="type-table"
                style="display: none"
                v-bind:class="{ active: isTypeInsertActive }"
            >
                <form
                    method="PUT"
                    class="form"
                    ref="insertTypeForm"
                    @submit="preventSubmit"
                >
                    <h4
                        style="margin-botton:10px; width:100%; font-weight:bold;"
                    >
                        INSERT A NEW {{ insertItemTitle }}
                    </h4>
                    <div>
                        <label for="name">Name</label>
                        <input
                            v-model="typeToAdd.name"
                            type="text"
                            name="name"
                        />
                    </div>
                    <div
                        class="button-container d-flex justify-content-between"
                    >
                        <button type="submit" v-on:click="addType()">
                            Add Type
                        </button>
                        <button type="submit" v-on:click="openTab(3)">
                            Return
                        </button>
                    </div>
                </form>
                 <p style="display:none;">{{ showRequestStatus() }}</p>
            </div>
        </div>
    </div>
</template>

<style scoped>
* {
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
    border-right: 2px solid #ee2a7b;
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
    font-weight: 900;
    border-bottom: 2px solid #ee2a7b;
    padding: 20px 5px;
    margin: 0 !important;
    font-size: 20px;
}

.vertical-navbar-options {
    font-weight: bold;
    color: rgb(79, 79, 79);
}

.vertical-navbar-menu {
    height: calc(100% - 250px);
    width: 100%;
    background-color: rgb(240, 240, 240);
}
.left-menu-list {
    padding: 10px;
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
    display: flex;
    justify-content: center;
}

.errorMsg {
    color: rgb(205, 38, 38);
    font-weight: bold;
    margin: 5px 10px !important;
    padding: 0 !important;
}

.responseMsg {
    color: rgb(58, 210, 42);
    font-weight: bold;
    margin: 5px 10px !important;
    padding: 0 !important;
}

.menu-actions-container {
    border-bottom: 2px solid #ee2a7b;
}

.category-button,
.cloth-button,
.type-button {
    padding: 12px;
    border-radius: 6px;
    border: 2px solid #ee2a7b;
    background: transparent;
    transition: 0.3s ease-in-out;
    color: #ee2a7b;
    font-weight: bold;
    font-size: 20px;
}

.category-button:hover,
.cloth-button:hover,
.type-button:hover {
    background: #ee2a7b;
    color: white;
}
.cloth-button {
    margin-bottom: 15px;
}

.category-button {
    margin-right: 5px;
}

.type-button {
    margin-left: 5px;
}
.menu-actions-container form {
    margin-right: 10px;
}

.insert-container {
    padding: 20px;
    border-left: 2px solid #ee2a7b;
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

/* Insert table */

.insert-table,
.category-table,
.type-table {
    margin: 0 auto;
    border: 2px solid #ee2a7b;
    padding: 25px 30px;
    border-radius: 7px;
    -webkit-box-shadow: 3px 4px 9px -2px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 3px 4px 9px -2px rgba(0, 0, 0, 0.75);
    box-shadow: 3px 4px 9px -2px rgba(0, 0, 0, 0.75);
}

.insert-table div,
.category-table div,
.type-table div {
    width: 100%;
    margin-top: 10px;
}

.insert-table div label,
.category-table div label,
.type-table div label {
    min-width: 100px;
    color: #ee2a7b;
    font-weight: bold;
}

.insert-table div input,
.category-table div input,
.type-table div input {
    border: 1px solid rgb(179, 179, 179);
    padding: 4px;
}

.insert-table div input:active,
.category-table div input:active,
.type-table div input:active {
    outline: 1px solid #ee2a7b;
}

.insert-table div input:focus,
.category-table div input:focus,
.type-table div input:focus {
    outline: 1px solid #ee2a7b;
}

.insert-table div input[type="radio"] {
    color: black;
}

.insert-table div select {
    margin-top: 10px;
}
.insert-table button,
.category-table button,
.type-table button {
    margin-top: 10px;
    padding: 5px;
    border: 2px solid #ee2a7b;
    font-weight: bold;
    color: #ee2a7b;
    transition: 0.3s ease-in-out;
    background: transparent;
    margin-left: 0;
}

.insert-table button:hover,
.category-table button:hover,
.type-table button:hover {
    background: #ee2a7b;
    color: white;
    border: 2px solid #ee2a7b;
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
    border-radius: 5px;
    margin: 50px auto;
    -webkit-box-shadow: 3px 4px 9px -2px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 3px 4px 9px -2px rgba(0, 0, 0, 0.75);
    box-shadow: 3px 4px 9px -2px rgba(0, 0, 0, 0.75);
    border: 2px solid #ee2a7b;
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
    font-weight: bold;
}

tr {
    transition: 0.2s ease-in-out;
    font-weight: bold;
}

tr:hover {
    background-color: #e8e8e8;
    color: #ee2a7b;
    font-weight: bold;
}

.active {
    display: block !important;
    transition: 0.5s ease ease-in-out;
}

.modal-body {
    padding: 20px;
}

.action-button {
    background: transparent;
    border-radius: 5px;
    padding: 8px;
    color: #ee2a7b;
    margin-right: 10px;
    transition: 0.2s ease-in-out;
}

.action-button:hover {
    background: #e3c2d0;
    cursor: pointer;
    color: white;
}
.action-button img {
    width: 20px;
    height: auto;
}

.insert-container {
    transition: 0.3s ease-in-out;
    color: #ee2a7b;
}

.insert-container img {
    width: 25px;
    height: auto;
}
.insert-container:hover {
    background: #e3c2d0;
    cursor: pointer;
    color: white;
}
</style>

<script>
import Login from "../Login/Login";

export default {
    name: "Admin",

    components: {
        Login
    },

    data() {
        return {
            items: [],
            categories: null,
            types: null,
            isTableActive: true,
            isViewAllActive: true,
            isViewCategoryActive: false,
            isViewTypeActive: false,
            isInsertMenuActive: false,
            isInsertActive: false,
            isCategoryInsertActive: false,
            isTypeInsertActive: false,
            tabType: 0,
            selectedId: 0,
            selectedIndex: 0,
            selectedCategoryId: null,
            selectedCategoryIndex: null,
            itemSearched: null,
            insertItemTitle: null,
            cloth: null,
            errorMsg: "",
            responseMsg: "",
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
                type: null
            },
            categoryToAdd: {
                name: null
            },
            typeToAdd: {
                name: null
            },
            request_status: null
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
        openTab: function(tabType) {
            switch (tabType) {
                case 0:
                    this.isTableActive = true;
                    this.isInsertMenuActive = false;
                    this.isInsertActive = false;
                    this.isCategoryInsertActive = false;
                    this.isTypeInsertActive = false;
                    this.isViewCategoryActive = false;
                    this.request_status = "";

                    break;
                case 1:
                    this.isTableActive = false;
                    this.isInsertActive = true;
                    this.isInsertMenuActive = false;
                    this.isCategoryInsertActive = false;
                    this.isTypeInsertActive = false;
                    this.isViewCategoryActive = false;
                    this.insertItemTitle = "CLOTH";
                    this.request_status = "";
                    break;
                case 2:
                    this.isTableActive = false;
                    this.isInsertMenuActive = false;
                    this.isInsertActive = false;
                    this.isCategoryInsertActive = true;
                    this.isTypeInsertActive = false;
                    this.isViewCategoryActive = false;
                    this.insertItemTitle = "CATEGORY";
                    this.request_status = "";
                    break;
                case 3:
                    this.isTableActive = false;
                    this.isInsertMenuActive = true;
                    this.isInsertActive = false;
                    this.isCategoryInsertActive = false;
                    this.isTypeInsertActive = false;
                    this.isViewCategoryActive = false;
                    this.request_status = "";
                    break;
                case 4:
                    this.isTableActive = false;
                    this.isInsertMenuActive = false;
                    this.isInsertActive = false;
                    this.isCategoryInsertActive = false;
                    this.isTypeInsertActive = true;
                    this.isViewCategoryActive = false;
                    this.insertItemTitle = "TYPE";
                    this.request_status = "";
                    break;
                case 5:
                    this.isTableActive = false;
                    this.isInsertMenuActive = false;
                    this.isInsertActive = false;
                    this.isCategoryInsertActive = false;
                    this.isTypeInsertActive = false;
                    this.isViewCategoryActive = true;
                    this.insertItemTitle = "";
                    this.request_status = "";
                    break;
            }
        },

        showDeletePopup: function(id, index) {
            this.$vm2.open("modal-1");
            this.selectedId = id;
            this.selectedIndex = index;
        },
        showDeletePopup2: function(id, index) {
            this.$vm2.open("modal-2");
            this.selectedCategoryId = id;
            this.selectedCategoryIndex = index;
        },

        async addItem() {
            try {
                const response = await axios.put(
                    "api/admin/cloth",
                    this.itemToAdd
                );
                this.request_status = response.status;
                console.log(response);
            } catch (error) {
                this.request_status = error;
                console.log(error);
            }
        },

        async addCategory() {
            try {
                const response = await axios.put(
                    "api/admin/category",
                    this.categoryToAdd
                );
                this.request_status = response.status;
                console.log(response);
            } catch (error) {
                this.request_status = error;
                console.log(error);
            }
        },

        async addType() {
            try {
                const response = await axios.put(
                    "api/admin/type",
                    this.typeToAdd
                );
                this.request_status = response.status;
                console.log(response);
            } catch (error) {
                this.request_status = error;
                console.log(error);
            }
        },

        preventSubmit(e) {
            // Your form submission
            // this.$refs.insertClothForm.reset(); // This will clear that form
            console.log("Sign In Button Pressed");
            e.preventDefault();
        },

        doDelete: function() {
            axios
                .post(`api/admin/${this.selectedId}`)
                .then(response => console.log(response.data, "de locos"))
                .catch(error => console.log(error.response.data));
            this.items.splice(this.selectedIndex, 1);

            this.$vm2.close("modal-1");
        },
        doDeleteCategory: function() {
            axios
                .post(`api/admin/category/${this.selectedCategoryId}`)
                .then(
                    (this.responseMsg = "Deleted correctly"),
                    (this.errorMsg = "")
                )

                .catch(
                    error => (
                        (this.errorMsg =
                            "No puedes borrar esta categoria, borra toda la ropa de esta categoria primero"),
                        (this.responseMsg = "")
                    )
                );
            //  .catch(error => console.log(error.response.data));
            this.items.splice(this.selectedCategoryIndex, 1);

            this.$vm2.close("modal-2");
        },
        showRequestStatus() {
            if (this.request_status) {
                return this.request_status === 201
                    ? "Item added to the database"
                    : this.request_status;
            }
        }
    },
    computed: {
        filteredList() {
            if (this.itemSearched) {
                return this.items.filter(cloth => {
                    return cloth.item.name
                        .toLowerCase()
                        .includes(this.itemSearched.toLowerCase());
                });
            }
            return this.items;
        }
    }
};
</script>
