<template>
    <div>
      <sidebar-component></sidebar-component>
  
      <div class="relative md:ml-64 bg-blueGray-100">
        <navbar-component></navbar-component>
        <!-- Header -->
  
        <div class="relative bg-primary md:pt-24 pb-32 pt-12">
          <div class="px-4 md:px-10 mx-auto w-full">
          </div>
        </div>
  
        <div class="px-4 md:px-10 mx-auto w-full -m-24">
          <div class="flex flex-wrap"></div>
          <div class="flex flex-wrap mt-4">
            <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
              <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
              >
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                  <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                      <h3 class="font-semibold text-base text-blueGray-700">
                        DAFTAR BIDANG
                      </h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">

                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">
  
                  <table class="items-center w-full bg-transparent border-collapse">
                    <thead>
                      <tr>
                        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Id Bidang
                        </th>
                        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Nama Bidang
                        </th>
                        <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                          Opsi
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="bidang of bidang.data" :key="bidang.id">
                        <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                          {{ bidang.id }}
                        </th>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                          {{ bidang.bidang }}
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                          <router-link :to="{ path: '/superadmin/update-sector', params: { username : 'ccccccccccc' } }">                        
                            <button>
                            <i class="fas fa-edit text-orange-500 mr-4"></i>
                          </button>
                        </router-link>
                          <button @click="deleteSector(bidang.id)">
                            <i class="fas fa-trash text-red-500 mr-4"></i>
                          </button>
                        </td>
                      </tr>
  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          
  
  
          </div>
          <footer class="block py-4">
            <div class="container mx-auto px-4">
              <hr class="mb-4 border-b-1 border-blueGray-200" />
              <div
                class="flex flex-wrap items-center md:justify-between justify-center"
              >
                <div class="w-full md:w-4/12 px-4">
                  <div class="text-sm text-blueGray-500 font-semibold py-1">
                    Copyright © {{ date }}
                    <a
                      href="#"
                      class="text-blueGray-500 hover:text-blueGray-700 text-sm font-semibold py-1"
                    >
                      Tobong Tim
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </template>
  <script>
  import NavbarComponent from "../../components/Navbar.vue";
  import SidebarComponent from "../../components/Sidebar.vue";
  import axios from "axios";
  
  
  export default {
    name: "sector-directory",
    components: {
      NavbarComponent,
      SidebarComponent,
  },
    data() {
      return {
        date: new Date().getFullYear(),
        bidang: [],
      };
    },
    created() {
    axios
      .get('http://127.0.0.1:3300/api/bidang-pemeriksaan')
      .then((response) => {
        console.log(response.data);
        this.bidang = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
  },
  methods: {
    deleteSector(sectorId) {
      axios
      .delete('http://127.0.0.1:3300/api/bidang-pemeriksaan', {data:{id_bidang:sectorId}} )
      .then((response) => {
        console.log(response.data);
        this.$router.push({ path: '/dashboard' });
      })
      .catch(e => {
          console.log(e);
        });
    }
  }
  };
  </script>
  