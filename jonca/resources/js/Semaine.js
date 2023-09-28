import { parse } from 'postcss';
const semaine = (data, groupby1) => {
     let uniqueKeys1 = [];
     // finding the unique keys for grouping
     for(let i = 0; i < data.length; i++){
     if(!uniqueKeys1.includes(data[i][groupby1])){
         uniqueKeys1.push(data[i][groupby1]);
         }
     }
     //console.log(uniqueKeys1);
     return uniqueKeys1;
 }
export default semaine;
 