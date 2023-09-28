<template>
    <div>
        <depRCDetailsMois 
        :jsonf="depj.RC" 
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
        :titre="titreRC"
        :categorie="categorieRC"
        :annee="anne"
        :client="clien"
        :covid="covi"
        :depart="depar"
        :filtre="fil"
        :moi="moiS"
        ></depRCDetailsMois> <hr>
        <repRCDetailsMois 
        :jsonf="repj.RC" 
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
        :titre="titreRC"
        :categorie="categorieRC"
        :annee="anne"
        :client="clien"
        :covid="covi"
        :depart="depar"
        :filtre="fil"
        :moi="moiS"
        ></repRCDetailsMois> <hr>
        <regRCDetailsMois
        :jsonf="regj.RC" 
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
        :titre="titreRC"
        :categorie="categorieRC"
        :annee="anne"
        :client="clien"
        :covid="covi"
        :depart="depar"
        :filtre="fil"
        :moi="moiS"
        ></regRCDetailsMois> <hr>
        <categRCDetailsMois
        :jsonf="catj.RC" 
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
        :titre="titreRC"
        :categorie="categorieRC"
        :annee="anne"
        :client="clien"
        :covid="covi"
        :depart="depar"
        :filtre="fil"
        :moi="moiS"
       
        ></categRCDetailsMois> <hr>
        <moisRCDetailsMois
        :jsonf="moisj.RC" 
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
        :titre="titreRC"
        :categorie="categorieRC"
        :annee="anne"
        :client="clien"
        :covid="covi"
        :depart="depar"
        :filtre="fil"
        :moi="moiS"
        
        ></moisRCDetailsMois>
        
    </div>
    
</template>
<script>
import depRCDetailsMois from '../report/CaMois.vue';
import repRCDetailsMois from '../report/CaMois.vue';
import regRCDetailsMois from '../report/CaMois.vue';
import categRCDetailsMois from '../report/CaMois.vue';
import moisRCDetailsMois from '../report/CaMois.vue';

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

export default {
    components: {
        depRCDetailsMois,
        repRCDetailsMois,
        regRCDetailsMois,
        categRCDetailsMois,
        moisRCDetailsMois,
    },
    data() {
        return {
           
            //parametre par default CA par annee
            // depar: pardefaut.DEPARTEMENT,
            // fil: pardefaut.FILTRE,
            // covi: pardefaut.COVID,
            // clien: pardefaut.CLIENT,
            // anne: pardefaut.ANNEE,
            //moiS: [new Date().toLocaleString('default', {month:'long'}).toUpperCase()],

            depar: fich.RC.DEPARTEMENT,
            fil: fich.RC.FILTRE,
            covi: fich.RC.COVID,
            clien: fich.RC.CLIENT,
            anne: fich.RC.ANNEE,
            moiS: fich.RC.MOISDERN,
            titreRC:'R&C',
            categorieRC: fich.RC.CATEGORIERC,
            diff: true,
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
            depjson: new datam(JSON.parse(depj.RC), 'FAMILLE', 'SEMAINE', 'Montant'),
            semjson: new sem(JSON.parse(depj.RC), 'SEMAINE'),
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
            regjson: new datam(JSON.parse(regj.RC), 'AXE', 'SEMAINE', 'Montant'),
            semregjson: new sem(JSON.parse(regj.RC), 'SEMAINE'),
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
            repjson: new datam(JSON.parse(repj.RC), 'REPRESENTANT', 'SEMAINE', 'Montant'),
            semrepjson: new sem(JSON.parse(repj.RC), 'SEMAINE'),
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
            catjson: new datam(JSON.parse(catj.RC), 'SSFAMILLE', 'SEMAINE', 'Montant'),
            semcatjson: new sem(JSON.parse(catj.RC), 'SEMAINE'),
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
            mjson: new datam(JSON.parse(moisj.RC), 'MOIS', 'SEMAINE', 'Montant'),
            semmjson: new sem(JSON.parse(moisj.RC), 'SEMAINE'),
            visfilm: true,
            viscom: true,
            visdepm: true,
            visclim: true,
            viscategm: true,
            visannm: true,
            vismoim: true,
            idmo: 'mo',
            barm:false,
            linem: true

        }
    },
    computed: {
        getdate() {
            //console.log(this.diff);
            let date = new Date().getFullYear();
            return date;
        },
    },
}
</script>