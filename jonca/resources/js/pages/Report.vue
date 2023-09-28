<template>
    <div >
        <button class="btn-print" @click="printContent()"> <FontAwesomeIcon icon="print" class="font" size="lg"/></button>
        <!-- <button class="btn-actualTs" @click=""> <FontAwesomeIcon icon="print" class="font" size="lg"/></button> -->

        <div id="pdf-content">
           
            <CaDepAnnee 
            :ptable="dep" 
            :djson="depjson" 
            :dep="fam" 
            :title="titledep" 
            :tabh="headdep" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1" 
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdepdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoi"
            :diff="diffdepr"
            :totv="totv"
            :repvis="repvis"
            :bar="bar"
            :line="line"
            :url="urlRG"
            :titre="titreRC"
            :categorie="categorieRC"
            :annee="anneeV"
            :client="clientr"
            :covid="covidr"
            :filtre="filr"
            :moi="moiSr"
            :depart="departr"
            ></CaDepAnnee> <hr>

            <CaRepAnnee 
            :ptable="rep" 
            :djson="repjson" 
            :dep="repre" 
            :title="titlerep" 
            :tabh="headrep" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoi"
            :diff="diffdepr"
            :totv="totv"
            :repvis="repvis"
            :bar="bar"
            :line="line"
            :url="urlRG"
            :titre="titreRC"
            :categorie="categorieRC"
            :annee="anneeV"
            :client="clientr"
            :covid="covidr"
            :filtre="filr"
            :moi="moiSr"
            :depart="departr"
            ></CaRepAnnee><hr> 
            
            <CaRegAnnee 
            :ptable="reg" 
            :djson="regjson" 
            :dep="regre" 
            :title="titlereg" 
            :tabh="headreg" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoi"
            :diff="diffdepr"
            :totv="totv"
            :repvis="repvis"
            :bar="bar"
            :line="line"
            :url="urlRG"
            :titre="titreRC"
            :categorie="categorieRC"
            :annee="anneeV"
            :client="clientr"
            :covid="covidr"
            :filtre="filr"
            :moi="moiSr"
            :depart="departr"
            ></CaRegAnnee><hr>
            
            <CaCatAnnee
            :ptable="cat" 
            :djson="catjson" 
            :dep="cate" 
            :title="titlecat" 
            :tabh="headcat" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscategcat"
            :visann="visann"
            :vismoi="vismoi"
            :diff="diffdepr"
            :totv="totv"
            :repvis="repvis"
            :bar="bar"
            :line="line"
            :url="urlRG"
            :titre="titreRC"
            :categorie="categorieRC"
            :annee="anneeV"
            :client="clientr"
            :covid="covidr"
            :filtre="filr"
            :moi="moiSr"
            :depart="departr"
            ></CaCatAnnee><hr>
            
            <CaMoisAnnee
            :ptable="moi" 
            :djson="moisjson" 
            :dep="mois" 
            :title="titlem" 
            :tabh="headm" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoim"
            :diff="diffdepr"
            :totv="totv"
            :repvis="repvis"
            :bar="barm"
            :line="linem"
            :url="urlRG"
            :titre="titreRC"
            :categorie="categorieRC"
            :annee="anneeV"
            :client="clientr"
            :covid="covidr"
            :filtre="filr"
            :moi="moiSr"
            :depart="departr"
            ></CaMoisAnnee><hr>
            
             <!-- top ten RC -->
            <CatopClient
            :ptable="cli" 
            :djson="clijson" 
            :dep="clie" 
            :title="titlecli" 
            :tabh="headcli" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoicli"
            :diff="diffdepg"
            :totv="totv"
            :repvis="repvis"
            :bar="bar"
            :line="line"
            :filtretopten="ttfcli"
            :url="urlTT"
            :titre="titreRC"
            :categorie="categorieRC"
            :annee="anneeV"
            :client="clientr"
            :covid="covidr"
            :filtre="filr"
            :moi="moiSr"
            :depart="departr"
            ></CatopClient> <hr>
            
            <CatopArticle
            :ptable="art" 
            :djson="artjson" 
            :dep="arti" 
            :title="titleart" 
            :tabh="headart" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoiart"
            :diff="diffdepg"
            :totv="totv"
            :repvis="repvis"
            :bar="bar"
            :line="line"
            :filtretopten="ttfart"
            :url="urlTT"
            :titre="titreRC"
            :categorie="categorieRC"
            :annee="anneeV"
            :client="clientr"
            :covid="covidr"
            :filtre="filr"
            :moi="moiSr"
            :depart="departr"
            ></CatopArticle> <hr>
            
            <CatopFou
            :ptable="fou" 
            :djson="foujson" 
            :dep="fous" 
            :title="titlefou" 
            :tabh="headfou" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoifou"
            :diff="diffdepg"
            :totv="totv"
            :repvis="repvis"
            :bar="bar"
            :line="line"
            :filtretopten="ttffou"
            :url="urlTT"
            :titre="titreRC"
            :categorie="categorieRC"
            :annee="anneeV"
            :client="clientr"
            :covid="covidr"
            :filtre="filr"
            :moi="moiSr"
            :depart="departr"
            ></CatopFou> <hr>
            
             <!-- GLOBAL  -->
            <CaGDep
            :ptable="dep" 
            :djson="depgjson" 
            :dep="fam" 
            :title="titledep" 
            :tabh="headdep" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1" 
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdepdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoi"
            :diff="diffdepg"
            :totv="totv"
            :repvis="repvis"
            :bar="bar"
            :line="line"
            :titre="titreG"
            :categorie="categorieG"
            :url="urlRG"
            :annee="anneeV"
            :client="clientg"
            :covid="covidg"
            :filtre="filg"
            :moi="moiSg"
            :depart="departg"
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
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoi"
            :diff="diffdepg"
            :totv="totv"
            :repvis="repvis"
            :bar="bar"
            :line="line"
            :titre="titreG"
            :categorie="categorieG"
            :url="urlRG"
            :annee="anneeV"
            :client="clientg"
            :covid="covidg"
            :filtre="filg"
            :moi="moiSg"
            :depart="departg"
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
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoi"
            :diff="diffdepg"
            :totv="totv"
            :repvis="repvis"
            :bar="bar"
            :line="line"
            :titre="titreG"
            :categorie="categorieG"
            :url="urlRG"
            :annee="anneeV"
            :client="clientg"
            :covid="covidg"
            :filtre="filg"
            :moi="moiSg"
            :depart="departg"
            ></CaGReg><hr>
            
            <CaGCat
            :ptable="cat" 
            :djson="catgjson" 
            :dep="cate" 
            :title="titlecat" 
            :tabh="headcat" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscategcat"
            :visann="visann"
            :vismoi="vismoi"
            :diff="diffdepg"
            :totv="totv"
            :repvis="repvis"
            :bar="bar"
            :line="line"
            :titre="titreG"
            :categorie="categorieG"
            :url="urlRG"
            :annee="anneeV"
            :client="clientg"
            :covid="covidg"
            :filtre="filg"
            :moi="moiSg"
            :depart="departg"
            ></CaGCat><hr>
            
            <CaGMois
            :ptable="moi" 
            :djson="moisgjson" 
            :dep="mois" 
            :title="titlem" 
            :tabh="headm" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscateg"
            :visann="visann"
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
            :client="clientg"
            :covid="covidg"
            :filtre="filg"
            :moi="moiSg"
            :depart="departg"
            ></CaGMois> <hr>
            
             <!-- TOP TEN GLOBAL  -->
            <CaGtopCli
            :ptable="cli" 
            :djson="clijson" 
            :dep="clie" 
            :title="titlecli" 
            :tabh="headcli" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoicli"
            :diff="diffdepg"
            :totv="totv"
            :repvis="repvis"
            :bar="bar"
            :line="line"
            :filtretopten="ttfgcli"
            :url="urlTT"
            :titre="titreG"
            :categorie="categorieG"
            :annee="anneeV"
            :client="clientg"
            :covid="covidg"
            :filtre="filg"
            :moi="moiSg"
            :depart="departg"
            ></CaGtopCli> <hr>
            
            <CaGtopArt
            :ptable="art" 
            :djson="artjson" 
            :dep="arti" 
            :title="titleart" 
            :tabh="headart" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoiart"
            :diff="diffdepg"
            :totv="totv"
            :repvis="repvis"
            :chartid="idGart"
            :type="bar"
            :filtretopten="ttfgart"
            :url="urlTT"
            :titre="titreG"
            :categorie="categorieG"
            :annee="anneeV"
            :client="clientg"
            :covid="covidg"
            :filtre="filg"
            :moi="moiSg"
            :depart="departg"
            ></CaGtopArt> <hr>
            
            <CaGtopFou
            :ptable="fou" 
            :djson="foujson" 
            :dep="fous" 
            :title="titlefou" 
            :tabh="headfou" 
            :getdate="getdate" 
            :ancrs="getdate" 
            :anprc="getdate-1"
            :visfil="visfil"
            :visco="visco"
            :viscli="viscli"
            :visdep="visdep"
            :viscat="viscateg"
            :visann="visann"
            :vismoi="vismoifou"
            :diff="diffdepg"
            :totv="totv"
            :repvis="repvis"
            :filtretopten="ttfgfou"
            :url="urlTT"
            :titre="titreG"
            :categorie="categorieG"
            :annee="anneeV"
            :client="clientg"
            :covid="covidg"
            :filtre="filg"
            :moi="moiSg"
            :depart="departg"
            ></CaGtopFou> 
            
        </div> 
    </div>
</template>
<script>
//RC
import CaDepAnnee from '../report/CaAnnee.vue';
import CaRepAnnee from '../report/CaAnnee.vue';
import CaRegAnnee from '../report/CaAnnee.vue';
import CaCatAnnee from '../report/CaAnnee.vue';
import CaMoisAnnee from '../report/CaAnnee.vue';
import CatopClient from '../report/CaTopTen.vue';
import CatopArticle from '../report/CaTopTen.vue';
import CatopFou from '../report/CaTopTen.vue';
//GLOBAL
import CaGDep from '../report/CaAnnee.vue';
import CaGRep from '../report/CaAnnee.vue';
import CaGReg from '../report/CaAnnee.vue';
import CaGCat from '../report/CaAnnee.vue';
import CaGMois from '../report/CaAnnee.vue';
import CaGtopCli from '../report/CaTopTen.vue';
import CaGtopArt from '../report/CaTopTen.vue';
import CaGtopFou from '../report/CaTopTen.vue';

import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";

import depj from '../json/depfile2.json';
import repj from '../json/repfile.json';
import regj from '../json/regfile.json';
import catj from '../json/catfile.json';
import moij from '../json/moisfile.json';
import clit from '../json/toptencli.json';
import artt from '../json/toptenart.json';
import fout from '../json/toptenfou.json';

import data from '../data.js';


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
        CaGtopCli,
        CaGtopArt,
        CaGtopFou,
        CaDepAnnee,
        CaRepAnnee,
        CaRegAnnee,
        CaCatAnnee,
        CaMoisAnnee,
        CatopClient,
        CatopArticle,
        CatopFou,
        FontAwesomeIcon,
        
    },
    data(){
        return{
            anneeV: [],
            //parametre par default CA par annee
            titreG: 'CA GLOBAL',
            departg: fich.GLOBAL.DEPARTEMENT ,
            filg: fich.GLOBAL.FILTRE,
            covidg: fich.GLOBAL.COVID,
            clientg: fich.GLOBAL.CLIENT,
            moiSg: fich.GLOBAL.MOIS,
            categorieG: fich.GLOBAL.CATEGORIEG,

            titreRC:'CA R&C',
            departr: fich.RC.DEPARTEMENT,
            filr: fich.RC.FILTRE,
            covidr: fich.RC.COVID,
            clientr: fich.RC.CLIENT,
            moiSr: fich.RC.MOIS,
            categorieRC: fich.RC.CATEGORIERC,
            //    //parametre par default CA par annee
        //     depart: pardefaut.DEPARTEMENT,
        //     fil: pardefaut.FILTRE,
        //     covid: pardefaut.COVID,
        //     client: pardefaut.CLIENT,
        //     anneeV: [],
        //     moiS: pardefaut.MOIS,

            totv:false,
            repvis: true,
            bar: true,
            line: false,
            urlRG:"/api/caAnnee",
            urlTT: "/api/topten",
            visfil: true,
            visco:true,
            visdep:true,
            viscli:true,
            viscateg:true,
            visann:false,
            vismoi:true,
            //DEPARTEMENT
            //R&C
            titledep: 'DEPARTEMENT',
            headdep: 'Departement',
            fam: 'FAMILLE',
            dep: ['FAMILLE'],
            depjson: new data(JSON.parse(depj.RC), 'FAMILLE' , 'ANNEE', 'Montant'),
            diffdepr:true,
            visdepdep:false,
            idRdep: 'rdep',
            //GLOBAL
            diffdepg: false,
            depgjson: new data(JSON.parse(depj.GLOBAL), 'FAMILLE' , 'ANNEE', 'Montant'),
            idGdep: 'gdep',

            //REPRESENTANT
            //R&C
            titlerep: 'REPRESENTANT',
            headrep: 'Representant',
            rep:['REPRESENTANT'],
            repre:'REPRESENTANT',
            repjson: new data(JSON.parse(repj.RC), 'REPRESENTANT', 'ANNEE', 'Montant'),
            idRrep:'rrep',
            //GLOBAL
            repgjson:new data(JSON.parse(repj.GLOBAL), 'REPRESENTANT', 'ANNEE', 'Montant'),
            idGrep: 'grep',

            //REGION
            //R&C
            titlereg: 'REGION',
            headreg: 'Region',
            reg:['AXE'],
            regre:'AXE',
            regjson: new data(JSON.parse(regj.RC), 'AXE', 'ANNEE', 'Montant'),
            idRreg:'rreg',
            //GLOBAL
            reggjson:new data(JSON.parse(regj.GLOBAL), 'AXE', 'ANNEE', 'Montant'),
            idGreg: 'greg',

            //CATEGORIE
            //R&C
            titlecat: 'CATEGORIE',
            headcat: 'Categorie',
            cat:['SSFAMILLE'],
            cate:'SSFAMILLE',
            catjson: new data(JSON.parse(catj.RC), 'SSFAMILLE', 'ANNEE', 'Montant'),
            viscategcat:false,
            idRcat:'rcat',
            //GLOBAL
            catgjson: new data(JSON.parse(catj.GLOBAL), 'SSFAMILLE', 'ANNEE', 'Montant'),
            idGcat: 'gcat',

            //Mois
            //R&C
            titlem: 'MOIS',
            headm: 'Mois',
            moi:['MOIS'],
            mois:'MOIS',
            moisjson: new data(JSON.parse(moij.RC), 'MOIS', 'ANNEE', 'Montant'),
            vismoim:false,
            idRmo: 'rmo',
            linem: true,
            barm:false,
            //GLOBAL
            moisgjson: new data(JSON.parse(moij.GLOBAL), 'MOIS', 'ANNEE', 'Montant'),
            idGmo: 'gmo',

            //topten
            //CLIENT
            //R&C
            titlecli: 'CLIENT',
            headcli: 'Client',
            cli:['CLIENT'],
            clie:'CLIENT',
            vismoicli:false,
            idRcli: 'rcli',
            clijson: JSON.parse(clit.RC),
            ttfcli: '12',
            //GLOBAL
            idGcli: 'gcli',
            ttfgcli: '22',

            //ARTICLE
            //R&C
            titleart: 'ARTICLE',
            headart: 'Article',
            art:['ARTICLE'],
            arti:'ARTICLE',
            vismoiart:false,
            idRart: 'rart',
            artjson: JSON.parse(artt.RC),
            ttfart: '11',
            //GLOBAL
            idGart: 'gart',
            ttfgart: '21',

            //FOURNISSEUR
            //R&C
            titlefou: 'FOURNISSEUR',
            headfou: 'Fournisseur',
            fou:['FOURNISSEUR'],
            fous:'FOURNISSEUR',
            vismoifou:false,
            idRfou: 'rfou',
            foujson: JSON.parse(fout.RC),
            ttffou: '13',
            //GLOBAL
            idGfou: 'gfou',
            ttfgfou: '23',

        }
    },
    computed:{
    getdate(){
        let date =  new Date().getFullYear();
        return date;
        }
    },
    methods: { 
     printContent() {
        window.print();
        },
    },
    mounted() {
        //console.log(fich.GLOBAL.MOIS);
        
        
    
}
}
</script>
<style>
 @import '/resources/css/print.css';
.container {
    max-width: 1740px !important;
}
 
.dropdown .selection{
    max-width: 700px;
    overflow: hidden;
    text-overflow: ellipsis;
}
.dropdown .selection p{
    display: inline;
    background-color: #00B050;
    border-radius: 5px;
    margin-left: 5px;
    
}

</style>