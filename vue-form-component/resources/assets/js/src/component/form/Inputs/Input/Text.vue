<template>
  <div :v-show="showValidation" :class="computedWrapperCssClass" :style="computedWrapperCssStyle">
    <slot>
      <validation
        :label="label"
        :id="identity"
        :name="name"
        :show="showValidation"
        :css-class="computedValidationCssClass"
        :validation="validation"
        :error="error"
      ></validation>
    </slot>
    <input
      type="type"
      :id="identity"
      :name="name"
      :value="value"
      :maxlength="maxlength"
      :placeholder="placeholder"
      :autocomplete="autocomplete"
      :class="inputCssClass"
      v-focus="focus"
      v-on="inputListeners"
      :disabled="isDisabled"
    />
  </div>
</template>
<script>
import Error from "../../Validator/Error";
import Helper from "../../../../core/Helper";
import Disabler from "../../../../mixins/Disabler";
import Validation from "../../Validator/Validation";
export default {
  mixins: [Disabler],
  components: {
    validation: Validation
  },
  props: {
    label: {
      type: String,
      required: false
    },
    group: {
      type: String,
      required: false
    },
    name: {
      type: String,
      required: true
    },
    id: {
      type: String,
      required: false
    },
    value: {
      default: ""
    },
    currentValue: {
      default: ""
    },
    placeholder: {
      type: String,
      required: false
    },
    focus: {
      type: Boolean,
      default: ""
    },
    maxlength: {
      type: String,
      required: false
    },
    autocomplete: {
      type: String,
      required: false
    },
    validation: {
      type: [Array, Object],
      default: () => []
    },
    error: {
      type: Object,
      default: () => new Error()
    },
    visible: {
      type: Boolean,
      default: true
    },
    inputCssClass: {
      type: String,
      required: false
    },
    validationCssClass: {
      type: String,
      required: false
    },
    wrapperErrorCssClass: {
      type: String,
      default: "invalid"
    },
    wrapperErrorCssStyle: {
      type: String,
      required: false
    }
  },
  data() {
    return {
      identity: this.id ? this.id : this.name,
      displayValidation: false
    };
  },
  computed: {
    inputListeners: function() {
      return Object.assign({}, this.$listeners, {
        input: event => {
          this.emit(event.target.value);
        }
      });
    },
    isInvalid: function() {
      return this.error.has(this.name);
    },
    showValidation: function() {
      return this.isInvalid && this.displayValidation;
    },
    computedValidationCssClass: function() {
      return { [this.validationCssClass]: this.isInvalid };
    },
    computedWrapperCssClass: function() {
      return { [this.wrapperErrorCssClass]: this.isInvalid };
    },
    computedWrapperCssStyle: function() {
      return { [this.wrapperErrorCssStyle]: this.isInvalid };
    }
  },
  mounted() {
    this.emit(this.currentValue);
    this.initialize();
    this.registerListeners();
  },
  methods: {
    emit(value) {
      this.$emit("input", value);
    },
    initialize: function() {
      if (Helper.isEmpty(this.validation)) {
        return;
      }
      let rules = this.validation;

      if (!Array.isArray(this.validation)) {
        rules = Object.keys(this.validation);
      }
      EventBus.fire("initialize-" + this.group, {
        field: this.name,
        rules: rules
      });
    },
    reset() {
      this.emit(this.currentValue);
    },
    clear() {
      this.emit("");
    }
  }
};
</script>
