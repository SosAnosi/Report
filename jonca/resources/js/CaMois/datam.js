import { parse } from 'postcss';
const pivotBy = (data, groupby1, key, value) => {
     let uniqueKeys1 = [];
     let pivotedData = [];
     // finding the unique keys for grouping
     for(let i = 0; i < data.length; i++){
        if(!uniqueKeys1.includes(data[i][groupby1])){
            uniqueKeys1.push(data[i][groupby1]);
            }
     }

     //semaine unique
     let semuniq = [];
     for(let i = 0; i < data.length; i++){
        if(!semuniq.includes(data[i][key])){
            semuniq.push(data[i][key]);
            }
        }
    //console.log(semuniq);

     for(let i = 0; i < uniqueKeys1.length; i++){
         let pivotedObj = {};
            for(let j = 0; j < data.length; j++){
                if(data[j][groupby1] == uniqueKeys1[i]){
                        pivotedObj[groupby1] = uniqueKeys1[i]; // retain the property class  
                        pivotedObj[data[j][key]] = data[j][value];               
                    } 
                }
         pivotedData.push(pivotedObj);
     }
     //ajoute de 0 montant manquant
     for(let n=0; n <semuniq.length; n++){
        for(let f = 0; f<pivotedData.length; f++){
            if(pivotedData[f][semuniq[n]] == undefined){
                pivotedData[f][semuniq[n]]=0;
            } 
        }
     }

     //total par semaine
     const total ={};
      for(let t=0; t <semuniq.length; t++){
         let somme=0;
        for(let f = 0; f<pivotedData.length; f++){
            somme += pivotedData[f][semuniq[t]];
            }
        total[semuniq[t]]= somme;
      }
    total['Totalh']='Total';
    pivotedData.push(total);

    //total par ligne
    for(let f = 0; f<pivotedData.length; f++){
        let somme=0;
        for(let t=0; t <semuniq.length; t++){
            somme += pivotedData[f][semuniq[t]];
        }
        pivotedData[f]['Totalv']=somme;
    }
     return pivotedData
 }
export default pivotBy;
 