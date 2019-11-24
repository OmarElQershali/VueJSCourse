<template>
  <header>
    <h1 v-on:click="changeTitle">{{ title }}</h1>
  </header>
</template>
<script>
export default {
  props: {
    title: {
      type: String,
      required: true
    }
  },
  data() {
    return {};
  },
  methods: {
    // custom event to change title by update title method
    changeTitle: function() {
      this.$emit("changeTitle", "Vue Boooooooooooooooooooom ;) ");
    }
  }
};
</script>
<style scoped>
header {
  background: lightgreen;
  padding: 10px;
}
h1 {
  color: #222;
  text-align: center;
}
</style>
