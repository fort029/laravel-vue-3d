import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js';
import VueKonva from 'vue-konva';

import LoadingPlanning from '../components/LoadingPlanning.vue';
import HouseDirection from '../components/HouseDirection.vue'; 
import helpMixin from '../js/helper';

if(document.getElementById("app")){
    const app = createApp();
    
    app.mixin(helpMixin)
    app.use(VueKonva);

    app.component('loading-planning', LoadingPlanning);
    app.component('house-direction', HouseDirection);
    app.mount('#app'); 
}