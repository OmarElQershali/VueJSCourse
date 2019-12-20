import defaults from "lodash/defaults";

export default {
  methods: {
    updateQueryString(value) {
      this.$router.push({ query: defaults(value, this.$route.query) });
    }
  }
};
