import { createApp } from 'vue';

import 'bootstrap-icons/font/bootstrap-icons.css'; // Import Bootstrap Icons CSS

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

app.mount('#app');
