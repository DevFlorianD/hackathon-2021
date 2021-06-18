<template>
  <div class="container">
    <h2 v-if="max == '3'">Durée</h2>
    <h2 v-else>Importance</h2>
    <input
      type="range"
      class="rangeInput"
      value="2"
      min="0"
      :max="max"
      list="array"
    />
    <ul class="array" v-if="max == '3'">
      <li>Ponctuel</li>
      <li>Plusieurs <br />jours</li>
      <li>Plusieurs <br />semaines</li>
      <li>Plusieurs <br />mois</li>
    </ul>
    <ul class="array" v-else>
      <li>Anecdotique</li>
      <li>Notable</li>
      <li>Remarquable</li>
      <li>Exceptionnelle</li>
      <li>Mémorable</li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'RangeInput',
  data() {
      return {
          value: 2
      }
  },
  props: ['id', 'max'],
}
</script>

<style scoped>
.container {
  margin-top: 20px;
  width: 100%;
  max-width: 500px;
}

.rangeInput {
  width: 100%;
  margin-top: 20px;
  align-self: center;
}

.array1 {
  padding: 0;
  margin: 0;
  list-style-type: none;
  font-size: 0.6em;
  padding-left: 2em;
  width: 100%;
  max-width: 500px;
  color: var(--primary-color);
}

.array {
  padding: 0em 2.5em;
  list-style-type: none;
  font-size: 0.6em;
  width: 100%;
  max-width: 500px;
  color: var(--primary-color);
  display: flex;
  justify-content: space-between;
}

input[type="range"].rangeInput {
  -webkit-appearance: none; /*nécessaire pour Chrome */
  font: inherit; /* même rendu suivant font document */
  color: var(
    --primary-color
  ); /* sert pour couleur de référence, via currentColor, pour le curseur */
  background: var(
    --background-color
  ); /* sert pour couleur de fond de la zone de déplacement */
  box-sizing: border-box; /* même modèle de boîte pour tous */
  transition: opacity 0.2s;
  border-radius: 50px;
  box-shadow: var(--shadow-neumorphism-outside);
  cursor: pointer;
}

input[type="range"].rangeInput::-webkit-slider-thumb {
  -webkit-appearance: none;
  height: 1em;
  width: 1em;
  border-radius: 50px;
  background: var(--primary-color);
  cursor: pointer;
  box-shadow: var(--shadow-neumorphism-outside);
}
</style>
