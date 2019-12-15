<template>
  <div class="kt-portlet__body">
    <!--begin: Search Form -->
    <div class="kt-form kt-form--label-right kt-margin-t-20 kt-margin-b-10">
      <div class="row align-items-center">
        <div class="col-xl-8 order-2 order-xl-1">
          <div class="row align-items-center">
            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
              <div class="kt-input-icon kt-input-icon--left">
                <input type="text" class="form-control" placeholder="Search..." @change="getResources">
                <span class="kt-input-icon__icon kt-input-icon__icon--left">
							<span><i class="la la-search"></i></span>
						</span>
              </div>
            </div>
            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
              <div class="kt-form__group kt-form__group--inline">
                <div class="kt-form__label">
                  <label>Status:</label>
                </div>
                <div class="kt-form__control">
                  <div class="dropdown  form-control"><select class="form-control " id="kt_form_status" tabindex="-98">
                    <option value="">All</option>
                    <option value="1">Pending</option>
                    <option value="2">Delivered</option>
                    <option value="3">Canceled</option>
                    <option value="4">Success</option>
                    <option value="5">Info</option>
                    <option value="6">Danger</option>
                  </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_status" title="All"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                </div>
              </div>
            </div>
            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
              <div class="kt-form__group kt-form__group--inline">
                <div class="kt-form__label">
                  <label>Type:</label>
                </div>
                <div class="kt-form__control">
                  <div class="dropdown  form-control">
                    <select class="form-control " id="" tabindex="-98">
                      <option value="">All</option>
                      <option value="1">Online</option>
                      <option value="2">Retail</option>
                      <option value="3">Direct</option>
                    </select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-2" aria-haspopup="listbox" aria-expanded="false" data-id="kt_form_type" title="All"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">All</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-2" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 order-1 order-xl-2 kt-align-right">
          <a href="#" class="btn btn-default kt-hidden">
            <i class="la la-cart-plus"></i> New Order
          </a>
          <div class="kt-separator kt-separator--border-dashed kt-separator--space-lg d-xl-none"></div>
        </div>
      </div>
    </div>		<!--end: Search Form -->
  </div>
</template>

<script>
export default {
  props: {
    resource: String
  },

  mounted: function() {
  },

  methods: {
    getResources: function() {
      // alert('gg')

      console.log('fetching')

      this.$emit('filtering')
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

</style>
