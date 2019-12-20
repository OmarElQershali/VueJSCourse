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
            uriKey: String,
        },

        methods: {

            handleClick() {
                this.$emit('sort', {
                    key: this.uriKey,
                    direction: this.direction,
                })
            },
        },

        computed: {
            /**
             * The CSS class to apply to the ascending arrow icon
             */
            ascClass() {
                if (this.isSorted && this.direction == 'desc') {
                    return 'flaticon2-arrow-down'
                }

                return ''
            },

            /**
             * The CSS class to apply to the descending arrow icon
             */
            descClass() {
                if (this.isSorted && this.direction == 'asc') {
                    return 'flaticon2-arrow-up'
                }

                return ''
            },

            /**
             * Determine whether this column is being sorted
             */
            isSorted() {
                return this.sortColumn == this.uriKey
            },

            /**
             * The current order query parameter for this resource
             */
            sortKey() {
                return `${this.resourceName}_order`
            },

            /**
             * The current order query parameter value
             */
            sortColumn() {
                return this.$route.query[this.sortKey]
            },

            /**
             * The current direction query parameter for this resource
             */
            directionKey() {
                return `${this.resourceName}_direction`
            },

            /**
             * The current direction query parameter value
             */
            direction() {
                return this.$route.query[this.directionKey]
            },
        },

    }

</script>
