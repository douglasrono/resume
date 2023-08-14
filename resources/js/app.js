

import './bootstrap';
import { createApp } from 'vue';

const app = createApp({});

import ExampleComponent from './components/pages/IndexPageComponent.vue';
app.component('index-page-component', ExampleComponent);


app.mount('#app');
