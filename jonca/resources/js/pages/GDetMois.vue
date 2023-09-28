<template>
    <div>
        <depGDetailsMois
            :jsonf="depj.GLOBAL"
            :ptable="dep" 
            :djson="depjson"
            :dep="fam" 
            :title="titledep" 
            :tabh="headdep" 
            :getdate="getdate" 
            :visfil="visfildep"
            :visco="viscodep"
            :viscli="visclidep"
            :visdep="visdepdep"
            :viscat="viscategdep"
            :visann="visanndep"
            :vismoi="vismoidep"
            :semjson="semjson"
            :ancrs="getdate" 
            :anprc="getdate-1"
            :totv="totv"
            :repvis="repvis"
            :diff="diff"
            :bar="bar"
            :line="line"
            :titre="titreG"
            :categorie="categorieG"
            :annee="anne"
            :client="clien"
            :covid="covi"
            :depart="depar"
            :filtre="fil"
            :moi="moiS"
        ></depGDetailsMois> <hr>
        <repGDetailsMois
            :jsonf="repj.GLOBAL" 
            :ptable="rep" 
            :djson="repjson" 
            :dep="repr" 
            :title="titlerep" 
            :tabh="headrep"
            :getdate="getdate" 
            :visfil="visfilrep" 
            :visco="viscorep" 
            :viscli="visclirep" 
            :visdep="visdeprep"
            :viscat="viscategrep" 
            :visann="visannrep" 
            :vismoi="vismoirep" 
            :semjson="semrepjson" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :totv="totv"
            :repvis="repvis"
            :diff="diff"
            :bar="bar"
            :line="line"
            :titre="titreG"
            :categorie="categorieG"
            :annee="anne"
            :client="clien"
            :covid="covi"
            :depart="depar"
            :filtre="fil"
            :moi="moiS"
        ></repGDetailsMois> <hr>
        <regGDetailsMois
            :jsonf="regj.GLOBAL" 
            :ptable="reg" 
            :djson="regjson" 
            :dep="regr" 
            :title="titlereg" 
            :tabh="headreg"
            :getdate="getdate" 
            :visfil="visfilreg" 
            :visco="viscoreg" 
            :viscli="visclireg" 
            :visdep="visdepreg"
            :viscat="viscategreg" 
            :visann="visannreg" 
            :vismoi="vismoireg" 
            :semjson="semregjson" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :totv="totv"
            :repvis="repvis"
            :diff="diff"
            :bar="bar"
            :line="line"
            :titre="titreG"
            :categorie="categorieG"
            :annee="anne"
            :client="clien"
            :covid="covi"
            :depart="depar"
            :filtre="fil"
            :moi="moiS"
        ></regGDetailsMois> <hr>
        <categGDetailsMois
            :jsonf="catj.GLOBAL" 
            :ptable="cat" 
            :djson="catjson" 
            :dep="cate" 
            :title="titlecat" 
            :tabh="headcat"
            :getdate="getdate" 
            :visfil="visfilcat" 
            :visco="viscocat" 
            :viscli="visclicat" 
            :visdep="visdepcat"
            :viscat="viscategcat" 
            :visann="visanncat" 
            :vismoi="vismoicat" 
            :semjson="semcatjson"
            :ancrs="getdate" 
            :anprc="getdate-1"
            :totv="totv"
            :repvis="repvis" 
            :diff="diff"
            :bar="bar"
            :line="line"
            :titre="titreG"
            :categorie="categorieG"
            :annee="anne"
            :client="clien"
            :covid="covi"
            :depart="depar"
            :filtre="fil"
            :moi="moiS"
        ></categGDetailsMois> <hr>
        <moisGDetailsMois
            :jsonf="moisj.GLOBAL" 
            :ptable="moi" 
            :djson="mjson" 
            :dep="mois" 
            :title="titlem" 
            :tabh="headm"
            :getdate="getdate" 
            :visfil="visfilm" 
            :visco="viscom" 
            :viscli="visclim" 
            :visdep="visdepm"
            :viscat="viscategm" 
            :visann="visannm" 
            :vismoi="vismoim" 
            :semjson="semmjson"
            :ancrs="getdate" 
            :anprc="getdate-1"
            :totv="totv"
            :repvis="repvis" 
            :diff="diff"
            :bar="bar"
            :line="line"
            :titre="titreG"
            :categorie="categorieG"
            :annee="anne"
            :client="clien"
            :covid="covi"
            :depart="depar"
            :filtre="fil"
            :moi="moiS"
            
        ></moisGDetailsMois>
    </div>
    
  
</template>
<script>
import depGDetailsMois from '../report/CaMois.vue';
import repGDetailsMois from '../report/CaMois.vue';
import regGDetailsMois from '../report/CaMois.vue';
import categGDetailsMois from '../report/CaMois.vue';
import moisGDetailsMois from '../report/CaMois.vue';


import depj from '../json/depfilem.json';
import repj from '../json/repfilemois.json';
import regj from '../json/regfilem.json';
import catj from '../json/catfilem.json';
import moisj from '../json/moisfilem.json';


import datam from '../CaMois/datam.js';
import sem from '../Semaine.js';
import pardefaut from '../json/default.json';

const userId = document.querySelector("meta[name='user']").getAttribute("content");
let fich;
try {
    fich = require("../json/UserFile/"+userId+".json");
} catch (e) {
    fich = require("../json/defaultuser.json") ;
}

export default{
components:{
    depGDetailsMois,
    repGDetailsMois,
    regGDetailsMois,
    categGDetailsMois,
    moisGDetailsMois,
},
data(){
    return{
            // depar: pardefaut.DEPARTEMENT,
            // fil: pardefaut.FILTRE,
            // covi: pardefaut.COVID,
            // clien: pardefaut.CLIENT,
            // anne: pardefaut.ANNEE,
            //moiS: [new Date().toLocaleString('default', {month:'long'}).toUpperCase()],

            depar: fich.GLOBAL.DEPARTEMENT,
            fil: fich.GLOBAL.FILTRE,
            covi: fich.GLOBAL.COVID,
            clien: fich.GLOBAL.CLIENT,
            anne: fich.GLOBAL.ANNEE,
            moiS: fich.RC.MOISDERN,
            titreG: 'GLOBAL',
            categorieG: fich.GLOBAL.CATEGORIEG,
            diff: false,
            totv:true,
            repvis: false,
            bar: true,
            line: false,
            //DEPARTEMENT
            titledep: 'PAR DEPARTEMENT',
            headdep: 'Departement',
            fam: 'FAMILLE',
            dep: ['FAMILLE'],
            depj,
            depjson: new datam(JSON.parse(depj.GLOBAL), 'FAMILLE', 'SEMAINE', 'Montant'),
            semjson: new sem(JSON.parse(depj.GLOBAL), 'SEMAINE'),
            visfildep: true,
            viscodep: true,
            visdepdep: false,
            visclidep: true,
            viscategdep: true,
            visanndep: true,
            vismoidep: true,
            iddep: 'dep',


            //REGION
            titlereg: 'PAR REGION',
            headreg: 'Region',
            regr: 'AXE',
            regj,
            reg: ['AXE'],
            regjson: new datam(JSON.parse(regj.GLOBAL), 'AXE', 'SEMAINE', 'Montant'),
            semregjson: new sem(JSON.parse(regj.GLOBAL), 'SEMAINE'),
            visfilreg: true,
            viscoreg: true,
            visdepreg: true,
            visclireg: true,
            viscategreg: true,
            visannreg: true,
            vismoireg: true,
            idreg: 'reg',

            //REPRESENTANT
            titlerep: 'PAR REPRESENTANT',
            headrep: 'Representant',
            repr: 'REPRESENTANT',
            repj,
            rep: ['REPRESENTANT'],
            repjson: new datam(JSON.parse(repj.GLOBAL), 'REPRESENTANT', 'SEMAINE', 'Montant'),
            semrepjson: new sem(JSON.parse(repj.GLOBAL), 'SEMAINE'),
            visfilrep: true,
            viscorep: true,
            visdeprep: true,
            visclirep: true,
            viscategrep: true,
            visannrep: true,
            vismoirep: true,
            idrep: 'rep',

            //CATEGORIE
            titlecat: 'PAR CATEGORIE',
            headcat: 'Categorie',
            cate: 'SSFAMILLE',
            catj,
            cat: ['SSFAMILLE'],
            catjson: new datam(JSON.parse(catj.GLOBAL), 'SSFAMILLE', 'SEMAINE', 'Montant'),
            semcatjson: new sem(JSON.parse(catj.GLOBAL), 'SEMAINE'),
            visfilcat: true,
            viscocat: true,
            visdepcat: true,
            visclicat: true,
            viscategcat: false,
            visanncat: true,
            vismoicat: true,
            idcat: 'cat',

            //MOIS
            titlem: 'PAR MOIS',
            headm: 'Mois',
            mois: 'MOIS',
            moisj,
            moi: ['MOIS'],
            mjson: new datam(JSON.parse(moisj.GLOBAL), 'MOIS', 'SEMAINE', 'Montant'),
            semmjson: new sem(JSON.parse(moisj.GLOBAL), 'SEMAINE'),
            visfilm: true,
            viscom: true,
            visdepm: true,
            visclim: true,
            viscategm: true,
            visannm: true,
            vismoim: true,
            idmo: 'mo',
            barm:false,
            linem:true,
        
    }
},
computed:{
    getdate(){
        //console.log(this.diff);
        let date =  new Date().getFullYear();
        return date;
        },
    },
}
</script>