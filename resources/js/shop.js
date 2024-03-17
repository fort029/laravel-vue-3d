import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js';

import Bootstrap_PT from "../passthrough/bootstrap";
import PrimeVue from "primevue/config";
import Category from '../components/shop/Category.vue';

if(document.getElementById("app")){
    const app = createApp();
    app.use(PrimeVue, { unstyled: true, pt: Bootstrap_PT });
    app.component('category-products', Category);
    app.mount('#app'); 
}