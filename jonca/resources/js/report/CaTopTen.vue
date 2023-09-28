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
        :filtretopten="filtretopten"
        ></Filtre>
        <PivotTab 
        :pdata="data " 
        :jsondata="djson"  
        :depart="dep" 
        :tableh="tabh" 
        :ancrs="ancrs" 
        :anprc="anprc"
        :repvis="repvis"
        :totv="totv"
        :tabdonn="Annee"
        ></PivotTab>    
        
    </div>
</template>

<script>
import Filtre from '../components/Input.vue';
import PivotTab from '../components/PivotTab.vue';

import data from '../data.js';
import Annee from '../Annee.js';
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
        'filtretopten', 'url',
        'titre', 'categorie',
        'filtre', 'covid',
        'client', 'depart',
        'moi', 'annee'
    ],
    components: {
        Filtre,
        PivotTab,
},
data(){
    return{
        Annee,
        isLoading: true,
        result: [],
        data: [],
        getdata: [],
        // depart: ['02 - DIALYSE','03 - HOSPITALIER','04 - IMAGERIE','05 - LABORATOIRE'],
        // fil: ['VENTE COURANTE'],
        // covid: ['-'],
        // client: ['VARIAN MEDICAL SYSTEMS'],
        // annee: [],
        // moi: ['JANVIER', 'FEVRIER', 'MARS', 'AVRIL', 'MAI', 'JUIN', 'JUILLET', 'AOUT', 'SEPTEMBRE', 'OCTOBRE', 'NOVEMBRE', 'DECEMBRE'],
    }
},
methods: {
        eventHandler(d){
            //console.log("data",d);
            this.data = d;
            this.getdata = new data(d, this.dep, 'Annee', 'Montant');
            //console.log("getdata",this.getdata);
        }
    }
}

</script>


