import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js';
import VueKonva from 'vue-konva';

import LoadingPlanning from '../components/LoadingPlanning.vue';
import HouseDirection from '../components/HouseDirection.vue'; 
import helpMixin from '../js/helper';

import Countdown from '../components/CountDown.vue';
 
import PrimeVue from "primevue/config";
import Bootstrap_PT from "../passthrough/bootstrap";
import AnimateOnScroll from 'primevue/animateonscroll';

if(document.getElementById("app")){
    const app = createApp();
    
    app.mixin(helpMixin)
    app.use(VueKonva);
    app.use(PrimeVue, { unstyled: true, pt: Bootstrap_PT });
    
    app.component('loading-planning', LoadingPlanning);
    app.component('house-direction', HouseDirection);
    app.component("count-down", Countdown);

    app.directive('animateonscroll', AnimateOnScroll);
    
    app.mount('#app'); 
}