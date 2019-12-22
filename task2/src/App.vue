<template>
  <div id="app">
    <h1 :class="{active:IsActive}" @click="$event.target.classList.toggle('red')">{{ message }}</h1>
    <button @click="reverseMessage">reverseMessage</button>
    <h1>{{ messageReverse }}</h1>
    <button @click="incCount(5)">increment</button>
    <button @click="decCount(10)">decrement</button>
    <br />
    <button @click="toggleSeen">toggleSeen</button>
    <p v-if="seen" :style="{color:colorActive}">the counter is {{ counter }}</p>
    <p v-else>this counter undefined</p>
    <p v-show="seen">Seen is a data</p>
    <input v-model.lazy="message" />
    <p v-html="HtmlText"></p>
    <ul>
      <li
        v-for="(data,index) in DataJsons"
        :key="index"
        :class="{listItems:IsActive}"
      >Name : {{data.Name}} - Postion : {{data.Postion}} - Office : {{data.Office}} - Age : {{data.Age}}</li>
    </ul>
    <button @click="deleteList">deleteList</button>
  </div>
</template>

<script>
import DataJson from "./json/data.json";
export default {
  name: "app",
  components: {},
  data() {
    return {
      message: "Hi Vue.js",
      messageReverse: "",
      counter: 0,
      seen: true,
      IsActive: true,
      colorActive: "red",
      HtmlText: "<b>this is text for v-html</b>",
      DataJsons: DataJson
    };
  },
  methods: {
    incCount(num) {
      return (this.counter += num);
    },
    decCount(num) {
      return (this.counter -= num);
    },
    reverseMessage() {
      return (this.messageReverse = this.message
        .split("")
        .reverse()
        .join(""));
    },
    toggleSeen() {
      return (this.seen = !this.seen);
    },
    deleteList(DataJson, index) {
      this.DataJsons.splice(index, 1);
    }
  }
};
</script>
<style >
.active {
  margin: 100px;
}
.listItems {
  list-style-type: none;
}
.red {
  color: violet;
}
</style>