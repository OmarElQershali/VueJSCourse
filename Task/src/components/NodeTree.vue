<template>
  <li class="dd-item">
    <button
      @click.self="nodeClicked"
      v-if="node.children && node.children.length && expanded"
      type="button"
      data-action="collapse"
    >Collapse</button>
    <div v-if="editing">
      <input v-model="tempValue" v-on:keyup.enter="saveEdit" class="input" />
    </div>
    <button
      @click.self="nodeClicked"
      v-if="node.children && node.children.length && !expanded"
      type="button"
      data-action="expand"
    >Expand</button>
    <div class="dd-handle" v-if="!editing" @dblclick="enableEditing">
      {{ parentKey + " - " + node.label }}
      <button class="remove" @click="deleteNode(node)">X</button>
    </div>
    <ol v-if="expanded && node.children && node.children.length" class="dd-list">
      <node
        @node-deleted="deleted(child, index)"
        v-for="(child, index) in node.children"
        :node="child"
        :key="child.name"
        :parentKey="parentKey + (index + 1).toString()"
      ></node>
    </ol>
  </li>
</template>

<script>
export default {
  name: "node", // recursive components
  props: {
    node: Object,
    parentKey: { type: String, default: "1" }
  },
  data() {
    return {
      expanded: true,
      tempValue: null,
      editing: false
    };
  },
  methods: {
    nodeClicked() {
      this.expanded = !this.expanded;
      if (!this.node.children) {
        this.$emit("onClick", this.node);
      }
    },

    saveEdit: function() {
      this.node.label = this.tempValue;
      this.disableEditing();
    },
    enableEditing: function() {
      this.tempValue = this.node.label;
      this.editing = true;
    },
    disableEditing: function() {
      this.tempValue = null;
      this.editing = false;
    },

    deleteNode() {
      this.$emit("node-deleted", this.node);
      // console.log("Delete");
      // this.node = null;
    },
    deleted(node, index) {
      if (this.node && this.node.children.length > 0)
        this.node.children.splice(index, 1);
      // node = null;
    }
  }
};
</script>
<style scoped>
.node {
  text-align: right;
}
.remove {
  float: left;
  border: 0;
  background: whitesmoke;
  margin-right: 2px;
}
</style>
