<template>
  <footer>
    <p>Copyright 2019 {{ title }}</p>
  </footer>
</template>
<script>
export default {
  // Props Object
  props: {
    title: {
      type: String,
      required: true
    }
  },
  data() {
    return {};
  }
};
</script>
<style scoped>
footer {
  background: #222;
  padding: 6px;
}
p {
  color: lightgreen;
  text-align: center;
}
</style>
