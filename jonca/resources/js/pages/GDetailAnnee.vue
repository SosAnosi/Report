<template>
    <div>
        <!-- GLOBAL -->
        <CaGDep
        :ptable="dep" 
        :djson="depgjson" 
        :dep="fam" 
        :title="titledep" 
        :tabh="headdep" 
        :getdate="getdate" 
        :ancrs="getdate" 
        :anprc="getdate-1" 
        :visfil="visfildep"
        :visco="viscodep"
        :viscli="visclidep"
        :visdep="visdepdep"
        :viscat="viscategdep"
        :visann="visanndep"
        :vismoi="vismoidep"
        :diff="diffdepg"
        :totv="totv"
        :repvis="repvis"
        :bar="bar"
        :line="line"
        :titre="titreG"
        :categorie="categorieG"
        :url="urlRG"
        :annee="anneeV"
        :client="client"
        :covid="covid"
        :filtre="fil"
        :moi="moiS"
        :depart="depart"
        ></CaGDep><hr>
        <CaGRep
        :ptable="rep" 
        :djson="repgjson" 
        :dep="repre" 
        :title="titlerep" 
        :tabh="headrep" 
        :getdate="getdate" 
        :ancrs="getdate" 
        :anprc="getdate-1"
        :visfil="visfilrep"
        :visco="viscorep"
        :viscli="visclirep"
        :visdep="visdeprep"
        :viscat="viscategrep"
        :visann="visannrep"
        :vismoi="vismoirep"
        :diff="diffdepg"
        :totv="totv"
        :repvis="repvis"
        :bar="bar"
        :line="line"
        :titre="titreG"
        :categorie="categorieG"
        :url="urlRG"
        :annee="anneeV"
        :client="client"
        :covid="covid"
        :filtre="fil"
        :moi="moiS"
        :depart="depart"
        ></CaGRep><hr>
         <CaGReg
        :ptable="reg" 
        :djson="reggjson" 
        :dep="regre" 
        :title="titlereg" 
        :tabh="headreg" 
        :getdate="getdate" 
        :ancrs="getdate" 
        :anprc="getdate-1"
        :visfil="visfilreg"
        :visco="viscoreg"
        :viscli="visclireg"
        :visdep="visdepreg"
        :viscat="viscategreg"
        :visann="visannreg"
        :vismoi="vismoireg"
        :diff="diffdepg"
        :totv="totv"
        :repvis="repvis"
        :bar="bar"
        :line="line"
        :titre="titreG"
        :categorie="categorieG"
        :url="urlRG"
        :annee="anneeV"
        :client="client"
        :covid="covid"
        :filtre="fil"
        :moi="moiS"
        :depart="depart"
        ></CaGReg> <hr>
        <CaGCat
        :ptable="cat" 
        :djson="catgjson" 
        :dep="cate" 
        :title="titlecat" 
        :tabh="headcat" 
        :getdate="getdate" 
        :ancrs="getdate" 
        :anprc="getdate-1"
        :visfil="visfilcat"
        :visco="viscocat"
        :viscli="visclicat"
        :visdep="visdepcat"
        :viscat="viscategcat"
        :visann="visanncat"
        :vismoi="vismoicat"
        :diff="diffdepg"
        :totv="totv"
        :repvis="repvis"
        :bar="bar"
        :line="line"
        :titre="titreG"
        :categorie="categorieG"
        :url="urlRG"
        :annee="anneeV"
        :client="client"
        :covid="covid"
        :filtre="fil"
        :moi="moiS"
        :depart="depart"
        ></CaGCat> <hr>
        <CaGMois
        :ptable="moi" 
        :djson="moisgjson" 
        :dep="mois" 
        :title="titlem" 
        :tabh="headm" 
        :getdate="getdate" 
        :ancrs="getdate" 
        :anprc="getdate-1"
        :visfil="visfilm"
        :visco="viscom"
        :viscli="visclim"
        :visdep="visdepm"
        :viscat="viscategm"
        :visann="visannm"
        :vismoi="vismoim"
        :diff="diffdepg"
        :totv="totv"
        :repvis="repvis"
        :bar="barm"
        :line="linem"
        :titre="titreG"
        :categorie="categorieG"
        :url="urlRG"
        :annee="anneeV"
        :client="client"
        :covid="covid"
        :filtre="fil"
        :moi="moiS"
        :depart="depart"
        ></CaGMois> <hr>
        <CaGtopClient
        :ptable="cli" 
        :djson="clijson" 
        :dep="clie" 
        :title="titlecli" 
        :tabh="headcli" 
        :getdate="getdate" 
        :ancrs="getdate" 
        :anprc="getdate-1"
        :visfil="visfilcli"
        :visco="viscocli"
        :viscli="visclicli"
        :visdep="visdepcli"
        :viscat="viscategcli"
        :visann="visanncli"
        :vismoi="vismoicli"
        :diff="diffdepg"
        :totv="totvtop"
        :repvis="repvis"
        
        :filtretopten="ttfcli"
        :url="urlTT"
        :titre="titreG"
        :categorie="categorieG"
        :annee="anneeV"
            :client="client"
            :covid="covid"
            :filtre="fil"
            :moi="moiS"
            :depart="depart"
        ></CaGtopClient> <hr>
        <CaGtopArticle
        :ptable="art" 
        :djson="artjson" 
        :dep="arti" 
        :title="titleart" 
        :tabh="headart" 
        :getdate="getdate" 
        :ancrs="getdate" 
        :anprc="getdate-1"
        :visfil="visfilart"
        :visco="viscoart"
        :viscli="viscliart"
        :visdep="visdepart"
        :viscat="viscategart"
        :visann="visannart"
        :vismoi="vismoiart"
        :diff="diffdepg"
        :totv="totvtop"
        :repvis="repvis"
        
        :filtretopten="ttfart"
        :url="urlTT"
        :titre="titreG"
        :categorie="categorieG"
        :annee="anneeV"
            :client="client"
            :covid="covid"
            :filtre="fil"
            :moi="moiS"
            :depart="depart"
        ></CaGtopArticle> <hr>
        <CaGtopFou
        :ptable="fou" 
        :djson="foujson" 
        :dep="fous" 
        :title="titlefou" 
        :tabh="headfou" 
        :getdate="getdate" 
        :ancrs="getdate" 
        :anprc="getdate-1"
        :visfil="visfilfou"
        :visco="viscofou"
        :viscli="visclifou"
        :visdep="visdepfou"
        :viscat="viscategfou"
        :visann="visannfou"
        :vismoi="vismoifou"
        :diff="diffdepg"
        :totv="totvtop"
        :repvis="repvis"
        
        :filtretopten="ttffou"
        :url="urlTT"
        :titre="titreG"
        :categorie="categorieG"
        :annee="anneeV"
            :client="client"
            :covid="covid"
            :filtre="fil"
            :moi="moiS"
            :depart="depart"
        ></CaGtopFou> <hr>
        
    </div>
</template>
<script>
//GLOBAL
import CaGDep from '../report/CaAnnee.vue';
import CaGRep from '../report/CaAnnee.vue';
import CaGReg from '../report/CaAnnee.vue';
import CaGCat from '../report/CaAnnee.vue';
import CaGMois from '../report/CaAnnee.vue';
import CaGtopClient from '../report/CaAnnee.vue';
import CaGtopArticle from '../report/CaAnnee.vue';
import CaGtopFou from '../report/CaAnnee.vue';


import depj from '../json/depfile2.json';
import repj from '../json/repfile.json';
import regj from '../json/regfile.json';
import catj from '../json/catfile.json';
import moij from '../json/moisfile.json';
import clij from '../json/toptencli.json';
import artj from '../json/toptenart.json';
import fouj from '../json/toptenfou.json';

import data from '../data.js';
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
        CaGDep,
        CaGRep,
        CaGReg,
        CaGCat,
        CaGMois,
        CaGtopClient,
        CaGtopArticle,
        CaGtopFou,

       
    },
    data(){
        return{
            //parametre par default CA par annee
             //depart: pardefaut.DEPARTEMENT,
            // fil: pardefaut.FILTRE,
            // covid: pardefaut.COVID,
            // client: pardefaut.CLIENT,
            // anneeV: [],
            // moiS: pardefaut.MOIS,

            depart: fich.GLOBAL.DEPARTEMENT,
            fil: fich.GLOBAL.FILTRE,
            covid: fich.GLOBAL.COVID,
            client: fich.GLOBAL.CLIENT,
            anneeV: [],
            moiS: fich.GLOBAL.MOIS,

           //data pour tous
           titreG: 'GLOBAL',
           categorieG: fich.GLOBAL.CATEGORIEG,
           totv:true,
           totvtop:false,
           repvis: false,
           diffdepg: false,
           bar: true,
           line: false,
           urlRG:"/api/caAnnee",
           urlTT: "/api/topten",
            //DEPARTEMENT
            //GLOBAL
            titledep: 'PAR DEPARTEMENT',
            headdep: 'Departement',
            fam: 'FAMILLE',
            dep: ['FAMILLE'],
            visfildep: true,
            viscodep:true,
            visdepdep:false,
            visclidep:true,
            viscategdep:true,
            visanndep:false,
            vismoidep:true,
            depgjson: new data(JSON.parse(depj.GLOBAL), 'FAMILLE' , 'ANNEE', 'Montant'),
            iddep: 'dep',

            //REPRESENTANT
            //GLOBAL
            titlerep: 'PAR REPRESENTANT',
            headrep: 'Representant',
            rep:['REPRESENTANT'],
            repre:'REPRESENTANT',
            visfilrep: true,
            viscorep:true,
            visclirep:true,
            visdeprep:true,
            viscategrep:true,
            visannrep:false,
            vismoirep:true,
            repgjson:new data(JSON.parse(repj.GLOBAL), 'REPRESENTANT', 'ANNEE', 'Montant'),
            idrep: 'rep',

            //REGION
             //GLOBAL
            titlereg: 'PAR REGION',
            headreg: 'Region',
            reg:['AXE'],
            regre:'AXE',
            visfilreg: true,
            viscoreg:true,
            visclireg:true,
            viscategreg:true,
            visdepreg:true,
            visannreg:false,
            vismoireg:true,
            reggjson:new data(JSON.parse(regj.GLOBAL), 'AXE', 'ANNEE', 'Montant'),
            idreg: 'reg',

            //CATEGORIE
            //GLOBAL
            titlecat: 'PAR CATEGORIE',
            headcat: 'Categorie',
            cat:['SSFAMILLE'],
            cate:'SSFAMILLE',
            visfilcat: true,
            viscocat:true,
            visclicat:true,
            viscategcat:false,
            visdepcat:true,
            visanncat:false,
            vismoicat:true,
            catgjson: new data(JSON.parse(catj.GLOBAL), 'SSFAMILLE', 'ANNEE', 'Montant'),
            idcat: 'cat',

            //Mois
            //GLOBAL
            titlem: 'PAR MOIS',
            headm: 'Mois',
            moi:['MOIS'],
            mois:'MOIS',
            visfilm: true,
            viscom:true,
            visclim:true,
            viscategm:true,
            visdepm:true,
            visannm:false,
            vismoim:false,
            moisgjson: new data(JSON.parse(moij.GLOBAL), 'MOIS', 'ANNEE', 'Montant'),
            idmo: 'mo',
            barm: false,
            linem:true,

            //topten
            //CLIENT
            //GLOBAL
            titlecli: 'PAR CLIENT',
            headcli: 'Client',
            cli:['CLIENT'],
            clie:'CLIENT',
            visfilcli: true,
            viscocli:true,
            visclicli:true,
            viscategcli:true,
            visdepcli:true,
            visanncli:false,
            vismoicli:false,
            idRcli: 'cli',
            clijson: JSON.parse(clij.GLOBAL) ,
            ttfcli: '22',

            //ARTICLE
            //GLOBAL
            titleart: 'PAR ARTICLE',
            headart: 'Article',
            art:['ARTICLE'],
            arti:'ARTICLE',
            visfilart: true,
            viscoart:true,
            viscliart:true,
            viscategart:true,
            visdepart:true,
            visannart:false,
            vismoiart:false,
            idRart: 'art',
            artjson:JSON.parse(artj.GLOBAL) ,
            ttfart: '21',

            //FOURNISSEUR
            //GLOBAL
            titlefou: 'PAR FOURNISSEUR',
            headfou: 'Fournisseur',
            fou:['FOURNISSEUR'],
            fous:'FOURNISSEUR',
            visfilfou: true,
            viscofou:true,
            visclifou:true,
            viscategfou:true,
            visdepfou:true,
            visannfou:false,
            vismoifou:false,
            idRfou: 'fou',
            foujson: JSON.parse(fouj.GLOBAL),
            ttffou: '23',
        }
    },
    computed:{
    getdate(){
        //console.log(this.diff);
        let date =  new Date().getFullYear();
        return date;
        }
    },
}
</script>
