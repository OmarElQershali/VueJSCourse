<template>
  <div>
    <app-header v-bind:title="title" v-on:changeTitle="updateTitle($event)"></app-header>
    <app-ninjas v-bind:ninjas="ninjas"></app-ninjas>
    <ul>
      <li v-for="ninja in ninjas" :key="ninja">{{ ninja.name }}</li>
    </ul>
    <app-footer v-bind:title="title"></app-footer>
  </div>
</template>

<script>
// Imports Components ;
import Header from "./components/Header.vue";
import Footer from "./components/Footer.vue";
import Ninjas from "./components/Ninjas.vue";

export default {
  components: {
    //define Components
    "app-header": Header,
    "app-footer": Footer,
    "app-ninjas": Ninjas
  },
  data() {
    return {
      ninjas: [
        // Dic Objects
        { name: "Omar", speciality: "Vue Components", show: false },
        { name: "Fawze", speciality: "Vue Components", show: false },
        { name: "Khames", speciality: "Vue Components", show: false },
        { name: "Mohammad", speciality: "Vue Components", show: false },
        { name: "Emad", speciality: "Vue Components", show: false },
        { name: "Yasmin", speciality: "Vue Components", show: false }
      ],
      title: "Vue DevO"
    };
  },
  methods: {
    // method to update title by Click event
    updateTitle: function(updatedTitle) {
      this.title = updatedTitle;
    }
  }
};
</script>

<style>
body {
  margin: 0;
  font-family: "Nunito SemiBold";
}
</style>
