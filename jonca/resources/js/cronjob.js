const cron = require('node-cron'), axios = require('axios'), fs =require('fs');
const heur = new Date().getMinutes();
let resultget, resultpost;
const resget = axios.get('http://127.0.0.1:8000/api/test')
                .then((response)=>{
                    resultget = response.data;
                })
                .catch((err) => {
                    resultget = err.response.data.message;
                    
                });
 const respost = axios.post(
     'http://127.0.0.1:8000/api/default',
     {     
         type: 'rc',
         FILTRE: ["VENTE COURANTE"], 
         COVID: ["-"], 
         DEPARTEMENT: ["02 - DIALYSE", "03 - HOSPITALIER", "04 - IMAGERIE", "05 - LABORATOIRE"], 
         CATEGORIE: ['01 - ACCESSOIRE CONSOMMABLE','05 - PRODUIT CHIMIQUE','06 - REACTIF'],
         CLIENT: ["VARIAN MEDICAL SYSTEMS"],
         MOIS: ["JANVIER", "FEVRIER", "MARS", "AVRIL", "MAI", "JUIN", "JUILLET", "AOUT", "SEPTEMBRE", "OCTOBRE", "NOVEMBRE", "DECEMBRE"]
     })
   .then((response)=>{
     resultpost= response.data;
   })
   .catch((err) => {
     resultpost=err.response.data.message;
      
   });
console.log(typeof(resultget));
const task = cron.schedule('* * * * *', function() { 
    console.log('---------------------');
    console.log('Running Cron Job');
    console.log(resultget, resultpost);

});
