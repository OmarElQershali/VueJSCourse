export default {
  methods: {
    PreviousPage() {
      this.updateQueryString({ [this.pageParameter]: this.currentPage - 1 });
    },

    NextPage() {
      this.updateQueryString({ [this.pageParameter]: this.currentPage + 1 });
    }
  },

  computed: {
    currentPage() {
      return parseInt(this.$route.query[this.pageParameter] || 1);
    }
  }
};
