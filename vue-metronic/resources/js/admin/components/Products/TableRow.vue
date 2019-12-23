<template>
  <tr data-row="0" class="kt-datatable__row" style="left: 0px;">
    <td v-for="field in fields" :key="field.name" class="kt-datatable__cell">
      <span v-if="field.asHtml" style="width: 90px;" v-html="resource[field.name]"></span>
      <span v-else style="width: 70px;">{{ resource[field.name] }}</span>
    </td>

    <td v-if="actions" class="kt-datatable__cell">
      <span style="overflow: visible; position: relative; width: 110px;">
        <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">
          <button @click="deleteRow(index)">
            <i class="la la-edit"></i>
          </button>
          <button>
            <i class="la la-pencil"></i>
          </button>
          <button>
            <i class="la la-wrench"></i>
          </button>
          <button>
            <i class="la la-remove"></i>
          </button>
        </a>
      </span>
    </td>
  </tr>
</template>

<script>
export default {
  props: {
    resource: {
      required: true
    },
    fields: {
      required: true
    },
    actions: {
      required: true
    },
    resources: {
      required: true
    }
  },
  methods: {
    deleteRow(resource, index) {
      this.resource.splice(index, 1);
    }
  }
};
</script>
