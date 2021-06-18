<template>
    <div class="results-card">
      <div class="card-infos">
        <div class="infos-header">
          <div class="infos-nom">N°{{ id }}</div>
          <div class="infos-dates">{{ ddd }}</div>
          <div class="types-flex">
            <TagEvent v-for="type in types" :key="type" :type="type" />
          </div>
        </div>
        <div class="infos-body">
          <div class="infos-local">{{ localisation != -1 ? "Départements : " + localisation : "" }}</div>
          <p class="description-prop">{{ description }}</p>
        </div>
      </div>
      <div class="infos-btn">
        <div @click="onEventView" class="btn-icon arrow-right"></div>
      </div>
    </div>
</template>

<script>
import TagEvent from './TagEvent.vue';

export default {
  components: { TagEvent },
  name: "Card",
  props: [
    "id",
    "nom",
    "importance",
    "ddd",
    "ddf",
    "duree",
    "types",
    "localisation",
    "description",
    "valeurs",
  ],
  methods: {
    onEventView: function() {
      this.$router.push({ name: 'Event', params: { id: this.id } })
    }
  }
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>

.results-card {
  display: flex;
  width: 500px;
  padding: 1em;
  margin: 15px 10px;
  align-items: flex-start;
  border-radius: 8px;
  box-shadow: var(--shadow-neumorphism-outside);
}

.card-infos {
  display: flex;
  flex-direction: column;
  text-transform: capitalize;
  width: 100%;
}

.types-flex {
  display: flex;
  flex-wrap: wrap;
}

.infos-header {
  display: flex;
  align-items: center;
  text-transform: capitalize;
}

.infos-nom {
  color: var(--primary-color);
  margin: 0 30px 0 0;
}

.infos-dates {
  font-size: 0.7em;
  color: #cccccc;
  margin-right: 8px;
}

.infos-body {
  text-align: left;
  font-size: 0.8em;
}

.infos-local {
  margin: 10px 0;
}

.infos-btn {
  width: 3em;
  text-align: -webkit-center;
}

.btn-icon {
  margin: auto;
  display: flex;
  justify-content: center;
  align-items: center;
}

.btn-icon:after {
  content: "";
  width: 0.8em;
  height: 0.8em;
  border-top: 0.3em solid #91ade3;
  border-right: 0.3em solid #91ade3;
  -moz-transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
