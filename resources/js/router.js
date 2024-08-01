import { createRouter, createWebHistory } from 'vue-router';
import Home from './Pages/Website/Home.vue';
import About from './Pages/Website/About.vue';
import Blog from './Pages/Website/Blog.vue';

const routes = [
  { path: '/', component: Home, meta: { layout: 'website', title: 'Home Page' } },
  { path: '/about', component: About, meta: { layout: 'website', title: 'About Us' } },
  { path: '/blog', component: Blog, meta: { layout: 'website', title: 'Blog' } },
];

export default function createAppRouter(appName) {
  const router = createRouter({
    history: createWebHistory(),
    routes,
  });

  
  return router;
}
