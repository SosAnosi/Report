<template>
    <div class="input">
        <p class="text-center fs-2 fw-bold"> {{ titr }} {{ getdate }} - PAR {{ titre }}</p>
      <!-- <Loading :active="isLoading"></Loading>   -->
      <RingLoader :loading="isLoading" :color="color" :size="size"></RingLoader>
      <br>
    <form @submit.prevent="submitForm">
       
        <!-- Filtre vente courante -->
        <div class="d-flex flex-row" v-if="visfil">
            <label class="label"> Filtre: </label>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <label v-if="vfil.length == 0">Selectionner</label>
                    <label class="selection" v-else>
                        <p v-for="f in vfil"> {{ f.toString()  }}</p>
                    </label>
                </button>
                <ul class="dropdown-menu">
                    <li v-for="item in filtre">
                        <input 
                        class="checkbox" 
                        type="checkbox" 
                        :value="item.Filtre" 
                        v-model="vfil" 
                        >
                        <label>{{ item.Filtre }}</label>
                    </li>
                </ul>
            </div>
        </div> 
        <!-- Filtre COVID -->
        <div class="d-flex flex-row" v-if="visco">
            <label class="label"> COVID: </label>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <label v-if="vcovid.length == 0">Selectionner</label>
                    <label class="selection" v-else>
                        <p v-for="f in vcovid"> {{ f }}</p>
                    </label>
                </button>
                <ul class="dropdown-menu">
                    <li v-for="item in co">
                        <input 
                        class="checkbox" 
                        type="checkbox" 
                        :value="item" 
                        v-model="vcovid"
                        >
                        <label>{{ item }}</label>
                    </li>
                </ul>
            </div>
        </div> 
        <!-- Filtre Client -->
         <div class="d-flex flex-row" v-if="viscli">
            <label class="label"> Client: </label>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <label v-if="vclient.length == 0">Selectionner</label>
                    <label class="selection" v-else>
                        <p v-for="c in vclient"> {{ c.toString() }} </p>
                    </label>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                    <li class="" v-for="item in cli">

                        <input 
                        class="checkbox" 
                        type="checkbox" 
                        :value="item.Client"
                        v-model="vclient"
                          />
                        <label>{{ item.Client }} </label>
                    </li>
                </ul>
            </div>
        </div> 
        <!-- Filtre Departement -->
        <div class="d-flex flex-row" v-if="visdep">
            <label class="label"> Departement: </label>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <label v-if="vdepartement.length == 0">Selectionner</label>
                    <label class="selection" v-else>
                        <p v-for="c in vdepartement"> {{ c.toString() }} </p>
                    </label>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                    <li class="" v-for="item in depart">

                        <input 
                        class="checkbox" 
                        type="checkbox" 
                        :value="item.Departement" 
                        v-model="vdepartement"
                         />
                        <label>{{ item.Departement }} </label>
                    </li>
                </ul>
            </div>
        </div> 
        <!-- Filtre Categorie -->
         <div class="d-flex flex-row" v-if="viscat">
            <label class="label"> Categorie: </label>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <label v-if="vcategorie.length == 0">Selectionner</label>
                    <label class="selection" v-else>
                        <p v-for="c in vcategorie"> {{ c.toString() }} </p>
                    </label>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                    <li class="" v-for="item in cat">

                        <input 
                        class="checkbox" 
                        type="checkbox" 
                        :value="item.Categorie" 
                        v-model="vcategorie"
                         />
                        <label>{{ item.Categorie }} </label>
                    </li>
                </ul>
            </div>
        </div> 
        <!-- filtre Année -->
         <div class="d-flex flex-row" v-if="visann">
            <label class="label"> Année: </label>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <label v-if="vannee.length == 0">Selectionner</label>
                    <label class="selection" v-else>
                        <p v-for="c in vannee"> {{ c.toString() }} </p>
                    </label>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li v-for="item in Annee">
                        <input class="checkbox" type="checkbox" :value="item" v-model="vannee" />
                        <label> {{ item }}</label>
                    </li>
                </ul>
            </div>
        </div>
        <!-- filtre mois -->
        <div class="d-flex flex-row" v-if="vismoi">
            <label class="label"> Mois: </label>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <label v-if="vmois.length == 0">Selectionner</label>
                    <label class="selection" v-else>
                        <p v-for="c in vmois"> {{ c.toString() }} </p>
                    </label>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li v-for="item in mois">
                        <input 
                        class="checkbox" 
                        type="checkbox" 
                        :value="item" 
                        v-model="vmois" 
                         />
                        <label>{{ item }}</label>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Buttom -->
        <div class="row mb-1">    
          <div class="col-md-1 col-form-label text-md-end"></div>
          <div class="col-md-10">
              <button type="submit" class=" recherche btn btn-primary">Recherche</button>
          </div>
      </div>

    </form>
   
    
    
</div>
  </template>




  <script>
import RingLoader from 'vue-spinner/src/RingLoader.vue'
import Annee from '../Annee.js';
import defaultList from '../json/defaultList.json';



export default{
name: 'Filtre',
props: [
    'table','fil',
    'covid','client',
    'categorie','moi',
    'titre', 'getdate',
    'visfil','visco', 
    'viscli', 'viscat', 
    'visann', 'vismoi',
    'visdep', 'departe',
    'titr', 'diff', 'url',
    'annee', 'filtretopten'
],
components:{
    RingLoader,
},
data(){
    return{
        isLoading: false,
        color: '#00B050',
        size: '100px',
        Annee,
        result: [],
        cat: JSON.parse(defaultList.CATEGORIE),
        cli: JSON.parse(defaultList.CLIENT),
        filtre: JSON.parse(defaultList.FILTRE),
        depart: JSON.parse(defaultList.DEPARTEMENT),
        vfil: this.fil,
        co:["X","-"],
        vcovid: this.covid,
        vclient: this.client,
        vdepartement:this.departe,
        vannee: this.annee,
        vcategorie: this.categorie,
        vmois: this.moi,
        mois: [
            "JANVIER","FEVRIER","MARS","AVRIL"
                ,"MAI", "JUIN", "JUILLET", "AOUT",
                "SEPTEMBRE", "OCTOBRE", "NOVEMBRE", "DECEMBRE"
            ],
        filtrE : "",
        cateG: "",
        tablE:"",
        coviD: "",
        clienT: "",
        moiS: "",
        deparT:"", 
        difF: "", 
        anneE: "",
        filtretopteN: "",
    }
},
    methods : {
      submitForm(){
        //console.log(typeof(this.vmois));
        this.isLoading = true;
        axios.post(
          this.url,
          {     
            filtrE : this.vfil,
            cateG  : this.vcategorie,
            difF: this.diff,
            tablE : this.table, 
            coviD : this.vcovid,
            clienT : this.vclient,
            moiS: this.vmois,
            deparT: this.vdepartement,
            anneE: this.vannee,
            filtretopteN: this.filtretopten,
          })
        .then((response)=>{
            //console.log("data",response.data);
            this.result = JSON.parse(response.data);
            //console.log("result",this.result);
            this.$emit('GetData', this.result);
        })
        .catch((err) => {
            alert(err.response.data.message);
            console.log(err.response);
        })
        .finally(()=>{
            this.isLoading = false;
        });
      },
        
    },
}

</script>

<style>
@import 'vue-loading-overlay/src/css/index.css';

 .v-ring{
   
    z-index: 1000;
    
}
.v-spinner{
    position: absolute !important;
    margin-top: 309px;
    margin-left: 554px;
} 



</style>