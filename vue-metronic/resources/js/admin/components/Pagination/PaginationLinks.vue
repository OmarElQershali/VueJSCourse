<template>
    <div class="kt-datatable__pager kt-datatable--paging-loaded">
        <ul class="kt-datatable__pager-nav">
            <li>
                <a title="First"
                       class="kt-datatable__pager-link kt-datatable__pager-link--first"
                       :class="{ 'kt-datatable__pager-link--disabled': !hasPreviousPages }"
                       :disabled="!hasPreviousPages"
                       rel="first"
                       @click.prevent="selectPage(1)">
                    <i class="flaticon2-fast-back"></i>
                </a>
            </li>

            <li>
                <a title="Previous"
                   class="kt-datatable__pager-link kt-datatable__pager-link--prev"
                   :class="{ 'kt-datatable__pager-link--disabled': !hasPreviousPages }"
                   :disabled="!hasPreviousPages"
                   rel="prev"
                   @click.prevent="selectPreviousPage()"
                >
                    <i class="flaticon2-back"></i>
                </a>
            </li>

            <li v-for="n in printPages">
                <a :title="n"
                   :disabled="linksDisabled"
                   class="kt-datatable__pager-link kt-datatable__pager-link-number"
                   :key="n"
                   :class="{ 'kt-datatable__pager-link--active': page === n }"
                   @click.prevent="selectPage(n)"
                >
                    {{ n }}
                </a>
            </li>

            <li>
                <a title="Next"
                   class="kt-datatable__pager-link kt-datatable__pager-link--next"
                   :class="{ 'kt-datatable__pager-link--disabled': !hasMorePages }"
                   rel="next"
                   @click.prevent="selectNextPage()"
                >
                    <i class="flaticon2-next"></i>
                </a>
            </li>

            <li>
                <a title="Last"
                   class="kt-datatable__pager-link kt-datatable__pager-link--last"
                   :class="{ 'kt-datatable__pager-link--disabled': !hasMorePages }"
                   rel="last"
                   @click.prevent="selectPage(pages)"
                >
                    <i class="flaticon2-fast-next"></i>
                </a>
            </li>

        </ul>

        <div class="kt-datatable__pager-info">
            <div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 120px;">
                <select :value="perPage" @change="selectPerPage" class="form-control selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px">
                    <option  v-for="option in perPageOptions" :value="option">{{ option }}</option>
                </select>
            </div>
            <span class="kt-datatable__pager-detail"><slot></slot></span>
        </div>

    </div>
</template>

<script>
export default {
    props: {
        perPage: {
            type: Number,
            required: false,
        },
        page: {
            type: Number,
            required: true,
        },
        pages: {
            type: Number,
            default: 0,
        },
        next: {
            type: Boolean,
            default: false,
        },
        previous: {
            type: Boolean,
            default: false,
        },

        perPageOptions: {
            type: Array,
            default: () => [10, 20, 30, 50, 100],
        },
    },

    data: () => ({ linksDisabled: false }),

    mounted() {

    },

    methods: {

        selectPerPage(e) {
            this.$emit('per-page', parseInt(e.target.value))
        },

        selectPage(page) {
            if (this.page != page) {
                this.$emit('page', page)
            }
        },

        selectPreviousPage() {
            this.selectPage(this.page - 1)
        },

        selectNextPage() {
            this.selectPage(this.page + 1)
        },
    },

    computed: {
        hasPreviousPages: function() {
            return this.page > 1
        },

        hasMorePages: function() {
            return this.page < this.pages
        },

        printPages() {
            const middlePage = Math.min(Math.max(3, this.page), this.pages - 2),
                fromPage = Math.max(middlePage - 2, 1),
                toPage = Math.min(middlePage + 2, this.pages)

            let pages = []

            for (let n = fromPage; n <= toPage; ++n) {
                if (n > 0) pages.push(n)
            }

            return pages
        },
    },
}
</script>
