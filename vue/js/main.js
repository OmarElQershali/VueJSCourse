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
 * Loops
 * Multiple vue instance
 */
Vue.component("greeting", {
  template: "<p>this is first component with {{ name }} </p>",
  data: function() {
    return {
      name: "Omar"
    };
  },
  methods: {}
});

var MainInstance = new Vue({
  el: "#app",
  data: {
    name: "",
    age: "",
    message: "Welcome to new course Vue js :)",
    website: "www.DevO.com",
    email: "omerkurshali@gmail.com",
    NameLists: ["Omar", "mohammad", "khames", "fawze"],
    JobsLists: [
      { name: "Developer", salary: "500$" },
      { name: "Designer", salary: "400$" },
      { name: "ProjectManager", salary: "800$" }
    ],
    methods: {
      /*AddAge: function() {
      this.age++;
    },
    SubAge: function() {
      this.age--;
    }*/
    },
    computed: {}
  }
});

var TestInstance1 = new Vue({
  el: "#FirstTest",
  data: {
    title: "Hi in First Test",
    decripions: "this is first decripion "
  },
  methods: {},
  computed: {},
  watch: {}
});

var TestInstance2 = new Vue({
  el: "#SecondTest",
  data: {
    title: "Hi in Second Test",
    decripions: "this is Second decripion "
  },
  methods: {},
  computed: {
    ChangeDescripion: function() {
      TestInstance1.decripions = "decripion Changed";
    }
  },
  watch: {}
});
