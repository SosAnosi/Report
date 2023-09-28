 import donn from './json/depfile2.json';
 import data from './data.js';
 import ans from './Annee.js';
const getd= new data(JSON.parse(donn.RC), 'FAMILLE', 'ANNEE','Montant')
const chartdata = (data,anee,ppt)=>{
    let annee = new Date().getFullYear();
    let res, label = [];
    let lab = data.map(d => d[ppt]);
    const arraycoul =['#EB7D31','#4B0082','#FFC000','#8B4513','#255E91','#C71585','#228B22 ','#696969','#B8860B'];

    //supprime le total sur le graph
     for(let i =0; i< (lab.length)-1; i++){
         res = lab[i];
         label.push(res);
     }

  //data pour le graph
    const lineChartData = { 
            labels: label,
            datasets: [],
    }; 
    
    //datasets
                for(let an=0; an<ans.length; an++){
                    lineChartData.datasets.push({
                        label: ans[an],
                        data: data.map(row => row[ans[an]]),
                        backgroundColor: arraycoul[an],
                        borderColor: arraycoul[an],
                        fill: false,
                    });
        }
        //console.log(lineChartData);
    return lineChartData;
}
export default chartdata;