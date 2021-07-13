<template>
  <div class="d-flex justify-content-center flex-column align-items-center">
    <section class="media d-flex">
      <a href="https://www.instagram.com/manticora.vntg/" target="_blank"
        ><span>Manticora</span><i class="fab fa-instagram"></i></a
      ><a href="https://www.instagram.com/zoz.obra/" target="_blank"
        ><span>Zozobra</span><i class="fab fa-instagram"></i
      ></a>
      <a href="https://www.depop.com/manticoravntg/" target="_blank"
        ><span>Buy</span><i class="fas fa-shopping-cart"></i
      ></a>
    </section>
    <section
      class="
        copyright
        d-flex
        justify-content-center
        align-items-center
        flex-column
      "
    >
      © 2021 MANTICORA All rights reserved<br />
    </section>
  </div>
</template>

<style lang="scss" scoped>
.footer {
  font-family: "Quicksand";
  section {
    padding-top: 10px;
  }
  .media {
    i {
      font-size: 20px;
      padding: 0 10px;
    }
    a {
      padding: 0 10px;
      .fas,
      .fab {
        color: #ee2a7b;
      }
      display: flex;
      align-items: center;
      justify-content: center;
    }
  }
  *:hover {
    color: inherit;
  }
  .copyright {
    font-size: 12px;
  }
}
</style>

<script>
export default {};
</script>
