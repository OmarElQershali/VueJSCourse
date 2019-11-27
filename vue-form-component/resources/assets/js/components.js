Vue.component(
    "top-dialog",
    require("./src/component/Dialogs/TopDialog").default
);

Vue.component(
    "form-wrapper",
    require("./src/component/form/wrapper.vue").default
);
Vue.component(
    "validation",
    require("./src/component/form/Validator/Validation.vue").default
);

// Text Vue
Vue.component(
    "text-input",
    require("./src/component/form/Inputs/Input/Text.vue").default
);
