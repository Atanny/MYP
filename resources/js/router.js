import { createRouter, createWebHistory } from 'vue-router';
import HomeView from './components/views/HomeView.vue';
import AdminView from './components/views/AdminView.vue';
import AnimationView from './components/views/Gallery/AnimationView.vue';
import DigitalView from './components/views/Gallery/DigitalArtsView.vue';
import GraphicView from './components/views/Gallery/GraphicDesignView.vue';
import WebDesView from './components/views/Gallery/WebDesignView.vue';
import WebdevView from './components/views/Gallery/WebsiteView.vue';
import IllustratorView from './components/views/Gallery/IllustratorView.vue';

const routes = [
  {
    path: '/',
    component: HomeView,
  },
  {
    path: '/admin',
    component: AdminView,
  },
  {

    path: '/animation',
    component: AnimationView,
  },

  {

    path: '/illustrator',
    component: IllustratorView,
  },

  {

    path: '/digital-arts',
    component: DigitalView,
  },

  {

    path: '/graphic-design',
    component: GraphicView,
  },

  {

    path: '/web-design',
    component: WebDesView,
  },
  {

    path: '/website',
    component: WebdevView,
  },
 
 
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
