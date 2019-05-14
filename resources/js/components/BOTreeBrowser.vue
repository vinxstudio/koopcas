<template>
  <div id="treebrowser">
    <div @click="nodeClicked" :style="{'margin-left': `${depth * 20}px`}" class="node">
      <button
        v-if="hasChildren"
        class="btn btn-outline-primary btn-sm"
        style="width:30px;height:30px;margin-top:2px"
      >{{expanded ? '&#9660;' : '&#9658;'}}</button>
      <button
        class="btn btn-outline-primary btn-sm"
        style="width:27px;height:25px;margin-left:20px"
        v-else
      >&#9671;</button>
      {{node.name}}
    </div>
    <botreeview-app
      v-if="expanded"
      v-for="child in node.children"
      :key="child.name"
      :node="child"
      :depth="depth + 1"
      @onClick="(node) => $emit('onClick', node)"
    />
  </div>
</template>


<script>
export default {
  name: "botreeview-app",
  props: {
    node: Object,
    depth: {
      type: Number,
      default: 0
    }
  },
  data() {
    return {
      expanded: false
    };
  },

  methods: {
    nodeClicked() {
      this.expanded = !this.expanded;
      if (!this.hasChildren) {
        console.log("we are here");
        this.$emit("onClick", this.node);
      }
    }
  },
  computed: {
    hasChildren() {
      return this.node.children;
    }
  }
};
</script>


<style scoped>
.node {
  text-align: left;
  font-size: 14px;
}
</style>
