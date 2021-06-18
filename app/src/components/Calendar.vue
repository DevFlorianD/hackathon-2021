<template>
  <div class="container">
    <h2>Calendrier</h2>
    <DatePicker
      class="datepicker"
      is-expanded
      is-dark
      v-model="range"
      is-range
    ></DatePicker>
  </div>
</template>

<script>
import { DatePicker } from "v-calendar";

export default {
  name: "Calendar",
  components: {
    DatePicker,
  },
  data() {
    return {
      range: {
        start: new Date(),
        end: new Date(),
      },
    };
  },
};
</script>

<style scoped>
.container {
  width: 100%;
  padding: 0em 0.8em;
  max-width: 500px;
}
.datepicker {
  background: var(--background-color) !important;
  border: var(--background-color);
  border-radius: 20px;
  margin-top: 30px;
  color: white;
  box-shadow: var(--shadow-neumorphism-outside);
}
</style>
