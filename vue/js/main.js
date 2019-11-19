/**
 * New Course Vue js by Ninja youtube channel
 * Updated by : DevO
 * Date :19/11/2019
 * important notes :
 * element - data
 * v-on - @click
 * v-bind
 * v-model -> two way binding
 * methods
 * computed
 * watch
 *
 */

new Vue({
  el: "#app",
  data: {
    name: "",
    age: "",
    message: "Welcome to new course Vue js :)",
    website: "www.DevO.com",
    email: "omerkurshali@gmail.com"
  },
  methods: {
    greeting: function() {
      return "HI to new Course";
    }
    /*AddAge: function() {
      this.age++;
    },
    SubAge: function() {
      this.age--;
    }*/
  },
  computed: {}
});
