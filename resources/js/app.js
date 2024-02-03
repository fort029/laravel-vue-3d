import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler.js';
import VueKonva from 'vue-konva';

import ExampleApp from '../components/ExampleApp.vue'; 
import helpMixin from '../js/helpMixin';

if(document.getElementById("app")){
    const app = createApp();
    app.config.globalProperties.DOMENA = DOMENA;

    const modules = import.meta.glob("../components/models3D/*.vue", { eager: true });
    for (const path in modules) {
        const componentName = path.split("/").at(-1).split(".")[0];
        app.component(componentName, modules[path].default);
    }

    app.mixin(helpMixin)
    app.use(VueKonva);

    app.component('example-app', ExampleApp);
    app.mount('#app'); 
}