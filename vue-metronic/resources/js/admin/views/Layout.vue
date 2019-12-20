<template>
  <div id="app">
    <div class="kt-grid kt-grid--hor kt-grid--root">
      <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <!-- Start:: Aside -->
        <v-aside></v-aside>
        <!-- end:: Aside -->
        <div
          class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper"
          id="kt_wrapper"
        >
          <!-- Start:: Header -->
          <vheader></vheader>
          <!-- end:: Header -->

          <router-view></router-view>

          <!-- Start:: Footer -->
          <vfooter></vfooter>

          <!-- end:: Footer -->
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vAside from "./partials/aside";
import vfooter from "./partials/footer";
import vheader from "./partials/header";
export default {
  components: {
    vAside,
    vfooter,
    vheader
  }
};
</script>

<style lang="scss">
@import "../assets/sass/style.scss";
@import "../assets/sass/global/layout/header/skins/base/light.scss";
@import "../assets/sass/global/layout/header/skins/menu/light.scss";
@import "../assets/sass/global/layout/brand/skins/dark.scss";
@import "../assets/sass/global/layout/aside/skins/dark.scss";
</style>
