<template>
  <div class="web-container">
    <router-view></router-view>
    <footer-custom v-if="!isLanding()" class="footer"></footer-custom>
  </div>
</template>

<style lang="scss" scoped>
.web-container {
  background: #f2f3f5;
  .footer {
    flex-shrink: 0;
    margin-top: 100px;
  }
}
</style>

<script>
export default {
  methods: {
    isLanding() {
      return "/" === this.$route.path;
    },
  },
};
</script>
