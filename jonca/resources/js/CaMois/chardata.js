const chartdata = (data,semain,ppt)=>{
    //supprime le total sur le graph
    let res, label = [];
    let lab = data.map(d => d[ppt]);
    const arraycoul =['#EB7D31','#4B0082','#FFC000','#8B4513','#255E91','#C71585','#228B22 ','#696969','#B8860B'];
    for(let i =0; i< (lab.length)-1; i++){
        res = lab[i];
        label.push(res);
    }
    //data sur le graph
    const lineChartData = { 
            labels: label,
            datasets: [],
    };
    //boucle pour le datasets
        for(let sem=0; sem<semain.length; sem++){
                lineChartData.datasets.push({
                    label: semain[sem],
                    data: data.map(row => row[semain[sem]]),
                    backgroundColor: arraycoul[sem],
                });
    }
    return lineChartData;
}
export default chartdata;