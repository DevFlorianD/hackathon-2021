<template>
  <div class="container">
    <h2>Résultats</h2>
    <div class="results border">
      <Card
      v-for="event in events"
      :key="event"
      :id="event.id"
      :localisation="event.localisation"
      :nom="event.title"
      :description="event.description"
      :ddd="event.dateDeb"
      :types="event.types"
    />
    </div>
  </div>
</template>

<script>
import Card from "./Card";
import { format } from "date-fns";
import { types } from "../config/correspondance";

export default {
  name: "ResultsCard",
  components: {
    Card,
  },
  data() {
    return {
      events: [],
    };
  },

  mounted() {
    this.axios
      .get("http://api.localhost/historic_events/")
      .then((response) => {
        response.data.forEach(event => {
          let description = "Pas de description disponible !"
          if (event.shortDesc) {
            description = event.shortDesc
          }
          const typesTab = event.type.split(',')
          const typesValue = []
          typesTab.forEach(type => {
            typesValue.push(types[type])
          })
          const temp = {
            id: event.id,
            localisation: event.localisation,
            dateDeb: format(new Date(event.dateDeb), 'dd/MM/yyyy'),
            description: description,
            types: typesValue
          }
          this.events.push(temp)
        });
      })
  },
};
</script>

<style scoped>
.container {
  width: 100%;
  padding: 0 2em;
}

.results {
  max-width: 2000px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  width: 100%;
}
</style>
