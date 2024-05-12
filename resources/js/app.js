import './bootstrap';
import { createApp } from 'vue';
import StoreUser from './components/StoreUser.vue';

createApp({})
    .component('StoreUser', StoreUser)
    .mount('#app')
