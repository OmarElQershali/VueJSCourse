<template>
  <form novalidate>
    <slot :group="group" :fields="fields" :validation="validationBag"></slot>
  </form>
</template>


<script>
export default {
  props: {
    group: {
      type: String,
      required: true
    },
    behaviour: {
      type: String,
      required: false
    }
  },
  data() {
    return {
      fields: {},
      validationBag: {}
    };
  }
};
</script>
