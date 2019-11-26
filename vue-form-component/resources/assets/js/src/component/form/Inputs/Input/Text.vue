<template>
    <div>
        <input
            type="text"
            :id="identity"
            :name="name"
            :value="value"
            :maxlength="maxlength"
            :placeholder="placeholder"
            :autocomplete="autocomplete"
            v-focus="focus"
            v-on="inputListeners"
        />
    </div>
</template>
<script>
import Helper from "../../../../core/Helper";
export default {
    props: {
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
        }
    },
    data() {
        return {
            identity: this.id ? this.id : this.name,
            displayValidation: false
        };
    },
    computed: {
        inputListeners() {
            return Object.assign({}, this.$listeners, {
                input: event => {
                    this.emit(event.target.value);
                }
            });
        }
    },
    mounted() {
        this.emit(this.currentValue);
        this.initialize();
    },
    methods: {
        emit(value) {
            this.$emit("input", value);
        },
        initialize() {
            if (Helper.isEmpty(this.validation)) {
                return;
            }
            let rules = this.valida1tion;

            if (!Array.isArray(this.validation)) {
                rules = Object.keys(this.validation);
            }
            EventBus.fire("initialize-" + this.group, {
                field: this.name,
                rules: rules
            });
        }
    }
};
</script>
