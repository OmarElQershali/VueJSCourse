<template>
  <span @click.prevent="handleClick">
    <slot />
    <i :class="descClass"></i>
    <i :class="ascClass"></i>
  </span>
</template>

<script>
export default {
  props: {
    resourceName: String,
    uriKey: String
  },

  methods: {
    handleClick() {
      this.$emit("sort", {
        key: this.uriKey,
        direction: this.direction
      });
    }
  },

  computed: {
    ascClass() {
      if (this.isSorted && this.direction == "desc") {
        return "flaticon2-arrow-down";
      }

      return "";
    },
    descClass() {
      if (this.isSorted && this.direction == "asc") {
        return "flaticon2-arrow-up";
      }

      return "";
    },

    isSorted() {
      return this.sortColumn == this.uriKey;
    },

    sortKey() {
      return `${this.resourceName}_order`;
    },

    sortColumn() {
      return this.$route.query[this.sortKey];
    },

    directionKey() {
      return `${this.resourceName}_direction`;
    },

    direction() {
      return this.$route.query[this.directionKey];
    }
  }
};
</script>
