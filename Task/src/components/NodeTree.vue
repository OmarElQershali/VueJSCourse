<template>
  <li class="dd-item">
    <button
      @click.self="nodeClicked"
      v-if="node.children && node.children.length && expanded"
      type="button"
      data-action="collapse"
    >Collapse</button>
    <button
      @click.self="nodeClicked"
      v-if="node.children && node.children.length && !expanded"
      type="button"
      data-action="expand"
    >Expand</button>
    <div class="dd-handle">{{ parentKey + " - " + node.label }}</div>
    <ol v-if="expanded && node.children && node.children.length" class="dd-list">
      <node
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
  name: "node", //For recursive components, make sure to provide the "name" option.
  props: {
    node: Object,
    parentKey: { type: String, default: "1" }
  },
  data() {
    return {
      expanded: true
    };
  },
  methods: {
    nodeClicked() {
      this.expanded = !this.expanded;
      if (!this.node.children) {
        this.$emit("onClick", this.node);
      }
    }
  }
};
</script>
<style scoped>
.node {
  text-align: right;
}
</style>
