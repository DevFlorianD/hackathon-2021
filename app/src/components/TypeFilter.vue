<template>
  <div class="container">
    <h2>Types</h2>
    <div class="icon_list">
      <IconFilter
        v-for="icon in icons"
        :key="icon"
        :name="icon.name"
        :icon="icon.icon_path"
        @selectedTypeFilter="onSelectedTypeFilter"
      />
    </div>
  </div>
</template>

<script>
import IconFilter from "./IconFilter.vue";
export default {
  name: "TypeFilter",
  components: {
    IconFilter,
  },
  methods: {
    onSelectedTypeFilter: function(selectedTypeFilter) {
      this.$emit('selectedTypeFilter', selectedTypeFilter)
    }
  },
  data: () => ({
    icons: [
      {
        name: "Orage",
        icon_path: require("@/assets/icones/orage.svg"),
      },
      {
        name: "Gelée",
        icon_path: require("@/assets/icones/gelée.svg"),
      },
      {
        name: "Inondation",
        icon_path: require("@/assets/icones/innondation.svg"),
      },
      {
        name: "Tornade",
        icon_path: require("@/assets/icones/tornade.svg"),
      },
      {
        name: "Grêle",
        icon_path: require("@/assets/icones/grêle.svg"),
      },
      {
        name: "Froid",
        icon_path: require("@/assets/icones/froid.svg"),
      },
    ],
  }),
};
</script>
<style scoped>
.container {
  padding: 1em;
  width: 100%;
  max-width: 500px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.icon_list {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: baseline;
  margin-top: 20px;
}
</style>
