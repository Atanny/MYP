import { createRouter, createWebHistory } from 'vue-router';
import HomeView from './components/views/HomeView.vue';
import AdminView from './components/views/AdminView.vue';
import AnimationView from './components/views/Gallery/AnimationView.vue';
import DigitalView from './components/views/Gallery/DigitalArtsView.vue';
import GraphicView from './components/views/Gallery/GraphicDesignView.vue';
import WebDesView from './components/views/Gallery/WebDesignView.vue';
import WebdevView from './components/views/Gallery/WebsiteView.vue';
import IllustratorView from './components/views/Gallery/IllustratorView.vue';
import EfitmoView from './components/views/Gallery/EfitmoView.vue';
import Efitmo2View from './components/views/Gallery/Efitmo2View.vue';
import PhotographyView from './components/views/Gallery/PhotographyView.vue';
import VideoView from './components/views/Gallery/VideoEditView.vue';
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
  {
    path: '/website/student',
    component: EfitmoView,
  },
  {
    path: '/website/admin',
    component: Efitmo2View,
  },
  {
    path: '/photography',
    component: PhotographyView,
  },
   {
    path: '/videos',
    component: VideoView,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior(to, from, savedPosition) {
    // Always scroll to top when navigating
    return { top: 0 };
  },
});

export default router;
