<template>
  <div class="kt-datatable__pager kt-datatable--paging-loaded">
    <ul class="kt-datatable__pager-nav">
      <li>
        <a
          title="Previous"
          class="kt-datatable__pager-link kt-datatable__pager-link--prev"
          :class="{ 'kt-datatable__pager-link--disabled': !hasPreviousPages || linksDisabled }"
          :disabled="!hasPreviousPages || linksDisabled"
          rel="prev"
          @click.prevent="selectPreviousPage()"
        >
          <i class="flaticon2-back"></i>
        </a>
      </li>

      <li>
        <a
          title="Next"
          class="kt-datatable__pager-link kt-datatable__pager-link--next"
          :class="{ 'kt-datatable__pager-link--disabled': !hasMorePages || linksDisabled }"
          rel="next"
          @click.prevent="selectNextPage()"
        >
          <i class="flaticon2-next"></i>
        </a>
      </li>
    </ul>

    <div class="kt-datatable__pager-info">
      <div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;">
        <select
          :value="perPage"
          @change="selectPerPage"
          class="form-control selectpicker kt-datatable__pager-size"
          title="Select page size"
          data-width="60px"
        >
          <option
            v-for="(option , index) in perPageOptions"
            :value="option"
            :key="index"
          >{{ option }}</option>
        </select>
      </div>
      <span class="kt-datatable__pager-detail">
        <slot></slot>
      </span>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    page: {
      type: Number,
      required: true
    },
    pages: {
      type: Number,
      default: 0
    },
    next: {
      type: Boolean,
      default: false
    },
    previous: {
      type: Boolean,
      default: false
    }
  },

  data: () => ({ linksDisabled: false }),

  mounted() {
    Nova.$on("resources-loaded", () => {
      this.linksDisabled = false;
    });
  },


    selectPreviousPage() {
      this.selectPage(this.page - 1);
    },

    selectNextPage() {
      this.selectPage(this.page + 1);
    },
    selectPage(page) {
      this.linksDisabled = true;
      this.$emit("page", page);
    }
  },

  computed: {

    hasPreviousPages: function() {
      return this.previous;
    },

    hasMorePages: function() {
      return this.next;
    }
  }
};
</script>
