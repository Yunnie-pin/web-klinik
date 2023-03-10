import { createApp } from "vue";
import { createWebHistory, createRouter } from "vue-router";

// views

import Dashboard from "./views/Dashboard.vue";
import Login from "./views/Login.vue";
import Profile from "./views/Profile.vue";
import EditProfile from "./views/EditProfile.vue";
import PatientDirectory from "./views/administrations/PatientDirectory.vue";
import PatientRegistration from "./views/administrations/PatientRegistration.vue";
import HistoryCheckUp from "./views/HistoryCheckUp.vue";
import UpdatePatient from "./views/administrations/UpdatePatient.vue";
import CreateUser from "./views/superadmin/CreateUser.vue";
import CreateSector from "./views/superadmin/CreateSector.vue";
import CreateParameter from "./views/superadmin/CreateParameter.vue";
import EmployeeDirectory from "./views/superadmin/EmployeeDirectory.vue";
import UpdateEmployee from "./views/superadmin/UpdateEmployee.vue";
import SectorDirectory from "./views/superadmin/SectorDirectory.vue";
import UpdateSector from "./views/superadmin/UpdateSector.vue";
import ParameterDirectory from "./views/superadmin/ParameterDirectory.vue";
import UpdateParameter from "./views/superadmin/UpdateParameter.vue";
import OrderingLab from "./views/poli/OrderingLab.vue";
import ReportCheckUp from "./views/poli/ReportCheckUp.vue";
import QueueLab from "./views/laborat/QueueLab.vue";
import CreateValidator from "./views/superadmin/CreateValidator.vue";
import ValidatorDirectory from "./views/superadmin/ValidatorDirectory.vue";
import UpdateValidator from "./views/superadmin/UpdateValidator.vue";
import CreateMethode from "./views/superadmin/CreateMethode.vue";
import MethodeDirectory from "./views/superadmin/MethodeDirectory.vue";
import UpdateMethode from "./views/superadmin/UpdateMethode.vue";
import UpdateLab from "./views/laborat/UpdateLab.vue";
import ReviewCheckUp from "./views/poli/ReviewCheckUp.vue";
import ChangePassword from "./views/ChangePassword.vue";
// styles

import "vue3-easy-data-table/dist/style.css";

import "@fortawesome/fontawesome-free/css/all.min.css";
import "./index.css";
import "tw-elements";
// mouting point for the whole app

import App from "@/App.vue";
// routes

const routes = [
  {
    path: "/login",
    name: "Login",
    component: Login,
  },
  {
    path: "/dashboard",
    name: "dashboard",
    component: Dashboard,
  },
  {
    path: "/profile",
    name: "profile",
    component: Profile,
  },
  {
    path: "/profile/editprofile",
    name: "editprofile",
    component: EditProfile,
  },
  {
    path: "/administrations/patient-directory",
    name: "Data Pasien",
    component: PatientDirectory,
  },
  {
    path: "/administrations/patient-registration",
    name: "Registrasi Pasien",
    component: PatientRegistration,
  },
  {
    path: "/history-checkup",
    name: "Riwayat Pemeriksaan",
    component: HistoryCheckUp,
  },
  {
    path: "/administrations/update-patient/:id",
    name: "Perbaharui Data Pasien",
    component: UpdatePatient,
  },
  {
    path: "/superadmin/create-user",
    name: "Tambah Petugas",
    component: CreateUser,
  },
  {
    path: "/superadmin/create-sector",
    name: "Tambah Bidang",
    component: CreateSector,
  },
  {
    path: "/superadmin/create-parameter",
    name: "Tambah Parameter",
    component: CreateParameter,
  },
  {
    path: "/superadmin/employee-directory",
    name: "Data Petugas",
    component: EmployeeDirectory,
  },
  {
    path: "/superadmin/update-employee/:username",
    name: "Update Petugas",
    component: UpdateEmployee,
  },
  {
    path: "/superadmin/sector-directory/",
    name: "Data Bidang",
    component: SectorDirectory,
  },
  {
    path: "/superadmin/update-sector/:id",
    name: "Update Bidang",
    component: UpdateSector,
  },
  {
    path: "/superadmin/parameter-directory",
    name: "Data Parameter",
    component: ParameterDirectory,
  },
  {
    path: "/superadmin/update-parameter/:id",
    name: "Update Parameter",
    component: UpdateParameter,
  },
  {
    path: "/superadmin/create-methode",
    name: "Tambah Metode",
    component: CreateMethode,
  },
  {
    path: "/superadmin/methode-directory",
    name: "Data Metode",
    component: MethodeDirectory,
  },
  {
    path: "/superadmin/update-methode/:id",
    name: "Update Metode",
    component: UpdateMethode,
  },
  {
    path: "/superadmin/create-validator",
    name: "Tambah Validator",
    component: CreateValidator,
  },
  {
    path: "/superadmin/validator-directory",
    name: "Data Validator",
    component: ValidatorDirectory,
  },
  {
    path: "/superadmin/update-validator/:id",
    name: "Update Validator",
    component: UpdateValidator,
  },
  {
    path: "/poli/ordering-lab",
    name: "Pemesanan Lab",
    component: OrderingLab,
  },
  {
    path: "/poli/report-checkup",
    name: "Laporan Pemeriksaan",
    component: ReportCheckUp,
  },
  {
    path: "/laborat/queue-lab",
    name: "Antrean Laboratorium",
    component: QueueLab,
  },
  {
    path: "/laborat/update-lab/:id",
    name: "Proses Pemeriksaan",
    component: UpdateLab,
  },
  {
    path: "/poli/review-check-up/:id",
    name: "Review Pemeriksaan",
    component: ReviewCheckUp,
  },
  {
    path: "/change-password",
    name: "Ganti Password",
    component: ChangePassword,
  },


  { path: "/:pathMatch(.*)*", redirect: "/login" },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

router.beforeEach((to, from, next) => {
  const isAuthenticated = JSON.parse(
    sessionStorage.getItem("authenticated")
    );

    const roles = JSON.parse(
      sessionStorage.getItem("roles_id")
      );

  if (to.name !== "Login" && !isAuthenticated) 
  next({ name: "Login" });

  if (to.name === "Login" && isAuthenticated) 
  next({ name: "dashboard" });

  //jika roles bukan 2 (administasi)
  if (to.name === "Data Pasien" && (roles !== 1 && roles !==2)) 
  next({ name: "dashboard" });

  if (to.name === "Registrasi Pasien" && (roles !== 1 && roles !==2)) 
  next({ name: "dashboard" });

  if (to.name === "Perbaharui Data Pasien" && (roles !== 1 && roles !==2)) 
  next({ name: "dashboard" });

  //jika roles bukan 3 (laborat)
  if (to.name === "Antrean Laboratorium" && (roles !== 1 && roles !==3)) 
  next({ name: "dashboard" });

  if (to.name === "Proses Pemeriksaan" && (roles !== 1 && roles !==3)) 
  next({ name: "dashboard" });
  
  //jika roles bukan 4 (Poli)
  if (to.name === "Pemesanan Lab" && (roles !== 1 && roles !==4)) 
  next({ name: "dashboard" });

  if (to.name === "Laporan Pemeriksaan" && (roles !== 1 && roles !==4)) 
  next({ name: "dashboard" });

  if (to.name === "Review Pemeriksaan" && (roles !== 1 && roles !==4)) 
  next({ name: "dashboard" });

  //jika roles bukan 1(superadmin)
  if (to.name === "Tambah Petugas" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Tambah Bidang" && (roles !== 1 )) 
  next({ name: "dashboard" });

  if (to.name === "Tambah Parameter" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Data Petugas" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Update Petugas" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Data Bidang" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Update Bidang" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Data Parameter" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Update Parameter" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Tambah Metode" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Data Metode" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Update Metode" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Tambah Validator" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Data Validator" && (roles !== 1)) 
  next({ name: "dashboard" });

  if (to.name === "Update Validator" && (roles !== 1)) 
  next({ name: "dashboard" });

  else next();
});

createApp(App).use(router).mount("#app");
