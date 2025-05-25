import './bootstrap';
import { createApp } from 'vue';
import { BootstrapVue3 } from 'bootstrap-vue-3';
import '../css/app.css';
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.bundle.min.js";
import "bootstrap-vue-3/dist/bootstrap-vue-3.css";
import '@fortawesome/fontawesome-free/css/all.css';

import router from './router'; 

const app = createApp({});

app.use(BootstrapVue3);

app.use(router);

import AOS from 'aos';
import 'aos/dist/aos.css'; 

AOS.init();


import HeaderComponent from './components/components/HeaderComponent.vue';
import NavbarComponent from './components/components/NavbarComponent.vue';
import SecondComponent from './components/components/SecondContentComponent.vue';
import ThirdComponent from './components/components/ThirdComponent.vue';
import FourComponent from './components/components/FourthComponent.vue';
import FourOneComponent from './components/components/FourPointOneComponent.vue';
import FifthComponent from './components/components/FifthComponent.vue';
import SixComponent from './components/components/SixComponent.vue';
import FooterComponent from './components/components/FooterComponent.vue';
import SeventhComponent from './components/components/SeventhComponent.vue';


import ArtWork from './components/components/ArtWork.vue';
import SoftwareComponent from './components/components/CrudSofwareComponent.vue';
import DevelopmentComponent from './components/components/DevelopmentSoftware.vue';

app.component('header-component', HeaderComponent);
app.component('navbar-component', NavbarComponent);
app.component('second-component', SecondComponent);
app.component('third-component', ThirdComponent);
app.component('four-component', FourComponent);
app.component('fourone-component', FourOneComponent);
app.component('five-component', FifthComponent);
app.component('six-component', SixComponent);
app.component('seven-component', SeventhComponent);
app.component('footer-component', FooterComponent);


app.component('secondform-component', DevelopmentComponent);
app.component('soft-component', SoftwareComponent);
app.component('art-component', ArtWork);
app.mount('#app');

