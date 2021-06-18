<template>
  <div class="type-filter">
    <div @click="view" class="circle">
      <img :src="pic"
           alt="icon_type"/>
      <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" style="enable-background:new -580 439 577.9 194;"
           xml:space="preserve">
          <circle cx="50" cy="50" r="40"/>
      </svg>
    </div>
    <p>
      {{ date }}<br>
      {{ type }}
    </p>
  </div>

</template>

<script>

export default {
  name: 'StoryEvent',
  props: ['id', 'pic', 'date', 'type'],
  components: {},
  methods: {
    view() {
      this.$router.push({ name: 'Event', params: { id: this.id } })
    }
  }
}
</script>

<style scoped>

.circle {
  position: relative;
  width: 55px;
  height: 55px;
  margin: 0 5px;
  cursor: pointer;
}

svg {
  fill: none;
  stroke: #8a3ab9;
  stroke-linecap: round;
  stroke-width: 3;
  stroke-dasharray: 1;
  stroke-dashoffset: 0;
  animation: stroke-draw 6s ease-out infinite alternate;
}

img {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%);
  width: 50px;
  border-radius: 50%;
  box-shadow: var(--shadow-neumorphism-outside);
}

@keyframes stroke-draw {
  from {
    stroke: #8a3ab9;
    stroke-dasharray: 1;
  }
  to {
    stroke: #cd486b;
    transform: rotate(180deg);
    stroke-dasharray: 8;
  }
}

@media screen and (min-width: 1000px) {
  .circle {
    margin: 0 25px 15px 25px !important;
  }
}
</style>
