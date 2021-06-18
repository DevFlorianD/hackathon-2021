<template>
  <div>
    <img id="logo" src="@/assets/images/logo.svg" alt="logo" width="80" />
    <h2 class="historic">HistorIC</h2>
    <SliderStory />
    <div class="divider"></div>
    <div class="filters">
      <div class="range-inputs">
        <TypeFilter @selectedTypeFilter="onSelectedTypeFilter" />
        <RangeInput max=3 />
        <RangeInput max=4 />
      </div>
      <LocationFilter @selectedDepTab="onSelectedDepTabEvent" />
      <Calendar />
      <div class="divider"></div>
    </div>
    <div @click="filter" class="btn btn-filter">Filtrer</div>
    <ResultsCard />
  </div>
</template>

<script>
import LocationFilter from "../components/LocationFilter.vue";
import SliderStory from "../components/SliderStory.vue";
import TypeFilter from "../components/TypeFilter";
import Calendar from "../components/Calendar";
import RangeInput from "../components/RangeInput.vue";
import ResultsCard from '../components/ResultsCard.vue';

export default {
  components: {
    LocationFilter,
    TypeFilter,
    SliderStory,
    Calendar,
    RangeInput,
    ResultsCard,
  },
  name: "Home",
  methods: {
    onSelectedDepTabEvent: function (selectedDepTab) {
      console.log(selectedDepTab);
    },
    onSelectedTypeFilter: function (selectedTypeFilter) {
      console.log(selectedTypeFilter)
    },
    filter: function() {
      console.log('filter')
    }
  },
  created() {

  },
};
</script>

<style scoped>
.container {
  display: flex;
  flex-direction: column;
}

#logo {
  margin: 30px 0;
}

.btn-filter {
  margin: 70px 0;
}

.range-inputs {
  display: flex;
  flex-direction: column;

}

.divider {
  width: 80%;
  height: 1px;
  margin-top: 50px;
  background-color: white;
}

.filters {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-evenly;
  width: 100%;
  align-items: center;
}

.historic {
  font-size: 3em;
  text-transform: initial;
  margin: 10px;
}

@media screen and (max-width: 1000px) {
  .btn-filter, .historic {
    display: none;
  }
}

@media screen and (min-width: 1000px) {
  #logo {
    display: none;
  }
}
</style>
