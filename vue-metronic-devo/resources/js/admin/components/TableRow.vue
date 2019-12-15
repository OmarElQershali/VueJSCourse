<template>

    <tr data-row="0" class="kt-datatable__row" style="left: 0px;">

        <td v-for="field in resource.fields" :key="field.name" class="kt-datatable__cell">
            <component v-if="field.component" :is="field.component"></component>
            <span v-if="field.asHtml" style="width: 141px;" v-html="field.value"></span>
            <span v-else style="width: 141px;"> {{ field.value }}</span>

        </td>

        <td v-if="actions" class="kt-datatable__cell">
            <span style="overflow: visible; position: relative; width: 110px;">
                <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">							<i class="la la-edit"></i>						</a>
            </span>
        </td>

    </tr>

</template>

<script>
    export default {
        props: {
            resource: {
                required: true,
            },
            actions: {
                required: true,
            }
        },


    }


</script>
