import Vue from 'vue';
import VueRouter from 'vue-router';



import Report from './pages/Report.vue';
import rcda from './pages/RCDA.vue';
import gda from './pages/GDetailAnnee.vue';
import rcdm from './pages/RcDetailMois.vue';
import gdm from './pages/GDetMois.vue';
import param from './pages/Defparam.vue';


Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    
    routes: [
       
        {
            path: '/home',
            name: 'home',
            component: Report
        },
        
        {
            path: '/home/rcda',
            name: 'rcda',
            component: rcda
        },
        {
            path: '/home/gda',
            name: 'gda',
            component: gda
        },
        {
            path: '/home/rcdm',
            name: 'rcdm',
            component : rcdm
        },
        {
            path: '/home/gdm',
            name:'gdm',
            component: gdm
        },
        {
            path: '/home/param',
            name:'param',
            component: param
        },
       
    ]
});

export default router;