@extends('template.app')

@section('content')

    <form-wrapper

        group="update-form"
        v-cloak          >

        <div slot-scope="props">
            <fieldset class="fieldset">
            <legend>Personal details</legend>
                <div class="cell sm-12 md-6">

                <text-input
                            :group="props.group"
                            name="first_name"
                            v-model="props.fields.first_name"
                            maxlength="30"
                            :focus="true"
                            placeholder="First Name"
                            autocomplete="given-name"
                            :validation="{
                                'required': 'Please provide your first name',
                                'min:2': 'Minimum length 2 chars.',
                                'max:30': 'Maximum length 30 chars.',
                            }"
                ></text-input>
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
                ></text-input>
                               </div>


            </fieldset>
        </div>

    </form-wrapper>



@endsection

@push('footer-scripts')
    <script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
@endpush
