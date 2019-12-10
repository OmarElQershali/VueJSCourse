<template>
  <div class="tree-cont">
    <div class="tree-header">
      <perfect-scrollbar>
        <h4 id="Brand">الحساب</h4>
      </perfect-scrollbar>
      <div class="input-container">
        <input
          type="text"
          placeholder="بحث"
          class="search-box"
          @input="searchNodes"
          v-model="searchText"
        />
        <i class="fa fa-search icon"></i>
      </div>
    </div>
    <div class="tree-body">
      <div class="dd">
        <ol class="dd-list">
          <node-tree :node="treeData"></node-tree>
        </ol>
      </div>
    </div>
    <div class="clear-fix"></div>
  </div>
</template>

<script>
import NodeTree from "../components/NodeTree";

export default {
  props: {
    treeData: Object
  },
  components: {
    NodeTree
  },
  data() {
    return {
      searchText: ""
    };
  },
  methods: {
    searchNodes() {
      this.$emit("onTreeSearch", this.searchText);
      //code for filter
    }
  }
};
</script>

<style>
@import "../assets/css/nestable.css";
@import "../assets/css/nestable-rtl.css";
@import "../assets/font-awesome/css/font-awesome.min.css";
@import "../assets/css/main.css";
</style>
