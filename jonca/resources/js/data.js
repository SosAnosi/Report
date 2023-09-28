import { parse } from 'postcss';

import json from './json/depfile2.json';
//import def from './json/default.json';
import ans from './Annee.js';

const pivotBy = (data, groupby1, key, value) => {
     let uniqueKeys1 = [];
     let pivotedData = [];
     let annee = new Date().getFullYear(), an;

     // finding the unique keys for grouping
     for(let i = 0; i < data.length; i++){
     if(!uniqueKeys1.includes(data[i][groupby1])){
         uniqueKeys1.push(data[i][groupby1]);
         }
     }

     // pivot and group data 
     
     for(let i = 0; i < uniqueKeys1.length; i++){
         let pivotedObj = {};
            for(let j = 0; j < data.length; j++){
                if(data[j][groupby1] == uniqueKeys1[i]){
                        pivotedObj[groupby1] = uniqueKeys1[i]; // retain the property class  
                        pivotedObj[data[j][key]] = data[j][value]; // transforms rows into columns                  
                    } 
                }
         pivotedData.push(pivotedObj);
     }
    for(an=0; an <= ans.length; an++){
        for(let f = 0; f<pivotedData.length; f++){
            if(pivotedData[f][ans[an]] == undefined){
                pivotedData[f][ans[an]]=0;
            } 
        }
     }

    //total par annee
    const total ={};
    for(an=0;an<=ans.length;an++){
        let somme=0;
        for(let f = 0; f<pivotedData.length; f++){
            somme += pivotedData[f][ans[an]];
            }
        total[ans[an]]= somme;
    }
   
    total['Totalh']='Total';
    pivotedData.push(total);
    //total par ligne
    
    for(let f = 0; f<pivotedData.length; f++){
       {
        let somme =0;
        for(an=0;an<=ans.length;an++){
            somme += pivotedData[f][ans[an]];
        }
        pivotedData[f]['Totalv']=somme; 
       }
    }
        
    //faire la soustraction de 2023 et 2022
     let soustract= [];
    
     for(let f = 0; f<pivotedData.length; f++){
        soustract = pivotedData[f][annee]-pivotedData[f][annee -1];
        //console.log(soustract);
        pivotedData[f]['AR']=soustract;  
     }
     
     //faire le pourcentage
     let percent= [];
   
     for(let f = 0; f<pivotedData.length; f++){
        percent = Math.round((pivotedData[f]['AR']/pivotedData[f][annee -1])*100);
        if(pivotedData[f][annee -1] === 0){
            percent = 0;
        }
        else{
            percent = Math.round((pivotedData[f]['AR']/pivotedData[f][annee -1])*100);
        }
        pivotedData[f]['percent']=percent;
     }
     return pivotedData
 }
  console.log();
//  console.log(def.DEPARTEMENT.split(","));
export default pivotBy;
 