<template>
  <div class="app-tree">
    <tree :tree-data="tree" @onTreeSearch="handleTreeSearch"></tree>
  </div>
</template>

<script>
import Tree from "./components/Tree";

export default {
  data: () => ({
    tree: {
      label: "الاصول",
      children: [
        {
          label: "الاصول الثابتة",
          children: [
            {label: "العقارات و المباني",},
            { label: "المعدات " },
             { label: " الاجهزة والاثاث",
             children:[
              { label: "تست"},
             ]
             
             },
             {  label: "الحواسيب"}
          ]
        },
        {
           label: "الاصول المتداولة",
           children:[
               {  label: "مخزون البضاعة"},
                 {  label: "البنوك"}
           ]
            }
      ]
    }
  }),
  components: {
    Tree
  },
  methods: {
    handleTreeSearch(searchText) {
      console.log(searchText);
    }
  }
};
</script>
<style >
.app-tree{
  border-radius: 20px !important;
}

</style>