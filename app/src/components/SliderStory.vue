<template>
  <div class="story-event">
      <StoryEvent
        v-for="event in events" :key="event"
        :id=event.id
        :pic=event.pic
        :date=event.date
        :type=event.type
      />
  </div>
</template>

<script>
import StoryEvent from "./StoryEvent";
import { types } from "../config/correspondance";
import { format } from "date-fns";

export default {
  name: 'SliderStory',
  data() {
    return {
      events: []
    }
  },
  components: {
    StoryEvent,
  },
  created() {
    this.axios
      .get("http://api.localhost/historic_memories_events")
      .then((response) => {
        response.data.forEach(event => {
          const eventType = event.type.split(',')
          const eventDate = format(new Date(event.dateDeb), 'dd/MM/yyyy')
          const temp = {
            id: event.id,
            pic: types[eventType[0]].icon,
            date: eventDate,
            type: types[eventType[0]].type,
          }
          this.events.push(temp)
        });
      });
  }
}
</script>

<style scoped>

.story-event {
  display: flex;
}


@media screen and (max-width: 1000px) {

}
</style>
