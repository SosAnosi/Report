import donn from './json/depfile2.json';
 import cdata from './Chartdata.js';
 import dat from './data.js';
import { max, min } from 'lodash';
const getd= new dat(JSON.parse(donn.RC), 'FAMILLE', 'ANNEE','Montant');
const cd = new cdata(getd, 'FAMILLE');
const maxdata = (data) => {
    let max, dat =[];
    for(let i=0; i<(data.datasets.length); i++){
        for(let j=0; j<(data.datasets[i].data.length)-1; j++){
            dat.push(data.datasets[i].data[j]);
        }
    }
    return dat;
}
export default maxdata;