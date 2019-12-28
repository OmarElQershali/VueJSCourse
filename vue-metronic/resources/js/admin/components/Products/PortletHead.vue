<template>
  <div class="kt-portlet__head">
    <slot :title="title">
      <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">
          <span class="kt-portlet__head-icon">
            <i class="kt-font-brand flaticon2-line-chart"></i>
          </span>
          <h3 class="kt-portlet__head-title">{{ title }}</h3>
        </div>
        <div class="kt-portlet__head-toolbar">
          <div class="kt-portlet__head-wrapper">
            <a href="#" class="btn btn-clean btn-icon-sm">
              <i class="la la-long-arrow-left"></i>
              Back
            </a>
            &nbsp;
            <div class="dropdown dropdown-inline">
              <button
                type="button"
                class="btn btn-brand btn-icon-sm"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                <i class="flaticon2-plus"></i> Add New
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <ul class="kt-nav">
                  <li class="kt-nav__section kt-nav__section--first">
                    <span class="kt-nav__section-text">Choose an action:</span>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-open-text-book"></i>
                      <span class="kt-nav__link-text">Reservations</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
                      <span class="kt-nav__link-text">Appointments</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-bell-alarm-symbol"></i>
                      <span class="kt-nav__link-text">Reminders</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-contract"></i>
                      <span class="kt-nav__link-text">Announcements</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-shopping-cart-1"></i>
                      <span class="kt-nav__link-text">Orders</span>
                    </a>
                  </li>
                  <li class="kt-nav__separator kt-nav__separator--fit"></li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-rocket-1"></i>
                      <span class="kt-nav__link-text">Projects</span>
                    </a>
                  </li>
                  <li class="kt-nav__item">
                    <a href="#" class="kt-nav__link">
                      <i class="kt-nav__link-icon flaticon2-chat-1"></i>
                      <span class="kt-nav__link-text">User Feedbacks</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </slot>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      default: "Title"
    }
  }
};
</script>
