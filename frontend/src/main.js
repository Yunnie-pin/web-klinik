import { createApp } from "vue";
import { createWebHistory, createRouter } from "vue-router";

// views

import Dashboard from './views/Dashboard.vue'
import Login from './views/Login.vue'
import Profile from './views/Profile.vue'
import EditProfile from './views/EditProfile.vue'
import PatientDirectory from './views/administrations/PatientDirectory'
import PatientRegistration from './views/administrations/PatientRegistration'
import HistoryCheckUp from './views/administrations/HistoryCheckUp'
// styles

import 'vue3-easy-data-table/dist/style.css';

import "@fortawesome/fontawesome-free/css/all.min.css";
import './index.css'
import 'tw-elements';
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
  {
    path: "/profile/editprofile",
    name: 'editprofile',
    component: EditProfile,
  },
  {
    path: "/administrations/patient-directory",
    name: 'Data Pasien',
    component: PatientDirectory,
  },
  {
    path: "/administrations/patient-registration",
    name: 'Registrasi Pasien',
    component: PatientRegistration,
  },  
  {
    path: "/administrations/patient-registration",
    name: 'Riwayat Pemeriksaan',
    component: HistoryCheckUp,
  },  


  { path: "/:pathMatch(.*)*", redirect: "/login" },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");