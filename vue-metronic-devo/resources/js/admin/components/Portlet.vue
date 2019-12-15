<template>
    <div class="kt-portlet">

        <portlet-head :title="title">
            <slot name="head" :title="title"></slot>
        </portlet-head>

        <portlet-body>
            <slot name="body"></slot>
        </portlet-body>


        <portlet-foot>
            <slot name="foot"></slot>
        </portlet-foot>

    </div>

</template>

<script>
    export default {
        props: {
            title: {
                type: String,
                default: 'Title'
            }
        },

    }


</script>
