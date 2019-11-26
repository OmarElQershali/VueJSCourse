@extends('template.app')

@section('content')

    <form-warpper

        group="update-form"
        v-cloak          >

        <div slot-scope="props">
            <fieldset class="fieldset">
            <legend>Personal details</legend>
                <div class="cell small-12 medium-6">

                <text-input
                            :group="props.group"
                            name="first_name"
                            v-model="props.fields.first_name"
                            maxlength="30"
                            :focus="true"
                            placeholder="First Name"
                            autocomplete="given-name"
                            current-value="Khammmmmmmmmmes"
                        ></text-input>                </div>


            </fieldset>
        </div>

    </form-warpper>



@endsection

@push('footer-scripts')
    <script src="//cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
@endpush
