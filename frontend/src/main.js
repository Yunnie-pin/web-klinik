import { createApp } from "vue";
import { createWebHistory, createRouter } from "vue-router";

// views

import Dashboard from './views/Dashboard.vue'
import Login from './views/Login.vue'
import Profile from './views/Profile.vue'
import EditProfile from './views/EditProfile.vue'
import PatientDirectory from './views/administrations/PatientDirectory.vue'
import PatientRegistration from './views/administrations/PatientRegistration.vue'
import HistoryCheckUp from './views/administrations/HistoryCheckUp.vue'
import UpdatePatient from './views/administrations/UpdatePatient.vue'


import CreateUser from './views/superadmin/CreateUser.vue'
import CreateSector from './views/superadmin/CreateSector.vue'
import CreateParameter from './views/superadmin/CreateParameter.vue'
import EmployeeDirectory from './views/superadmin/EmployeeDirectory.vue'
import UpdateEmployee from './views/superadmin/UpdateEmployee.vue'
import SectorDirectory from './views/superadmin/SectorDirectory.vue'
import UpdateSector from './views/superadmin/UpdateSector.vue'
import ParameterDirectory from './views/superadmin/ParameterDirectory.vue'
import UpdateParameter from './views/superadmin/UpdateParameter.vue'
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
  {
    path: "/administrations/update-patient",
    name: 'Perbaharui Data Pasien',
    component: UpdatePatient,
  },  
  
  // super admin
  {
    path: "/superadmin/create-user",
    name: 'Tambah Petugas',
    component: CreateUser,
  },  
  {
    path: "/superadmin/create-sector",
    name: 'Tambah Bidang',
    component: CreateSector,
  },  
  {
    path: "/superadmin/create-parameter",
    name: 'Tambah Parameter',
    component: CreateParameter,
  },  
  {
    path: "/superadmin/employee-directory",
    name: 'Data Petugas',
    component: EmployeeDirectory,
  },  
  {
    path: "/superadmin/update-employee",
    name: 'Update Petugas',
    component: UpdateEmployee,
  },  
  {
    path: "/superadmin/sector-directory",
    name: 'Data Bidang',
    component: SectorDirectory,
  },  
  {
    path: "/superadmin/update-sector",
    name: 'Update Bidang',
    component: UpdateSector,
  },  
  {
    path: "/superadmin/parameter-directory",
    name: 'Data Parameter',
    component: ParameterDirectory,
  },  
  {
    path: "/superadmin/update-parameter",
    name: 'Update Parameter',
    component: UpdateParameter,
  },  



  { path: "/:pathMatch(.*)*", redirect: "/login" },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

createApp(App).use(router).mount("#app");