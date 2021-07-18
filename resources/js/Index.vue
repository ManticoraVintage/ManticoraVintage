<template>
  <div id="web-container">
    <Logo v-if="showLogo()"></Logo>
    <div id="content-wrap" :style="stylesForLanding('content')">
      <router-view></router-view>
    </div>
    <FooterCustom v-if="showFooter()" id="footer" :style="stylesForLanding('footer')"></FooterCustom>
  </div>
</template>


<style lang="scss">
// Move this global styles to a scss file
.title-font{
  font-family: druk;
}
</style>

<style lang="scss" scoped>
#web-container {
  background: #f2f3f5;
  position: relative;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

#content-wrap {
  padding-bottom: 15rem; /* Footer height */
  width: 100%;
  min-height: 100vh;
}

#footer {
  position: absolute;
  bottom: 0;
  width: 100%;
}
</style>

<script>
export default {
  methods: {
    showLogo() {
      return this.$route.path !== "/" && this.$route.path !== "/admin";
    },
    showFooter() {
      return this.$route.path !== "/admin";
    },
    stylesForLanding(element) {
      if (this.$route.path === "/") {
        if (element === "content") {
          return {
            display: "flex",
            "align-items": "center",
            background: "black",
          };
        }
        if (element === "footer") {
          return {
            color: "white",
          };
        }
      }
    },
  },
};
</script>
