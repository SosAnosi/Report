require('./bootstrap');

window.Vue = require('vue').default;



import router from './routes';
import App from './layouts/App.vue';
import { library } from "@fortawesome/fontawesome-svg-core";
import { faHouse, faFolder, faPrint, faGears } from "@fortawesome/free-solid-svg-icons";

library.add(faHouse, faFolder, faPrint, faGears);

const app = new Vue({
    router,
    el: '.contenu',
    render: h => h(App)
});
