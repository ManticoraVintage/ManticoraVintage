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
            Category
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
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
            Type
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
          </div>
        </div>
      </div>
      <div class="col-4 text-center">
        <h4>EVERY COLLECTION</h4>
        <h6>SKIRT</h6>
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
        <div class="col-4">
          <div class="d-flex justify-content-center">
            <img src="images/fake_clothes/34GQ8uAugoE.jpg" alt="" />
          </div>
          <div class="itemData d-flex align-items-center flex-column">
            <div class="itemName">Vestidito to guapo</div>
            <div class="price">49€</div>
          </div>
        </div>
        <div class="col-4">
          <div class="d-flex justify-content-center">
            <img src="images/fake_clothes/34GQ8uAugoE.jpg" alt="" />
          </div>
          <div class="itemData d-flex align-items-center flex-column">
            <div class="itemName">Vestidito to guapo</div>
            <div class="price">49€</div>
          </div>
        </div>
        <div class="col-4">
          <div class="d-flex justify-content-center">
            <img src="images/fake_clothes/34GQ8uAugoE.jpg" alt="" />
          </div>
          <div class="itemData d-flex align-items-center flex-column">
            <div class="itemName">Vestidito to guapo</div>
            <div class="price">49€</div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<style scoped>
.main{
    padding: 100px 200px;
}
.items-row{
    margin-top: 100px;
}
.items-row img {
  height: 400px;
}
</style>

<script>
export default {
  //data to save response and add items to template
  mounted () {
    axios
      .get(`/api/shop`)
      .then(response => console.log(response.data, 'suiuuu'))
      .catch(error => console.log(error.response.data))
  }
};
</script>