<template>
  <div id="app">
    <navbar></navbar>
    <home></home>
  </div>
</template>

<script>
import navbar from "./components/Home/navbar";
import home from "./views/Home";
export default {
  components: {
    home,
    navbar
  }
};
</script>
