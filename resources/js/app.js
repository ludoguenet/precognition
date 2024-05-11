import './bootstrap';
import { createApp } from 'vue';
import IncrementCounter from './components/Counter.vue';

createApp({})
    .component('IncrementCounter', IncrementCounter)
    .mount('#app')
