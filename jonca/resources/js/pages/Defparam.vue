<template>
    <div class="param">
    <form @submit.prevent="enregistrer">
        <p class="text-center fs-2 fw-bold">DEFINIR LES PARAMETRES PAR DEFAUTS</p>
        <!-- Filtre vente courante -->
        <div class="type d-flex flex-row">
            <label class="label"> Type: </label>
            <div class="dropdown">
                <div class="rc">
                    <input type="radio" value="rc" v-model="checked"/>
                    <label for="rc">R&C</label>
                </div>
                <div class="global">
                    <input type="radio" value="global" v-model="checked"/>
                    <label for="global">GLOBAL</label>
                </div>
                
            </div>
        </div>
        <div class="d-flex flex-row" >
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
                        />
                        <label>{{ item.Filtre }}</label>
                    </li>
                </ul>
            </div>
        </div> 
        <!-- Filtre COVID -->
        <div class="d-flex flex-row">
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
         <div class="d-flex flex-row">
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
        <div class="d-flex flex-row">
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
         <div class="d-flex flex-row" >
            <label class="label"> Categorie: </label>
            <div class="dropdown">
                <span v-if="checked === 'rc'">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <label v-if="vcategorierc.length == 0">Selectionner</label>
                    <label class="selection" v-else>
                        <p v-for="c in vcategorierc"> {{ c.toString() }} </p>
                    </label>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                    <li class="" v-for="item in cat">
                        
                            <input 
                        class="checkbox" 
                        type="checkbox" 
                        :value="item.Categorie" 
                        v-model="vcategorierc"
                       
                         />
                        
                        <label>{{ item.Categorie }} </label>
                    </li>
                </ul>
            </span>
            <span v-if="checked === 'global'">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <label v-if="vcategorieg.length == 0">Selectionner</label>
                    <label class="selection" v-else>
                        <p v-for="c in vcategorieg"> {{ c.toString() }} </p>
                    </label>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                    <li class="" v-for="item in cat">
                        
                            <input 
                        class="checkbox" 
                        type="checkbox" 
                        :value="item.Categorie" 
                        v-model="vcategorieg"
                       
                         />
                        
                        <label>{{ item.Categorie }} </label>
                    </li>
                </ul>
            </span>
            </div>
        </div> 
         <!-- filtre annee -->
         <div class="d-flex flex-row">
            <label class="label"> Annee: </label>
            <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <label v-if="vannee.length == 0">Selectionner</label>
                    <label class="selection" v-else>
                        <p v-for="c in vannee"> {{ c.toString() }} </p>
                    </label>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li v-for="item in annee">
                        <input 
                        class="checkbox" 
                        type="checkbox" 
                        :value="item" 
                        v-model="vannee" 
                         />
                        <label>{{ item }}</label>
                    </li>
                </ul>
            </div>
        </div>
        <!-- filtre mois -->
        <div class="d-flex flex-row">
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
              <button type="submit" class=" recherche btn btn-primary">Enregistrer</button>
          </div>
      </div>
    </form>
    
</div>
</template>
<script>
import annee from '../Annee.js';
import defaultList from '../json/defaultList.json';
//import paramdefault from '../json/default.json';

export default{
    data(){
        return{
            
            annee,
            cat: JSON.parse(defaultList.CATEGORIE),
            cli: JSON.parse(defaultList.CLIENT),
            filtre: JSON.parse(defaultList.FILTRE),
            depart: JSON.parse(defaultList.DEPARTEMENT),
            checked: "rc",
            vfil: ["VENTE COURANTE"],
            co:["X","-"],
            vcovid: ["-"],
            vclient: ["VARIAN MEDICAL SYSTEMS"],
            vdepartement:["02 - DIALYSE", "03 - HOSPITALIER", "04 - IMAGERIE", "05 - LABORATOIRE"],
            vcategorierc: ['01 - ACCESSOIRE CONSOMMABLE','05 - PRODUIT CHIMIQUE','06 - REACTIF'],
            vcategorieg: ['01 - ACCESSOIRE CONSOMMABLE','02 - APPAREIL','03 - MATERIEL','04 - MOBILIER','05 - PRODUIT CHIMIQUE','06 - REACTIF','07 - VERRERIE'],
            vmois: ["JANVIER", "FEVRIER", "MARS", "AVRIL", "MAI", "JUIN", "JUILLET", "AOUT", "SEPTEMBRE", "OCTOBRE", "NOVEMBRE", "DECEMBRE"],
            vannee : [new Date().getFullYear()],
            // moisactu: [new Date().toLocaleString('default', {month:'long'})],
            moisdern: [new Date().getMonth()],
            mois: [
                "JANVIER","FEVRIER","MARS","AVRIL"
                    ,"MAI", "JUIN", "JUILLET", "AOUT",
                    "SEPTEMBRE", "OCTOBRE", "NOVEMBRE", "DECEMBRE"
                ],
             FILTRE: "", 
            COVID: "", 
            DEPARTEMENT: "", 
            CATEGORIERC: "",
            CATEGORIEG:"",
            CLIENT: "",
            ANNEE: "",
            MOIS: "",
            TYPE:"",
            MOISDERN: "",
            }
    },
    methods:{
        enregistrer(){
            console.log(typeof(this.vmois[new Date().getMonth()-1]));
            //console.log(typeof(this.vcovid));
            axios.post(
            "/default",
            {     
                TYPE: this.checked,
                FILTRE: this.vfil, 
                COVID: this.vcovid, 
                DEPARTEMENT: this.vdepartement, 
                CATEGORIERC: this.vcategorierc,
                CATEGORIEG: this.vcategorieg,
                CLIENT: this.vclient,
                ANNEE: this.vannee,
                MOIS: this.vmois,
                MOISDERN: [this.vmois[new Date().getMonth()]] 
            })
            .then((response)=>{
                console.log(response);
                alert('Enregistrer');
            })
            .catch((err) => {
                alert(err);
            });
        }
    }
}
</script>

<style>
.dropdown{
    display: flex;
}
.rc{
    padding-right: 50px;
}
.type {
    padding-bottom: 10px;
}
</style>