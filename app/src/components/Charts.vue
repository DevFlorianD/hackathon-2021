<template>
  <div class="chart">
    <vue3-chart-js
        :id="doughnutChart.id"
        :type="doughnutChart.type"
        :data="doughnutChart.data"
        :options="doughnutChart.options"
    ></vue3-chart-js>
  </div>
</template>

<script>
import Vue3ChartJs from '@j-t-mcc/vue3-chartjs'

export default {
  name: 'Charts',
  components: {
    Vue3ChartJs,
  },
  props: ['id'],
  data: function () {
    return {
      doughnutChart: {
        id: 'bar',
        type: 'bar',
        data: {
          labels: [], // dates
          datasets: [
            {
              label: 'Représentation graphique des températures les moins elevées lors de cet evenement',
              backgroundColor: [
                '#e0bf14',
              ],
              data: [] // ville & temperature
            }
          ]
        },
        options: {
          plugins: {}
        }},
    };
  },

  mounted() {
    fetch('http://api.localhost/get_values/' + this.id, {
      headers: {
        'content-type': 'application/json',
        Accept: 'application/json'
      }
    }).then(res => res.json()).then(data => {
      let valeur = []
      let date = []
      for (const dataKey in data) {
        valeur.push(data[dataKey].valeur)
        date.push(data[dataKey].date)
      }
      this.doughnutChart.data.datasets = valeur
      this.doughnutChart.data.labels = date
    })
  },

}
</script>

<style scoped>
.chart {
  margin-top: 2em;
  Height: 20em;
  width: 40em;
  display: flex;
  flex-direction: column;
  background-color: white;
}
</style>