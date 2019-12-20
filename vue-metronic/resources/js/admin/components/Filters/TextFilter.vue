<template>

    <div class="col-md-3 kt-margin-b-20-tablet-and-mobile">
        <div class="kt-form__group kt-form__group--inline">
            <div class="kt-form__label">
                <label>{{ filter.name }}:</label>
            </div>
            <div class="kt-form__control">
                <input :value="value" @keypress="handleChange" class="form-control" />
            </div>
        </div>
    </div>
</template>

<script>

    import lodash from 'lodash'


export default {
    props: {
        filter: {
            required: true,
        },
    },

    methods: {
        handleChange(event) {
            this.debouncer(() => {
                if (event.which != 9) {
                    this.$emit('change', {slug: this.filter.slug, value: event.target.value})
                }
            })
        },

        debouncer: lodash.debounce(callback => callback(), 1000),

    },

    computed: {
        value() {
            return this.filter.currentValue
        },
    },
}
</script>
