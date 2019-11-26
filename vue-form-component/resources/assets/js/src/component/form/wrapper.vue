<template>
    <form @submit.prevent="submit" novalidate>
        <slot
            :group="group"
            :fields="fields"
            :validation="validationBag"
            :submit="submit"
            :error="error"
        ></slot>
    </form>
</template>

<script>
import Error from "./Validator/Error";
import Validator from "./Validator/Validator";
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
            validationBag: {},
            error: new Error()
        };
    },
    created() {
        EventBus.listen("initialize-" + this.group, this.initialize);
    },
    methods: {
        initialize(data) {
            if (!this.validationBag.hasOwnProperty(data.field)) {
                this.validationBag[data.field] = data.rules;
            }
        },
        submit() {
            if (this.eventSubmitOnly) {
                return;
            }
            this.submitEvent();
        },
        submitEvent() {
            if (this.isDisabled) {
                return;
            }
            this.validate()
                .then(this.makeCall)
                .catch(this.callFailed);
        },
        validate() {
            return new Promise((resolve, reject) => {
                if (!this.requiresValidation()) {
                    resolve();
                    return;
                }
                this.error = new Error();
                new Validator(this, resolve, reject);
            });
        },
        requiresValidation() {
            return Object.keys(this.validationBag).length > 0;
        },
        makeCall() {
            EventBus.fire("clear-top-dialog");
            this.makeAjaxCall(this.callSuccessful, this.callFailed);
        },
        callSuccessful(response) {},
        callFailed(error) {}
    }
};
</script>
