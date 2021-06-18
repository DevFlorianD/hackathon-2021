<template>
  <div class="border">
    <div class="border-map">
      <EventMap :selected=event.localisation
      />
      <section class="icons">
        <IconFilter
            v-for="icon in icons"
            :key="icon"
            :name="icon.name"
            :icon="icon.icon_path"
        />
      </section>
    </div>
    <div class="event-header">
      <h1>
        L'essentiel
      </h1>
    </div>
    <div class="event-body">
      Cet événement a débuté le {{ formatDate(event.dateDeb) }} et s'est terminé le {{ formatDate(event.dateFin) }}.
      {{ event.shortDesc }}


      Il est classé comme événement {{ event.importance }}.
      Il a été classé dans les catégories {{ icons[0] ? icons[0].name : "" }} et {{ icons[1] ? icons[1].name : ""}}

    </div>
    <Charts :id=currentId
    />
  </div>
  <div>
  </div>
</template>

<script>
import moment from 'moment'
import EventMap from '../components/EventMap'
import IconFilter from '../components/IconFilter'
import Charts from '../components/Charts'
import { types, importance } from "../config/correspondance";

export default {
  name: 'Event',
  components: {
    EventMap,
    IconFilter,
    Charts
  },
  data: function () {
    return {
      currentId: "",
      event: {},
      charts: [],
      icons: [],
    };
  },
  mounted() {
    this.currentId = window.location.pathname.split('/')[1]
    this.axios.get('http://api.localhost/historic_events/' + this.currentId)
    .then(response => {
      const data = response.data
      this.eventIcon(data.type)
      this.event = data
      this.event.importance = importance[data.importance]
    })
  },
  methods: {
    formatDate: function (value) {
      if (value) {
        moment.locale('fr')
        return moment(String(value)).format('LLLL')
      }
    },
    eventIcon: function (value) {
      const typesTab = value.split(',');
      typesTab.forEach(val => {
        const temp = {
          name: types[val].type,
          icon_path: types[val].icon,
        }
        this.icons.push(temp)
      })
    },
  }
}
</script>

<style scoped>
.border {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  border-radius: 50px;
  outline: none;
  border: none;
  box-shadow: var(--shadow-neumorphism-outside);
  margin: 6em 1em;
}

.event-header {
  inline-size: -webkit-fill-available;
}

.icons {
  display: flex;
  justify-content: space-between;
}
</style>
