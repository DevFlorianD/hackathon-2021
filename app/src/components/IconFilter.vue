<template>
  <div class="type-filter btn-icon">
    <img @click="selectedTypeFilter" :src="icon" alt="icon" width="25" />
    <p>{{ name }}</p>
  </div>
</template>

<script>
import { typeFilter } from '../config/correspondance'

export default {
  name: "Iconfilter",
  props: ["id", "name", "icon"],
  methods: {
    selectedTypeFilter: function() {
      const tabIdType = typeFilter[this.name] 
      this.$emit('selectedTypeFilter', tabIdType)
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
.container {
  width: 100%;
  display: flex;
  justify-content: space-between;
}

.type-filter {
  margin: 1em;
}

.type-filter p {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  font-size: 0.7em;
  margin-top: 0.5em;
}
</style>
