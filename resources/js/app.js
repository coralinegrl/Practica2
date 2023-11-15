import './bootstrap';
import { createApp } from 'vue';
import api from './components/api.vue'; // Asegúrate de que la ruta refleje la ubicación real del archivo
import axios from 'axios';

const app = createApp({});
app.component('api', api);
app.mount('#app');

