require('./bootstrap');
import { createApp } from 'vue';
import routes from './routes';

const helloWorld = createApp({});
helloWorld.use(routes).mount('#helloWorld');