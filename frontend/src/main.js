import { createApp } from "vue";
import { createWebHistory, createRouter } from "vue-router";

// views

import Dashboard from './views/Dashboard.vue'
import Login from './views/Login.vue'
import Profile from './views/Profile.vue'
// styles

import "@fortawesome/fontawesome-free/css/all.min.css";
import './index.css'
// mouting point for the whole app

import App from "@/App.vue";
// routes

const routes = [
  {
    path: "/login",
    name: 'Login',
    component: Login,
  },
  {
    path: "/dashboard",
    name: 'dashboard',
    component: Dashboard,
  },
  {
    path: "/profile",
    name: 'profile',
    component: Profile,
  },
  { path: "/:pathMatch(.*)*", redirect: "/login" },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");
