<template>
  <ul>
    <li v-for="(Names, index) in NamesList" :key="index">{{ Names }}</li>
  </ul>
</template>

<script>
export default {
  data() {
    return {
      NamesList: ["Omar", "Mohammad", "mahmoud"]
    };
  }
};
</script>
