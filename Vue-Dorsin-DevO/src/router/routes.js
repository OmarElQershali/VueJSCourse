import Home from "@/components/Home";
import Login from "@/components/Login";
import Register from "@/components/Register";
import ForgotPassword from "@/components/ForgotPassword";
// import Home2 from "@/components/Home2";
// import Home3 from "@/components/Home3";
// import Home4 from "@/components/Home4";
// import Home5 from "@/components/Home5";
// import Home6 from "@/components/Home6";
// import Home7 from "@/components/Home7";
// import Home8 from "@/components/Home8";
// import Home9 from "@/components/Home9";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home
  },
  {
    path: "/login",
    name: "Login",
    component: Login
  },
  {
    path: "/register",
    name: "Register",
    component: Register
  },
  {
    path: "/forgot-password",
    name: "ForgotPassword",
    component: ForgotPassword
  }
  // {
  //   path: "/home-2",
  //   name: "Home2",
  //   component: Home2
  // },
  // {
  //   path: "/home-3",
  //   name: "Home3",
  //   component: Home3
  // },
  // {
  //   path: "/home-4",
  //   name: "Home4",
  //   component: Home4
  // },
  // {
  //   path: "/home-5",
  //   name: "Home5",
  //   component: Home5
  // },
  // {
  //   path: "/home-6",
  //   name: "Home6",
  //   component: Home6
  // },
  // {
  //   path: "/home-7",
  //   name: "Home7",
  //   component: Home7
  // },
  // {
  //   path: "/home-8",
  //   name: "Home8",
  //   component: Home8
  // },
  // {
  //   path: "/home-9",
  //   name: "Home9",
  //   component: Home9
  // }
];

export default routes;
