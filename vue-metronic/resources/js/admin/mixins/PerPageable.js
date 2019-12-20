export default {
  data: () => ({ perPage: 25 }),

  methods: {
    initializePerPageFromQueryString() {
      this.perPage = this.currentPerPage
    },

    perPageChanged() {
      this.updateQueryString({ [this.perPageParameter]: this.perPage })
    },
  },

  computed: {
    currentPerPage() {
      return parseInt(this.$route.query[this.perPageParameter]) || 25
    },
  },
}
