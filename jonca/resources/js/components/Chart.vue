<template>
        <div id="chart">
            <Bar
                v-if="bar"
                id="bar"
                :height="90"
                :data="chartdata"
                :options="chartOptions"
            />
            <LineChart
                v-if="line"
                id="line"
                :height="90"
                :data="chartdata"
                :options="chartOptions"
            />
        </div>
</template>
<script>
import { Bar, Line as LineChart } from 'vue-chartjs';
import { Chart as ChartJS, Title, Tooltip, Legend,BarElement, LineElement, CategoryScale, LinearScale, PointElement } from 'chart.js';
ChartJS.register(Title, Tooltip, Legend,BarElement,  CategoryScale, LinearScale, PointElement, LineElement);
import chartd from '../Chartdata.js';
import maxd from '../maxdata.js';
export default{
    props: ['cdata','jdata','chratdt', 'line', 'bar', 'annee'],
    components:{
        LineChart,
        Bar,
    },
    data() {
        return {
             data: [],
             departement: [], 
        }
    },
      computed: {
          chartdata() {
              const dat =[];
              if (this.cdata.length === 0) {
                const dataj = new chartd(this.jdata,this.annee, this.chratdt);
                  return dataj; 
                  
              } else {
                 const datap = new chartd(this.cdata,this.annee, this.chratdt);
                  return datap; 
              } 
          },
         
          chartOptions(){
            const mxd= new maxd(this.chartdata);
            const mx = Math.max(...mxd)+10000000;
            const chartopt = {
                responsive: true,
                plugins: {
                    legend: {
                        position: "bottom",
                    },
                },
                scales: {
                  y: {
                      display: true,
                      min:0,
                      max:Math.ceil(mx/100000000)*100000000,
                  }
                }
            }
            return chartopt;
          }
      },
}
</script>