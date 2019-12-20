<template>
  <div>
    <page>
      <template v-slot:header>
        <div class="kt-container">
          <div class="kt-subheader__main">
            <h3 class="kt-subheader__title">{{ resourceName}}</h3>

            <span class="kt-subheader__separator kt-hidden"></span>
            <div class="kt-subheader__breadcrumbs">
              <!-- <a href="#" class="kt-subheader__breadcrumbs-home">
                <i class="flaticon2-shelter"></i>
              </a>-->
              <!-- <span class="kt-subheader__breadcrumbs-separator"></span>
              <a href class="kt-subheader__breadcrumbs-link">Crud</a>
              <span class="kt-subheader__breadcrumbs-separator"></span>
              <a href class="kt-subheader__breadcrumbs-link">Forms &amp; Controls</a>
              <span class="kt-subheader__breadcrumbs-separator"></span>
              <a href class="kt-subheader__breadcrumbs-link">Form Layouts</a>
              <span class="kt-subheader__breadcrumbs-separator"></span>
              <a href class="kt-subheader__breadcrumbs-link">Multi Column Forms</a>-->
              <!-- <span class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">Active link</span> -->
            </div>
          </div>
          <div class="kt-subheader__toolbar">
            <div class="kt-subheader__wrapper">
              <a href="#" class="btn kt-subheader__btn-primary">
                Actions &nbsp;
                <!--<i class="flaticon2-calendar-1"></i>-->
              </a>

              <div
                class="dropdown dropdown-inline"
                data-toggle="kt-tooltip"
                title
                data-placement="left"
                data-original-title="Quick actions"
              >
                <a
                  href="#"
                  class="btn btn-icon"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                    width="24px"
                    height="24px"
                    viewBox="0 0 24 24"
                    version="1.1"
                    class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md"
                  >
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <polygon points="0 0 24 0 24 24 0 24" />
                      <path
                        d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z"
                        fill="#000000"
                        fill-rule="nonzero"
                        opacity="0.3"
                      />
                      <path
                        d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z"
                        fill="#000000"
                      />
                    </g>
                  </svg>
                  <!--<i class="flaticon2-plus"></i>-->
                </a>
                <div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">
                  <!--begin::Nav-->
                  <ul class="kt-nav">
                    <li class="kt-nav__head">
                      Add anything or jump to:
                      <i
                        class="flaticon2-information"
                        data-toggle="kt-tooltip"
                        data-placement="right"
                        title
                        data-original-title="Click to learn more..."
                      ></i>
                    </li>
                    <li class="kt-nav__separator"></li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-drop"></i>
                        <span class="kt-nav__link-text">Order</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
                        <span class="kt-nav__link-text">Ticket</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
                        <span class="kt-nav__link-text">Goal</span>
                      </a>
                    </li>
                    <li class="kt-nav__item">
                      <a href="#" class="kt-nav__link">
                        <i class="kt-nav__link-icon flaticon2-new-email"></i>
                        <span class="kt-nav__link-text">Support Case</span>
                        <span class="kt-nav__link-badge">
                          <span class="kt-badge kt-badge--success">5</span>
                        </span>
                      </a>
                    </li>
                    <li class="kt-nav__separator"></li>
                    <li class="kt-nav__foot">
                      <a class="btn btn-label-brand btn-bold btn-sm" href="#">Upgrade plan</a>
                      <a
                        class="btn btn-clean btn-bold btn-sm"
                        href="#"
                        data-toggle="kt-tooltip"
                        data-placement="right"
                        title
                        data-original-title="Click to learn more..."
                      >Learn more</a>
                    </li>
                  </ul>
                  <!--end::Nav-->
                </div>
              </div>
            </div>
          </div>
        </div>
      </template>

      <template v-slot:body>
        <div class="row">
          <div class="col-lg-12">
            <portlet :title="resourceName">
              <template v-slot:head="{ title }">
                <div class="kt-portlet__head-label">
                  <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-line-chart"></i>
                  </span>
                  <h3 class="kt-portlet__head-title">{{ title }}</h3>
                </div>
                <h3></h3>
              </template>

              <template v-slot:body>
                <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                  <div class="row align-items-center">
                    <div class="col-xl-8 order-2 order-xl-1">
                      <div class="row align-items-center">
                        <!-- <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                          <div class="kt-input-icon kt-input-icon--left">
                            <input
                              v-model="search"
                              type="text"
                              class="form-control"
                              placeholder="Search..."
                            />
                            <span class="kt-input-icon__icon kt-input-icon__icon--left">
                              <span>
                                <i class="la la-search"></i>
                              </span>
                            </span>
                          </div>
                        </div>-->
                      </div>
                    </div>
                    <!-- <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
                      <a href="#" class="btn btn-default">
                        <i class="la la-plus"></i> New Product
                      </a>
                      <div
                        class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"
                      ></div>
                    </div>-->
                  </div>
                </div>

                <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
                  <div class="row align-items-center">
                    <component
                      v-for="filter in filters"
                      :is="filter.component"
                      :filter="filter"
                      @change="filterChanged"
                    ></component>
                  </div>
                </div>

                <div
                  class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded"
                >
                  <resource-table
                    :fields="fields"
                    :resources="resources"
                    :actions="actions"
                    :resource-name="resourceName"
                    @order="orderByField"
                  ></resource-table>

                  <component
                    is="pagination-links"
                    v-if="resources.length > 0"
                    @page="selectPage"
                    :pages="totalPages"
                    :page="currentPage"
                    :per-page="currentPerPage"
                    @per-page="updatePerPageChanged"
                    :per-page-options="perPageOptions"
                  >
                    <span v-if="resourceCountLabel">{{ resourceCountLabel }}</span>
                  </component>
                </div>
              </template>
            </portlet>
          </div>
        </div>
      </template>
    </page>
  </div>
</template>

<script>
import { InteractsWithQueryString, Paginatable, PerPageable } from "../mixins";
// get data from Json
import dataJson from "../json/data.json";
export default {
  mixins: [InteractsWithQueryString, PerPageable, Paginatable],

  props: {
    resourceName: {
      type: String,
      required: true
    }
  },
  data: function() {
    return {
      orderBy: "",
      orderByDirection: "",
      allMatchingResourceCount: 0,
      fields: [],
      resources: dataJson,
      actions: [],
      filters: []
    };
  },

  methods: {
    getFields() {
      this.fields = [
        {
          name: "id",
          label: "Id",
          sortable: true,
          asHtml: false
        },
        {
          name: "Name",
          label: "Name",
          sortable: true,
          asHtml: false
        },
        {
          name: "Postion",
          label: "Postion",
          sortable: true,
          asHtml: false
        },
        {
          name: "Office",
          label: "Office",
          sortable: true,
          asHtml: false
        },
        {
          name: "Age",
          label: "Age",
          sortable: true,
          asHtml: false
        },
        {
          name: "State_date",
          label: "State date",
          sortable: true,
          asHtml: false
        }
      ];
    },

    getFilters() {
      this.filters = [
        {
          slug: "product-title",
          name: "Title",
          component: "text-filter",
          currentValue: null,
          options: []
        },
        {
          slug: "product-status",
          name: "Status",
          component: "select-filter",
          currentValue: null,
          options: [
            { name: "All", value: "" },
            { name: "Pending", value: "0" },
            { name: "Delivered", value: "1" },
            { name: "Canceled", value: "2" }
          ]
        }
      ];
    },

    orderByField(field) {
      var direction = this.currentOrderByDirection == "asc" ? "desc" : "asc";
      if (this.currentOrderBy != field.name) {
        direction = "asc";
      }
      this.updateQueryString({
        [this.orderByParameter]: field.name,
        [this.orderByDirectionParameter]: direction
      });
    },

    updatePerPageChanged(perPage) {
      this.perPage = perPage;
      this.perPageChanged();
    },

    selectPage(page) {
      this.updateQueryString({ [this.pageParameter]: page });
    },

    filterChanged(filter) {
      this.updateFilter(filter);
      this.updateQueryString({
        [this.filterParameter]: this.currentEncodedFilters
      });
    },

    updateFilter(updatedFilter) {
      const filter = _(this.filters).find(f => f.slug == updatedFilter.slug);

      filter.currentValue = updatedFilter.value;
    },

    initializeFiltersFromQueryString() {
      if (this.initialEncodedFilters) {
        const initialFilters = JSON.parse(atob(this.initialEncodedFilters));
        _.each(initialFilters, f => {
          this.updateFilter({ slug: f.slug, value: f.value });
        });
      }
    }
  },

  computed: {
    currentOrderByDirection() {
      return this.$route.query[this.orderByDirectionParameter] || "desc";
    },

    currentOrderBy() {
      return this.$route.query[this.orderByParameter] || "";
    },

    resourceRequestQueryString() {
      return {
        orderBy: this.currentOrderBy,
        orderByDirection: this.currentOrderByDirection,
        perPage: this.currentPerPage,
        page: this.currentPage,
        filters: this.currentEncodedFilters
      };
    },

    currentEncodedFilters() {
      return btoa(JSON.stringify(this.currentFilters));
    },

    currentFilters() {
      return _.map(this.filters, f => {
        return {
          slug: f.slug,
          value: f.currentValue
        };
      });
    },

    initialEncodedFilters() {
      return this.$route.query[this.filterParameter] || "";
    },
    totalPages() {
      return Math.ceil(this.allMatchingResourceCount / this.currentPerPage);
    },

    perPageOptions() {
      return [0, 25, 50, 100];
    },

    resourceCountLabel() {
      const first = this.perPage * (this.currentPage - 1);

      return (
        this.resources.length &&
        `${first + 1}-${first + this.resources.length} of ${
          this.allMatchingResourceCount
        }`
      );
    },

    // Parameters
    orderByDirectionParameter() {
      return this.resourceName + "_direction";
    },

    orderByParameter() {
      return this.resourceName + "_order";
    },

    perPageParameter() {
      return this.resourceName + "_per_page";
    },

    pageParameter() {
      return this.resourceName + "_page";
    },

    filterParameter() {
      return this.resourceName + "_filter";
    }
  },

  created() {
    this.getFields();
    this.getFilters();
    this.initializeFiltersFromQueryString();
    this.allMatchingResourceCount = 500;
    this.$watch(() => {
      return (
        this.resourceName +
        this.currentOrderBy +
        this.currentOrderByDirection +
        this.currentEncodedFilters +
        this.currentPerPage +
        this.currentPage
      );
    });
  }
};
</script>
