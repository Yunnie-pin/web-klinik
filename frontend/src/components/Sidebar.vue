<template>
  <nav
    class="md:left-0 md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl bg-white flex flex-wrap items-center justify-between relative md:w-64 z-10 py-4 px-6"
  >
    <div
      class="md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0 flex flex-wrap items-center justify-between w-full mx-auto"
    >
      <!-- Toggler -->
      <button
        class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
        type="button"
        v-on:click="toggleCollapseShow('bg-white m-2 py-3 px-6')"
      >
        <i class="fas fa-bars"></i>
      </button>
      <!-- Brand -->
      <a
        class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
        href="javascript:void(0)"
        >Laborat Klinik
      </a>
      <!-- User -->
      <ul class="md:hidden items-center flex flex-wrap list-none">
        <li class="inline-block relative">
          <notification-dropdown-component></notification-dropdown-component>
        </li>
        <li class="inline-block relative">
          <user-dropdown-component></user-dropdown-component>
        </li>
      </ul>
      <!-- Collapse -->
      <div
        class="md:flex md:flex-col md:items-stretch md:opacity-100 md:relative md:mt-4 md:shadow-none shadow absolute top-0 left-0 right-0 z-40 overflow-y-auto overflow-x-hidden h-auto items-center flex-1 rounded"
        v-bind:class="collapseShow"
      >
        <!-- Collapse header -->
        <div
          class="md:min-w-full md:hidden block pb-4 mb-4 border-b border-solid border-blueGray-200"
        >
          <div class="flex flex-wrap">
            <div class="w-6/12">
              <a
                class="md:block text-left md:pb-2 text-blueGray-600 mr-0 inline-block whitespace-nowrap text-sm uppercase font-bold p-4 px-0"
                href="javascript:void(0)"
              >
                Laborat Klinik
              </a>
            </div>
            <div class="w-6/12 flex justify-end">
              <button
                type="button"
                class="cursor-pointer text-black opacity-50 md:hidden px-3 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent"
                v-on:click="toggleCollapseShow('hidden')"
              >
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-6 mb-4 md:hidden">
          <div class="mb-3 pt-0">
            <input
              type="text"
              placeholder="Search"
              class="border-0 px-3 py-2 h-12 border-solid border-blueGray-500 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-base leading-snug shadow-none outline-none focus:outline-none w-full font-normal"
            />
          </div>
        </form>
        <!-- Navigation -->
        <ul class="md:flex-col md:min-w-full flex flex-col list-none">
          <li class="items-center pb-2">
            <router-link :to="{ path: '/Dashboard' }">
              <a
                class="text-primary hover:text-pink-600 text-xs uppercase py-3 font-bold block"
                ><i class="fas fa-tv opacity-75 mr-2 text-sm"></i>Dashboard</a
              ></router-link
            >
          </li>
          <li class="inline-flex">
            <router-link :to="{ path: '/history-checkup' }">
              <a
                class="text-blueGray-700 hover:text-blueGray-500 text-xs uppercase block mb-4 no-underline font-bold"
                href="#"
                ><i class="fas fa-table mr-2 text-blueGray-400 text-base"></i
                >Riwayat Pemeriksaan</a
              ></router-link
            >
          </li>
        </ul>

          <!-- Divider -->
          <hr class="my-4 md:min-w-full" />

        <div v-if="roles == 1 || roles == 2">

          <!-- Heading -->
          <h6
            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
          >
            Administrasi pages
          </h6>
          <!-- Navigation -->
          <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
            <li class="inline-flex">
              <router-link :to="{ path: '/administrations/patient-directory' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Data Pasien</a
                ></router-link
              >
            </li>
            <li class="inline-flex">
              <router-link
                :to="{ path: '/administrations/patient-registration' }"
              >
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Registrasi Pasien</a
                ></router-link
              >
            </li>
          </ul>
        </div>

        <div v-if="roles == 1 || roles == 4">
          <h6
            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
          >
            Poli pages
          </h6>
          <!-- Navigation -->
          <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
            <li class="inline-flex">
              <router-link :to="{ path: '/poli/ordering-lab' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Pemesanan Lab</a
                ></router-link
              >
            </li>
            <li class="inline-flex">
              <router-link :to="{ path: '/poli/report-checkup' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Laporan Pemeriksaan</a
                ></router-link
              >
            </li>
          </ul>
        </div>

        <div v-if="roles == 1 || roles == 3">
          <h6
            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
          >
            Laborat pages
          </h6>
          <!-- Navigation -->
          <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
            <li class="inline-flex">
              <router-link :to="{ path: '/laborat/queue-lab' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Antrean Pemeriksaan</a
                ></router-link
              >
            </li>
          </ul>
        </div>

        <div v-if="roles == 1">
          <h6
            class="md:min-w-full text-blueGray-500 text-xs uppercase font-bold block pt-1 pb-4 no-underline"
          >
            Super Admin pages
          </h6>
          <!-- Navigation -->
          <ul class="md:flex-col md:min-w-full flex flex-col list-none md:mb-4">
            <li class="inline-flex">
              <router-link :to="{ path: '/superadmin/create-user' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Tambah Petugas</a
                ></router-link
              >
            </li>
            <li class="inline-flex">
              <router-link :to="{ path: '/superadmin/create-sector' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Tambah Bidang</a
                ></router-link
              >
            </li>
            <li class="inline-flex">
              <router-link :to="{ path: '/superadmin/create-parameter' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Tambah Parameter</a
                ></router-link
              >
            </li>
            <li class="inline-flex">
              <router-link :to="{ path: '/superadmin/create-methode' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Tambah Metode</a
                ></router-link
              >
            </li>
            <li class="inline-flex">
              <router-link :to="{ path: '/superadmin/create-validator' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Tambah Validator</a
                ></router-link
              >
            </li>
            <li class="inline-flex">
              <router-link :to="{ path: '/superadmin/employee-directory' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Data Petugas</a
                ></router-link
              >
            </li>
            <li class="inline-flex">
              <router-link :to="{ path: '/superadmin/sector-directory' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Data Bidang</a
                ></router-link
              >
            </li>
            <li class="inline-flex">
              <router-link :to="{ path: '/superadmin/parameter-directory' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Data Parameter</a
                ></router-link
              >
            </li>
            <li class="inline-flex">
              <router-link :to="{ path: '/superadmin/methode-directory' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Data Metode</a
                ></router-link
              >
            </li>
            <li class="inline-flex">
              <router-link :to="{ path: '/superadmin/validator-directory' }">
                <a
                  class="text-blueGray-700 hover:text-blueGray-500 text-sm block mb-4 no-underline font-semibold"
                  href="#"
                  ><i
                    class="fas fa-paint-brush mr-2 text-blueGray-400 text-base"
                  ></i
                  >Data Validator</a
                ></router-link
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</template>
<script>
import NotificationDropdownComponent from "./NotificationDropdown.vue";
import UserDropdownComponent from "./UserDropdown.vue";
export default {
  data() {
    return {
      collapseShow: "hidden",
      roles: sessionStorage.getItem("roles_id"),
    };
  },
  methods: {
    toggleCollapseShow: function (classes) {
      this.collapseShow = classes;
    },
  },
  components: {
    NotificationDropdownComponent,
    UserDropdownComponent,
  },
};
</script>
