<template>
    <div>
        <!-- RC -->
        <CaDepAnnee 
        :ptable="dep" 
        :djson="depjson" 
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
        :diff="diffdepr"
        :totv="totv"
        :repvis="repvis"
        :bar="bar"
        :line="line"
        :url="urlRG"
        :titre="titreRC"
        :categorie="categorieRC"
        :annee="anneeV"
            :client="client"
            :covid="covid"
            :filtre="fil"
            :moi="moiS"
            :depart="depart"
        ></CaDepAnnee><hr>
        <CaRepAnnee 
        :ptable="rep" 
        :djson="repjson" 
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
        :diff="diffdepr"
        :totv="totv"
        :repvis="repvis"
        :bar="bar"
        :line="line"
        :url="urlRG"
        :titre="titreRC"
        :categorie="categorieRC"
        :annee="anneeV"
            :client="client"
            :covid="covid"
            :filtre="fil"
            :moi="moiS"
            :depart="depart"
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
        :visfil="visfilreg"
        :visco="viscoreg"
        :viscli="visclireg"
        :visdep="visdepreg"
        :viscat="viscategreg"
        :visann="visannreg"
        :vismoi="vismoireg"
        :diff="diffdepr"
        :totv="totv"
        :repvis="repvis"
        :bar="bar"
        :line="line"
        :url="urlRG"
        :titre="titreRC"
        :categorie="categorieRC"
        :annee="anneeV"
            :client="client"
            :covid="covid"
            :filtre="fil"
            :moi="moiS"
            :depart="depart"
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
        :visfil="visfilcat"
        :visco="viscocat"
        :viscli="visclicat"
        :visdep="visdepcat"
        :viscat="viscategcat"
        :visann="visanncat"
        :vismoi="vismoicat"
        :diff="diffdepr"
        :totv="totv"
        :repvis="repvis"
        :bar="bar"
        :line="line"
        :url="urlRG"
        :titre="titreRC"
        :categorie="categorieRC"
        :annee="anneeV"
            :client="client"
            :covid="covid"
            :filtre="fil"
            :moi="moiS"
            :depart="depart"
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
        :visfil="visfilm"
        :visco="viscom"
        :viscli="visclim"
        :visdep="visdepm"
        :viscat="viscategm"
        :visann="visannm"
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
            :client="client"
            :covid="covid"
            :filtre="fil"
            :moi="moiS"
            :depart="depart"
        ></CaMoisAnnee><hr>
        <CatopClient
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
        :diff="diffdepr"
        :totv="totvtop"
        :repvis="repvis"
        :filtretopten="ttfcli"
        :url="urlTT"
        :titre="titreRC"
        :categorie="categorieRC"
        :annee="anneeV"
            :client="client"
            :covid="covid"
            :filtre="fil"
            :moi="moiS"
            :depart="depart"
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
        :visfil="visfilart"
        :visco="viscoart"
        :viscli="viscliart"
        :visdep="visdepart"
        :viscat="viscategart"
        :visann="visannart"
        :vismoi="vismoiart"
        :diff="diffdepr"
        :totv="totvtop"
        :repvis="repvis"
        :filtretopten="ttfart"
        :url="urlTT"
        :titre="titreRC"
        :categorie="categorieRC"
        :annee="anneeV"
            :client="client"
            :covid="covid"
            :filtre="fil"
            :moi="moiS"
            :depart="depart"
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
        :visfil="visfilfou"
        :visco="viscofou"
        :viscli="visclifou"
        :visdep="visdepfou"
        :viscat="viscategfou"
        :visann="visannfou"
        :vismoi="vismoifou"
        :diff="diffdepr"
        :totv="totvtop"
        :repvis="repvis"
        :filtretopten="ttffou"
        :url="urlTT"
        :titre="titreRC"
        :categorie="categorieRC"
        :annee="anneeV"
            :client="client"
            :covid="covid"
            :filtre="fil"
            :moi="moiS"
            :depart="depart"
        ></CatopFou> <hr>
    </div>
</template>
<script>
//RC
import CaDepAnnee from '../report/CaAnnee.vue';
import CaRepAnnee from '../report/CaAnnee.vue';
import CaRegAnnee from '../report/CaAnnee.vue';
import CaCatAnnee from '../report/CaAnnee.vue';
import CaMoisAnnee from '../report/CaAnnee.vue';
import CatopClient from '../report/CaAnnee.vue';
import CatopArticle from '../report/CaAnnee.vue';
import CatopFou from '../report/CaAnnee.vue';

import depj from '../json/depfile2.json';
import repj from '../json/repfile.json';
import regj from '../json/regfile.json';
import catj from '../json/catfile.json';
import moij from '../json/moisfile.json';
import clit from '../json/toptencli.json';
import artt from '../json/toptenart.json';
import fout from '../json/toptenfou.json';

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
        CaDepAnnee,
        CaRepAnnee,
        CaRegAnnee,
        CaCatAnnee,
        CaMoisAnnee,
        CatopClient,
        CatopArticle,
        CatopFou,
    },
    data(){
        return{
            //parametre par default CA par annee
            // depart: pardefaut.DEPARTEMENT,
            // fil: pardefaut.FILTRE,
            // covid: pardefaut.COVID,
            // client: pardefaut.CLIENT,
            // anneeV: [],
            // moiS: pardefaut.MOIS,

            depart: fich.RC.DEPARTEMENT,
            fil: fich.RC.FILTRE,
            covid: fich.RC.COVID,
            client: fich.RC.CLIENT,
            anneeV: [],
            moiS: fich.RC.MOIS,

           //data pour tous
           titreRC:'R&C',
            categorieRC: fich.RC.CATEGORIERC,
           totv:true,
           totvtop:false,
           repvis: false,
           bar: true,
           line: false,
           urlRG:"/api/caAnnee",
           urlTT: "/api/topten",
            //DEPARTEMENT
            //R&C
            titledep: 'PAR DEPARTEMENT',
            headdep: 'Departement',
            fam: 'FAMILLE',
            dep: ['FAMILLE'],
            depjson: new data(JSON.parse(depj.RC), 'FAMILLE' , 'ANNEE', 'Montant'),
            diffdepr:true,
            visfildep: true,
            viscodep:true,
            visdepdep:false,
            visclidep:true,
            viscategdep:true,
            visanndep:false,
            vismoidep:true,
            iddep: 'dep',
           
            //REPRESENTANT
            //R&C
            titlerep: 'PAR REPRESENTANT',
            headrep: 'Representant',
            rep:['REPRESENTANT'],
            repre:'REPRESENTANT',
            repjson: new data(JSON.parse(repj.RC), 'REPRESENTANT', 'ANNEE', 'Montant'),
            visfilrep: true,
            viscorep:true,
            visclirep:true,
            visdeprep:true,
            viscategrep:true,
            visannrep:false,
            vismoirep:true,
            idrep: 'rep',
            

            //REGION
            //R&C
            titlereg: 'PAR REGION',
            headreg: 'Region',
            reg:['AXE'],
            regre:'AXE',
            regjson: new data(JSON.parse(regj.RC), 'AXE', 'ANNEE', 'Montant'),
            visfilreg: true,
            viscoreg:true,
            visclireg:true,
            viscategreg:true,
            visdepreg:true,
            visannreg:false,
            vismoireg:true,
            idreg: 'reg',
           

            //CATEGORIE
            //R&C
            titlecat: 'PAR CATEGORIE',
            headcat: 'Categorie',
            cat:['SSFAMILLE'],
            cate:'SSFAMILLE',
            catjson: new data(JSON.parse(catj.RC), 'SSFAMILLE', 'ANNEE', 'Montant'),
            visfilcat: true,
            viscocat:true,
            visclicat:true,
            viscategcat:false,
            visdepcat:true,
            visanncat:false,
            vismoicat:true,
            idcat: 'cat',
           

            //Mois
            //R&C
            titlem: 'PAR MOIS',
            headm: 'Mois',
            moi:['MOIS'],
            mois:'MOIS',
            moisjson: new data(JSON.parse(moij.RC), 'MOIS', 'ANNEE', 'Montant'),
            visfilm: true,
            viscom:true,
            visclim:true,
            viscategm:true,
            visdepm:true,
            visannm:false,
            vismoim:false,
            idmo: 'mo',
            barm:false,
            linem:true,

            //topten
            //CLIENT
            //R&C
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
            idRcli: 'rcli',
            clijson:JSON.parse(clit.RC) ,
            ttfcli: '12',

            //ARTICLE
            //R&C
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
            idRart: 'rart',
            artjson:JSON.parse(artt.RC) ,
            ttfart: '11',

            //FOURNISSEUR
            //R&C
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
            idRfou: 'rfou',
            foujson: JSON.parse(fout.RC),
            ttffou: '13',
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
