import VueRouter from "vue-router";

import Vue from "vue";

import Login from "@/components/Login.vue";
import Home from "@/components/Home.vue";
import Signup from "@/components/Signup";
import ForgotPassword from "@/components/ForgotPassword";
import routes from "./routes";

Vue.use(VueRouter);

const routes = new VueRouter({
  routes,
  mode: "history"
});
export default routes;
