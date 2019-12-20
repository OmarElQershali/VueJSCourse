import Vue from "vue";
import router from "./router";
import "./components";
import "./plugins";

Vue.config.productionTip = false;

new Vue({
  el: "#app",
  router
});
