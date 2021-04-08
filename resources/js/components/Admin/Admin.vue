<template>
    <div class="main d-flex">
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
                class="vertical-navbar-menu d-flex flex-column align-items-center "
            >
                <ul
                    class="dashboard-options d-flex align-items-center justify-content-center"
                >
                    <li>Dashboard</li>
                </ul>

                <ul
                    class="vertical-navbar-options d-flex flex-column align-items-center justify-content-center"
                >
                    <li v-on:click="openTab(0)">
                        View All
                    </li>
                    <li v-on:click="openTab(1)">
                        Modify
                    </li>
                    <li v-on:click="openTab(2)">
                        Delete
                    </li>
                </ul>
            </div>
        </div>

        <div
            class="information-container d-flex flex-column justify-content-around"
        >
            <!-- <modal-vue
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
            </modal-vue> -->

            <div
                class="information-title-container d-flex justify-content-center align-items-center"
            >
                <h1>Estadisticas Manticora Vintage</h1>
            </div>
            <div class="chart-container d-flex justify-content-around">
                <div class="chart"></div>
                <div class="chart"></div>
                <div class="chart"></div>
            </div>
            <div class="table-container">
                <div
                    class="view-all-table"
                    v-bind:class="{ active: isViewAllActive }"
                >
                    <div class="table-head">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr class="d-flex">
                                    <th scope="col">VIEWALL</th>
                                    <th scope="col">name</th>
                                    <th scope="col">price</th>
                                    <th scope="col">stock</th>
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
                                <tr
                                    v-for="(cloth, index) in cloths"
                                    :key="index"
                                >
                                    <td>{{ cloth.id }}</td>
                                    <td>{{ cloth.name }}</td>
                                    <td>{{ cloth.price }}</td>
                                    <td>{{ cloth.units_in_stock }}</td>
                                    <td>{{ cloth.photo }}</td>
                                    <td>{{ cloth.category_id }}</td>
                                    <td>{{ cloth.type_id }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div
                    class="modify-table"
                    style="display:none"
                    v-bind:class="{ active: isModifyActive }"
                >
                    <div class="table-head">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr class="d-flex">
                                    <th scope="col">MODIFY</th>
                                    <th scope="col">name</th>
                                    <th scope="col">price</th>
                                    <th scope="col">stock</th>
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
                                <tr
                                    v-for="(cloth, index) in cloths"
                                    :key="index"
                                >
                                    <td>{{ cloth.id }}</td>
                                    <td>{{ cloth.name }}</td>
                                    <td>{{ cloth.price }}</td>
                                    <td>{{ cloth.units_in_stock }}</td>
                                    <td>{{ cloth.photo }}</td>
                                    <td>{{ cloth.category_id }}</td>
                                    <td>{{ cloth.type_id }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div
                    class="delete-table"
                    style="display:none"
                    v-bind:class="{ active: isDeleteActive }"
                >
                    <div class="table-head">
                        <table class="table table-hover">
                            <thead class="thead-light">
                                <tr class="d-flex">
                                    <th scope="col">DELETE</th>
                                    <th scope="col">name</th>
                                    <th scope="col">price</th>
                                    <th scope="col">stock</th>
                                    <th scope="col">photo</th>
                                    <th scope="col">categoryid</th>
                                    <th scope="col">typeid</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table-body">
                        <table>
                            <tbody>
                                <tr
                                    v-for="(cloth, index) in cloths"
                                    :key="index"
                                >
                                    <td>{{ cloth.id }}</td>
                                    <td>{{ cloth.name }}</td>
                                    <td>{{ cloth.price }}</td>
                                    <td>{{ cloth.units_in_stock }}</td>
                                    <td>{{ cloth.photo }}</td>
                                    <td>{{ cloth.category_id }}</td>
                                    <td>{{ cloth.type_id }}</td>
                                    <td v-on:click="deleteCloth(id, index)">
                                        Delete
                                    </td>
                                    <!-- v-on:click="showDeletePopup(cloth.id)" -->
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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
    background-color: #f522e4;
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

.modify-table {
    display: none;
}

.table-container {
    border: 2px solid rgb(221, 221, 221);

    margin: 0 auto;
}

.table-header {
    overflow: hidden;
    width: 100%;
}

.table-body {
    height: 400px;
    width: 100%;
    overflow: auto;
}

th,
td {
    min-width: 170px;
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
</style>

<script>
export default {
    name: "Admin",

    data: () => ({
        cloths: [],
        isViewAllActive: true,
        isModifyActive: false,
        isDeleteActive: false,
        tabType: 0,
        selectedId: 0
    }),

    mounted() {
        axios
            .get(`/api/shop`)
            .then(response => (this.cloths = response.data))
            .catch(error => console.log(error.response.data));
    },

    methods: {
        openTab: function(tabType) {
            switch (tabType) {
                case 0:
                    this.isViewAllActive = true;
                    this.isModifyActive = false;
                    this.isDeleteActive = false;
                    break;
                case 1:
                    this.isViewAllActive = false;
                    this.isModifyActive = true;
                    this.isDeleteActive = false;
                    break;
                case 2:
                    this.isViewAllActive = false;
                    this.isModifyActive = false;
                    this.isDeleteActive = true;
                    break;
            }
        },

        deleteCloth: function(id, index) {
            axios
                .post(`api/admin/${id}`)
                .then(response => console.log(response.data, "de locos"))
                .catch(error => console.log(error.response.data));
            this.cloths.splice(index, 1 );
        }
    }

    // showDeletePopup: function(id) {
    //     alert(this.selectedId + "Antes de click")
    //     this.$vm2.open("modal-1");
    //     this.selectedId = id;
    //     alert(this.selectedId + "Despues del click")

    // },

    // doDelete: function() {
    //    alert(this.selectedId  + "Despues del delete")
    //     this.$vm2.close("modal-1");
    // }
};
</script>
