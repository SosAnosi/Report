<template>
    <div class="container">
        <Filtre
        @GetData="eventHandler" 
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
        :tabdonn="semaineliste"
        ></PivotTab> <br>
        <chart 
        :cdata="getdata" 
        :jdata="djson" 
        :chratdt="dep"
        :semd="semd"
        :semjson="semjson"
        :bar="bar"
        :line="line"
        ></chart>
    </div>
</template>

<script>
import Filtre from '../components/Input.vue';
import PivotTab from '../components/PivotTab.vue';
import chart from '../CaMois/Chartm.vue';
import data from '../CaMois/datam.js';
import sem from '../Semaine.js';
import pardefaut from '../json/default.json';
export default {
    props: [
        'ptable','djson',
        'dep','title', 
        'tabh', 'getdate',
        'visfil','visco', 
        'viscli', 'viscat', 
        'visann', 'vismoi',
        'visdep', 'jsonf',
        'semjson', 'diff',
        'ancrs', 'anprc',
        'repvis', 'totv',
        'bar', 'line',
        'titre', 'categorie',
        'filtre', 'covid',
        'client', 'depart',
        'moi', 'annee'
        
    ],
    components: {
        chart,
        PivotTab,
        Filtre,
},
data(){
    return{
        url: "/api/caAnnee",
        isLoading: true,
        //annee:['2023'],
        result: [],
        data: [],
        getdata: [],
        semd: [],
        sjson : new sem(JSON.parse(this.jsonf), 'SEMAINE'),
        depar: pardefaut.DEPARTEMENT,
        fil: pardefaut.FILTRE,
        covi: pardefaut.COVID,
        clien: pardefaut.CLIENT,
        anne: pardefaut.ANNEE,
        mois: [new Date().toLocaleString('default', {month:'long'}).toUpperCase()],
        
    }
},
methods: {
        eventHandler(d){
            this.data = d;
            this.semd = new sem(d, 'SEMAINE');
            this.getdata = new data(d, this.dep, 'SEMAINE', 'Montant');
        }
    },
computed: {
        semaineliste(){
            if(this.data.length <= 0){
                return this.sjson;
            } else {
                return this.semd;
            }
        },
    }
}

</script>


