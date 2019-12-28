<template>
  <div class="col-md-3 kt-margin-b-20-tablet-and-mobile">
    <div class="kt-form__group kt-form__group--inline">
      <div class="kt-form__label">
        <label>{{ filter.name }}:</label>
      </div>
      <div class="kt-form__control">
        <select class="form-control bootstrap-select" @change="handleChange">
          <option
            :selected="value == option.value"
            v-for="(option , index) in filter.options"
            :key="index"
            :value="option.value"
          >{{ option.name }}</option>
        </select>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    filter: {
      required: true
    }
  },

  methods: {
    handleChange(event) {
      this.$emit("change", {
        slug: this.filter.slug,
        value: event.target.value
      });
    }
  },

  computed: {
    value() {
      return this.filter.currentValue;
    }
  }
};
</script>
