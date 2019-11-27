@extends('template.app')

@section('content')

    <form-wrapper

        group="update-form"
        action="{{ route('main.store') }}"
        :collections="{ address: {}, colours: [], fruit: [] }"
        v-cloak          >

        <div slot-scope="props">
            <fieldset class="fieldset">
            <legend>Personal details</legend>
                <div class="col-md-6 col-sm-12">
                <validation
                    label="First name: *"
                    id="first_name"
                    name="first_name"
                    :show="props.error.has('first_name')"
                    :validation="{
                                'required': 'Please provide your first name',
                                'min:2': 'Minimum length 2 chars.',
                                'max:30': 'Maximum length 30 chars.',
                            }"
                    :error="props.error"

                ></validation>
                <text-input
                            :group="props.group"
                            name="first_name"
                            v-model="props.fields.first_name"
                            maxlength="3"
                            :focus="true"
                            placeholder="First Name"
                            autocomplete="given-name"
                            :validation="{
                                'required': 'Please provide your first name',
                                'min:2': 'Minimum length 2 chars.',
                                'max:30': 'Maximum length 30 chars.',
                            }"
                            :error="props.error"
                            current-value="Sebastian"
                            :disabled="props.isDisabled"
                ></text-input>
                </div>
                <div class="col-md-6 col-sm-12">
                        <validation
                            label="Last name: *"
                            id="last_name"
                            name="last_name"
                            :show="props.error.has('last_name')"
                            :validation="{
                                        'required': 'Please provide your last name',
                                        'min:2': 'Minimum length 2 chars.',
                                        'max:30': 'Maximum length 30 chars.',
                                    }"
                            :error="props.error"

                        ></validation>

                        <text-input
                                    :group="props.group"
                                        name="last_name"
                                    v-model="props.fields.last_name"
                                    maxlength="30"
                                    :focus="true"
                                    placeholder="Last Name"
                                    autocomplete="given-name"
                                    :validation="{
                                        'required': 'Please provide your last name',
                                        'min:2': 'Minimum length 2 chars.',
                                        'max:30': 'Maximum length 30 chars.',
                                    }"
                                    :error="props.error"
                                    :disabled="props.isDisabled"
                        ></text-input>
                               </div>



            </fieldset>
            @include('template.partials.form-buttons-attached')
        </div>

    </form-wrapper>



@endsection

@push('footer-scripts')
    <script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
@endpush
