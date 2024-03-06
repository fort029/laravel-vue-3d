import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js';


if(document.getElementById("app")){
    const app = createApp();
    
    app.mount('#app'); 
}