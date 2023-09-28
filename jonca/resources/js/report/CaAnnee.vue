<template>
    <div class="container">
        <Filtre @GetData="eventHandler" 
        :table="ptable" 
        :fil="filtre" 
        :covid="covid" 
        :client="client" 
        :categorie="categorie"
        :diff="diff"
        :moi="moi"
        :titr="titre"
        :departe="depart"
        :titre="title"
        :getdate="getdate"
        :visfil="visfil"
        :visco="visco"
        :viscli="viscli"
        :visdep="visdep"
        :viscat="viscat"
        :visann="visann"
        :vismoi="vismoi"
        :url="url"
        :ttf="ttf"
        :annee="annee"
        ></Filtre>
        <PivotTab 
        :pdata="getdata" 
        :jsondata="djson"  
        :depart="dep" 
        :tableh="tabh" 
        :ancrs="ancrs" 
        :anprc="anprc"
        :repvis="repvis"
        :totv="totv"
        :tabdonn="Annee"
        ></PivotTab> <br>   
        <Chart 
        :cdata="getdata"
        :jdata="djson" 
        :chratdt="dep"
        :bar="bar"
        :line="line"
        :annee="Annee"
        ></Chart>  
       
    </div>
</template>

<script>
import Filtre from '../components/Input.vue';
import PivotTab from '../components/PivotTab.vue';
import Chart from '../components/Chart.vue';
import data from '../data.js';
import Annee from '../Annee.js';
//import pardefaut from '../json/default.json';
export default {
    props: [
        'ptable','djson',
        'dep','title', 
        'tabh', 'getdate',
        'ancrs', 'anprc',
        'visfil','visco', 
        'viscli', 'viscat', 
        'visann', 'vismoi',
        'visdep', 'diff',
        'repvis', 'totv',
        'line', 'bar',
        'ttf', 'url',
        'titre', 'categorie',
        'depjson', 'filjson',
        'filtre', 'covid',
        'client', 'depart',
        'moi', 'annee'
        
    ],
    components: {
        Filtre,
        PivotTab,
        Chart,
},
data(){
    return{
        Annee,
        result: [],
        data: [],
        getdata: [],
        // depart: pardefaut.DEPARTEMENT,
        // fil: pardefaut.FILTRE,
        // covid: pardefaut.COVID,
        // client: pardefaut.CLIENT,
        // annee: [],
        // moi: pardefaut.MOIS,
        
    }
},
methods: {
        eventHandler(d){
            this.data = d;
            this.getdata = new data(d, this.dep, 'ANNEE', 'Montant');
            //console.log("getdata",this.getdata);
        }
    }
}

</script>
<style>
.dropdown button {
    padding: 0 !important;
}

.dropdown-menu{
    max-height: 146px;
    overflow: scroll;
    overflow-x: hidden;
    margin-top: 0px;
}

.label {
    width: 110px;
}

li {
    margin-left: 20px;
}

li .page-item {
    margin: 0 !important;
}

td {
    width: 200px;
}

table {
    font-size: 0.80em;
}

tr .total {
    text-align: center;
}

li label {
    font-size: 0.80em;
}
.chart{
    margin-block: 20px;
}
.cross{
    margin-block: 20px;
}

</style>

