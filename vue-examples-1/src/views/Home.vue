<template>
  <div class="home">
    <!-- Start Navbar -->
    <navbar></navbar>
    <!-- End Navbar -->
    <!-- carousel -->
    <carousel></carousel>
    <!-- content -->
    <vcontent></vcontent>
    <!-- Start Footer -->
    <vfooter></vfooter>
  </div>
</template>

<script>
// @ is an alias to /src

import carousel from "../components/Home/carousel";
import vcontent from "../components/Home/content";
import vfooter from "../components/Home/footer";
export default {
  name: "home",
  components: {
    carousel,
    vcontent,
    vfooter
  }
};
</script>
