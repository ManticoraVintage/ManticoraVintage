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
                        v-on:click="openTab(6)"
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
                        backgroundColor: '#ee2a7b'
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
            <modal-vue
                class="deletePopup3"
                @on-close="$vm2.close('modal-3')"
                name="modal-3"
                :headerOptions="{
                    title: 'Want to delete this type?'
                }"
                :footerOptions="{
                    btn1: 'Cancel',
                    btn2: 'Delete',
                    btn2Style: {
                        backgroundColor: '#ee2a7b'
                    },
                    btn2OnClick: () => {
                        doDeleteType();
                    },
                    btn1OnClick: () => {
                        $vm2.close('modal-3');
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
                                            <button
                                                class="action-button"
                                                v-on:click="
                                                    showEditClothPopup(
                                                        cloth.item,
                                                        cloth,
                                                        cloth.item.photo
                                                    )
                                                "
                                            >
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
            <div v-if="isViewCategoryActive" class="table-container">
                <div
                    class="menu-actions-container d-flex justify-content-between align-items-center"
                >
                    <h4 style="margin-left:20px; font-weight:bold;">
                        MANTICORA CATEGORY LIST
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
                                v-model="categorySearched"
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
                    v-bind:class="{ active: isViewCategoryActive }"
                >
                    <div
                        class="error"
                        v-bind:class="{ correct: typeMsg }"
                        style="width:100%;"
                    >
                        {{ responseMsg }}
                    </div>
                    <div class="table-head">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr class="d-flex">
                                    <th scope="col" style="min-width: 400px">
                                        NOMBRE
                                    </th>
                                    <th scope="col" style="min-width: 200px">
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
                                    v-for="(category,
                                    index) in filteredCategories"
                                    :key="index"
                                >
                                    <td style="min-width: 400px;">
                                        {{ category.name }}
                                    </td>
                                    <td>
                                        <!-- <form
                                            method="POST"
                                            class="form"
                                            ref="insertClothForm"
                                            @submit="preventSubmit"
                                        > -->
                                        <div
                                            class="buttons d-flex flex-row"
                                            style="min-width:200px;"
                                        >
                                            <button
                                                class="action-button"
                                                style="border:0px;"
                                                v-on:click="
                                                    showDeletePopup2(
                                                        category.id,
                                                        index
                                                    )
                                                "
                                            >
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <button
                                                class="action-button"
                                                style="border:0px;"
                                            >
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                        <!-- </form> -->
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div v-if="isViewTypeActive" class="table-container">
                <div
                    class="menu-actions-container d-flex justify-content-between align-items-center"
                >
                    <h4 style="margin-left:20px; font-weight:bold;">
                        MANTICORA TYPE LIST
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
                                v-model="typeSearched"
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
                    v-bind:class="{ active: isViewTypeActive }"
                >
                    <div
                        class="error"
                        v-bind:class="{ correct: typeMsg }"
                        style="width:100%;"
                    >
                        {{ responseMsg }}
                    </div>
                    <div class="table-head">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr class="d-flex">
                                    <th scope="col" style="min-width: 200px">
                                        NOMBRE
                                    </th>
                                    <th scope="col" style="width: 500px">
                                        DESCRIPCION
                                    </th>
                                    <th scope="col" style="min-width: 100px">
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
                                    v-for="(type, index) in filteredTypes"
                                    :key="index"
                                >
                                    <td style="min-width: 200px;">
                                        {{ type.name }}
                                    </td>
                                    <td
                                        style="max-width: 500px; overflow:auto;"
                                    >
                                        {{ type.description }}
                                    </td>
                                    <td>
                                        <!-- <form
                                            method="POST"
                                            class="form"
                                            ref="insertClothForm"
                                            @submit="preventSubmit"
                                        > -->
                                        <div
                                            class="buttons d-flex flex-row"
                                            style="min-width:100px;"
                                        >
                                            <button
                                                class="action-button"
                                                style="border:0px;"
                                                v-on:click="
                                                    showDeletePopup3(
                                                        type.id,
                                                        index
                                                    )
                                                "
                                            >
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <button
                                                class="action-button"
                                                style="border:0px;"
                                            >
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                        <!-- </form> -->
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
                    <div
                        class="error"
                        style="width:100%;"
                        v-bind:class="{ correct: typeMsg }"
                    >
                        {{ responseMsg }}
                    </div>
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
                            type="number"
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
                        <label for="quality">Quality(1-5)</label>
                        <input
                            type="number"
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
                    <div
                        class="error"
                        style="width:100%;"
                        v-bind:class="{ correct: typeMsg }"
                    >
                        {{ responseMsg }}
                    </div>
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
                    <div
                        class="error"
                        style="width:100%;"
                        v-bind:class="{ correct: typeMsg }"
                    >
                        {{ responseMsg }}
                    </div>
                    <div>
                        <label for="name">Name</label>
                        <input
                            v-model="typeToAdd.name"
                            type="text"
                            name="name"
                        />
                        <label for="description">Description</label>
                        <textarea
                            v-model="typeToAdd.description"
                            type="text"
                            name="description"
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
        <div
            class="edit-cloth-modal-layout"
            v-bind:class="{ active: isEditModalActive }"
            v-if="isEditModalActive"
        >
            <div class="edit-cloth-modal">
                <h1>Edit</h1>
                {{ responseMsg }}
                <form
                    method="PUT"
                    class="form"
                    ref="editClothForm"
                    @submit="preventSubmit"
                >
                    <div>
                        <input
                            hidden
                            v-model="itemToEdit.id"
                            type="text"
                            name="id"
                        />

                        <label for="name">Name</label>
                        <input
                            v-model="itemToEdit.name"
                            type="text"
                            name="name"
                            v-text="itemToEdit.name"
                        />
                    </div>
                    <div>
                        <label for="price">Price</label>
                        <input
                            v-model="itemToEdit.price"
                            type="number"
                            name="price"
                            v-text="itemToEdit.price"
                        />
                    </div>
                    <div>
                        <label for="size">Size</label>
                        <input
                            type="text"
                            v-model="itemToEdit.size"
                            name="size"
                        />
                    </div>
                    <div>
                        <label for="quality">Quality(1-5)</label>
                        <input
                            type="number"
                            name="quality"
                            v-model="itemToEdit.quality"
                        />
                    </div>
                    <div>
                        <label for="country">Country</label>
                        <input
                            type="text"
                            name="country"
                            v-model="itemToEdit.country"
                        />
                    </div>
                    <div>
                        <label for="photoName">Photo name</label>
                        <input
                            type="text"
                            name="photoName"
                            v-model="itemToEdit.photo_name"
                        />
                    </div>
                    <div>
                        <label for="photoUrl">URL</label>
                        <input
                            type="text"
                            name="url"
                            v-model="itemToEdit.url"
                        />
                    </div>
                    <div>
                        <label for="available">Available: </label>

                        <input
                            type="radio"
                            name="available"
                            value="1"
                            v-model="itemToEdit.available"
                        />
                        YES

                        <input
                            v-model="itemToEdit.available"
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
                            v-model="itemToEdit.category"
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
                            name="typeDropdown"
                            id="typeDropdown"
                            v-model="itemToEdit.type"
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
                        <button type="submit" v-on:click="editCloth()">
                            Confirm
                        </button>
                        <button type="submit" v-on:click="openTab(7)">
                            Return
                        </button>
                    </div>
                </form>
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

.error {
    color: rgb(205, 38, 38);
    font-weight: bold;
    margin: 5px 10px !important;
    padding: 0 !important;
}

.correct {
    color: rgb(58, 210, 42);
    font-weight: bold;
    margin: 5px 10px !important;
    padding: 0 !important;
}

/*Edit modal */

.edit-cloth-modal-layout {
    width: 100%;
    height: 100%;
    position: fixed;
    background: rgba(0, 0, 0, 0.66);
    z-index: 100;
    display: flex;
    justify-content: center;
    align-items: center;
}

.edit-cloth-modal {
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border-radius: 7px;
    border: 2px solid #ee2a7b;
    background-color: white;
    max-width: 400px;
    padding: 25px 30px;
    -webkit-box-shadow: 3px 4px 9px -2px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 3px 4px 9px -2px rgba(0, 0, 0, 0.75);
    box-shadow: 3px 4px 9px -2px rgba(0, 0, 0, 0.75);
}

.edit-cloth-modal div,
.edit-category-modal div,
.edit-type-modal div {
    width: 100%;
    margin-top: 10px;
}

.edit-cloth-modal div label,
.edit-category-modal div label,
.edit-type-modal div label {
    min-width: 100px;
    color: #ee2a7b;
    font-weight: bold;
}

.edit-cloth-modal div input,
.edit-category-modal div input,
.edit-type-modal div input {
    border: 1px solid rgb(179, 179, 179);
    padding: 4px;
}
.edit-cloth-modal div textarea {
    border: 1px solid rgb(179, 179, 179);
    padding: 4px;
    margin-top: 10px;
    margin-left: 10px;
}

.edit-cloth-modal div input:active,
.edit-category-modal div input:active,
.edit-type-modal div input:active,
.edit-type-modal div textarea:active {
    outline: 1px solid #ee2a7b;
}

.edit-cloth-modal div input:focus,
.edit-category-modal div input:focus,
.edit-type-modal div input:focus,
.edit-type-modal div textarea:focus {
    outline: 1px solid #ee2a7b;
}

.edit-cloth-modal div input[type="radio"] {
    color: black;
}

.edit-cloth-modal div select {
    margin-top: 10px;
}
.edit-cloth-modal button,
.edit-category-modal button,
.edit-type-modal button {
    margin-top: 10px;
    padding: 5px;
    border: 2px solid #ee2a7b;
    font-weight: bold;
    color: #ee2a7b;
    transition: 0.3s ease-in-out;
    background: transparent;
    margin-left: 0;
}

.edit-cloth-modal button:hover,
.edit-category-modal button:hover,
.edit-type-modal button:hover {
    background: #ee2a7b;
    color: white;
    border: 2px solid #ee2a7b;
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
    max-width: 400px;
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

.type-table div textarea {
    border: 1px solid rgb(179, 179, 179);
    padding: 4px;
    margin-top: 10px;
    margin-left: 10px;
}

.insert-table div input:active,
.category-table div input:active,
.type-table div input:active,
.type-table div textarea:active {
    outline: 1px solid #ee2a7b;
}

.insert-table div input:focus,
.category-table div input:focus,
.type-table div input:focus,
.type-table div textarea:focus {
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

.table-head {
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
            typeMsg: false,
            tabType: 0,
            selectedId: 0,
            selectedIndex: 0,
            selectedCategoryId: null,
            selectedCategoryIndex: null,
            selectedTypeId: null,
            selectedTypeIndex: null,
            itemSearched: null,
            categorySearched: null,
            typeSearched: null,
            insertItemTitle: null,
            isEditModalActive: false,
            isEditCategoryModalActive: false,
            isEditTypeModalActive: false,
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

            itemToEdit: {
                id: null,
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
                id: null,
                name: null
            },
            typeToAdd: {
                name: null,
                description: null
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
                    this.isViewTypeActive = false;
                    this.request_status = "";
                    this.responseMsg = "";

                    break;
                case 1:
                    this.isTableActive = false;
                    this.isInsertActive = true;
                    this.isInsertMenuActive = false;
                    this.isCategoryInsertActive = false;
                    this.isTypeInsertActive = false;
                    this.isViewCategoryActive = false;
                    this.isViewTypeActive = false;
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
                    this.isViewTypeActive = false;
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
                    this.isViewTypeActive = false;
                    this.request_status = "";
                    this.responseMsg = "";

                    break;
                case 4:
                    this.isTableActive = false;
                    this.isInsertMenuActive = false;
                    this.isInsertActive = false;
                    this.isCategoryInsertActive = false;
                    this.isTypeInsertActive = true;
                    this.isViewCategoryActive = false;
                    this.isViewTypeActive = false;
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
                    this.isViewTypeActive = false;
                    this.insertItemTitle = "";
                    this.request_status = "";
                    this.responseMsg = "";
                    break;
                case 6:
                    this.isTableActive = false;
                    this.isInsertMenuActive = false;
                    this.isInsertActive = false;
                    this.isCategoryInsertActive = false;
                    this.isTypeInsertActive = false;
                    this.isViewCategoryActive = false;
                    this.isViewTypeActive = true;
                    this.insertItemTitle = "";
                    this.request_status = "";
                    this.responseMsg = "";
                    break;

                case 7:
                    this.isEditModalActive = false;
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

        showDeletePopup3: function(id, index) {
            this.$vm2.open("modal-3");
            this.selectedTypeId = id;
            this.selectedTypeIndex = index;
        },

        showEditClothPopup: function(clothToEdit, attributesToEdit, photo) {
            this.isEditModalActive = true;
            this.itemToEdit.id = clothToEdit.id;
            this.itemToEdit.name = clothToEdit.name;
            this.itemToEdit.price = attributesToEdit.price;
            this.itemToEdit.size = attributesToEdit.size;
            this.itemToEdit.quality = clothToEdit.quality;
            this.itemToEdit.country = clothToEdit.country;
            this.itemToEdit.photo_name = photo;
            this.itemToEdit.url = attributesToEdit.url;
            this.itemToEdit.available = attributesToEdit.available;
            this.itemToEdit.category = clothToEdit.category;
            this.itemToEdit.type = clothToEdit.type;
            console.log(photo);
        },

        async addItem() {
            try {
                const response = await axios
                    .put("api/admin/cloth", this.itemToAdd)
                    .then(response => {
                        this.responseMsg = "Inserted correctly";
                        this.typeMsg = true;
                        this.itemToAdd.name = "";
                        this.itemToAdd.quality = "";
                        this.itemToAdd.country = "";
                        this.itemToAdd.size = "";
                        this.itemToAdd.price = "";
                        this.itemToAdd.url = "";
                        this.itemToAdd.photo_name= "";
                    })

                    .catch(error => {
                        this.responseMsg =
                            "Some data is invalid, check the inputs and try again";
                        this.typeMsg = false;
                    });

                this.request_status = response.status;
                console.log(response);
            } catch (error) {
                this.request_status = error;
                console.log(error);
            }
        },

        async addCategory() {
            try {
                const response = await axios
                    .put("api/admin/category", this.categoryToAdd)
                    .then(response => {
                        this.responseMsg = "Inserted correctly";
                        this.typeMsg = true;
                        // this.categories.push(this.categoryToAdd);
                        this.request_status = response.status;
                    })
                    .catch(error => {
                        this.responseMsg =
                            "Some data is invalid, check the inputs and try again";
                        this.request_status = error;
                        console.log(error);
                        this.typeMsg = false;
                    });
            } catch (error) {
                this.request_status = error;
                console.log(error);
            }
        },

        async addType() {
            try {
                const response = await axios
                    .put("api/admin/type", this.typeToAdd)
                    .then(response => {
                        this.responseMsg = "Inserted correctly";
                        this.typeMsg = true;
                        // this.categories.push(this.categoryToAdd);
                        this.request_status = response.status;
                    })
                    .catch(error => {
                        this.responseMsg =
                            "Some data is invalid, check the inputs and try again";
                        this.request_status = error;
                        console.log(error);
                        this.typeMsg = false;
                    });
                this.request_status = response.status;
                console.log(response);
            } catch (error) {
                this.request_status = error;
                console.log(error);
            }
        },

        editCloth() {
            try {
                const response = axios
                    .put(
                        `api/admin/edit/cloth/${this.itemToEdit.id}`,
                        this.itemToEdit
                    )
                    .then(response => {
                        this.responseMsg = "Edited correctly";
                        this.typeMsg = true;
                        // this.categories.push(this.categoryToAdd);
                        this.request_status = response.status;
                    })
                    .catch(error => {
                        this.responseMsg =
                            "Some data is invalid, check the inputs and try again";
                        this.request_status = error;
                        console.log(error);
                        this.typeMsg = false;
                    });
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

            e.preventDefault();
        },

        doDelete: function() {
            axios
                .post(`api/admin/${this.selectedId}`)
                .then(
                    response => console.log(response.data, "de locos"),
                    this.items.splice(this.selectedIndex, 1)
                )
                .catch(error => console.log(error.response.data));

            this.$vm2.close("modal-1");
        },

        doDeleteCategory: function() {
            axios
                .post(`api/admin/category/${this.selectedCategoryId}`)
                .then(response => {
                    this.responseMsg = "Deleted correctly";
                    this.typeMsg = true;
                    this.categories.splice(this.selectedCategoryIndex, 1);
                })
                .catch(error => {
                    this.responseMsg =
                        "No puedes borrar esta categoria, borra toda la ropa de esta categoria primero";
                    this.typeMsg = false;
                });

            //  (this.responseMsg = "Deleted correctly"),
            //     (this.typeMsg = true),
            //     (this.categories.splice(this.selectedCategoryIndex, 1))

            //  .catch(error => console.log(error.response.data));

            this.$vm2.close("modal-2");
        },

        doDeleteType: function() {
            axios
                .post(`api/admin/type/${this.selectedTypeId}`)
                .then(response => {
                    this.responseMsg = "Deleted correctly";
                    this.typeMsg = true;
                    this.types.splice(this.selectedTypeIndex, 1);
                })
                .catch(error => {
                    this.responseMsg =
                        "No puedes borrar este type, borra toda la ropa de este type primero";
                    this.typeMsg = false;
                });

            //  (this.responseMsg = "Deleted correctly"),
            //     (this.typeMsg = true),
            //     (this.categories.splice(this.selectedCategoryIndex, 1))

            //  .catch(error => console.log(error.response.data));

            this.$vm2.close("modal-3");
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
        },

        filteredCategories() {
            if (this.categorySearched) {
                return this.categories.filter(category => {
                    return category.name
                        .toLowerCase()
                        .includes(this.categorySearched.toLowerCase());
                });
            }
            return this.categories;
        },

        filteredTypes() {
            if (this.typeSearched) {
                return this.types.filter(type => {
                    return type.name
                        .toLowerCase()
                        .includes(this.typeSearched.toLowerCase());
                });
            }
            return this.types;
        }
    }
};
</script>
