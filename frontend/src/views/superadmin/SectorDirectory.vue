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
                          
                            <button
                            type="button"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"
                          @click=targetId(bidang.id)
                            >
                            <i class="fas fa-edit text-orange-500 mr-4"></i>
                          </button>

                          <button 
                          type="button"
                          data-bs-toggle="modal"
                          data-bs-target="#Modal2"
                          @click=targetId(bidang.id)>
                            <i class="fas fa-trash text-red-500 mr-4"></i>
                          </button>
                        </td>
                      </tr>
  
                    </tbody>
                  </table>
                </div>

              <!-- Modal 1-->
              <div
                class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog relative w-auto pointer-events-none">
                  <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
                  >
                    <div
                      class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
                    >
                      <h5
                        class="text-xl font-medium leading-normal text-gray-800"
                        id="exampleModalLabel"
                      >
                        Perbaharui Bidang
                      </h5>
                      <button
                        type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body relative p-4">
                      Apakah anda yakin ingin memperbaharui data Bidang?
                    </div>
                    <div
                      class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md"
                    >
                      <button
                        type="button"
                        class="px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-bs-dismiss="modal"
                      >
                        Close
                      </button>
                      <router-link
                        :to="{
                          path: '/superadmin/update-sector/' + targetIdModal,
                        }"
                      >
                      <button
                          type="button"
                          class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
                          data-bs-dismiss="modal"
                        >
                          Continue
                        </button>
                    </router-link>

                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal 2-->
              <div
                class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                id="Modal2"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog relative w-auto pointer-events-none">
                  <div
                    class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current"
                  >
                    <div
                      class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md"
                    >
                      <h5
                        class="text-xl font-medium leading-normal text-gray-800"
                        id="exampleModalLabel"
                      >
                        Hapus Bidang
                      </h5>
                      <button
                        type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body relative p-4">
                      Apakah anda yakin ingin menghapus data Validator?
                    </div>
                    <div
                      class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md"
                    >
                      <button
                        type="button"
                        class="px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                        data-bs-dismiss="modal"
                      >
                        Close
                      </button>
                      <button
                        @click="deleteSector(targetIdModal)"
                        type="button"
                        class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
                        data-bs-dismiss="modal"
                      >
                        Save changes
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              </div>
            </div>
          
  
  
          </div>
          <footer-component></footer-component>
        </div>
      </div>
    </div>
  </template>
  <script>
  import NavbarComponent from "../../components/Navbar.vue";
  import SidebarComponent from "../../components/Sidebar.vue";
  import FooterComponent from "../../components/Footer.vue";
  import axios from "axios";
import API_URL from '../../connection_api';
  
  
  export default {
    name: "sector-directory",
    components: {
      NavbarComponent,
      SidebarComponent,
      FooterComponent,
  },
    data() {
      return {
        date: new Date().getFullYear(),
        bidang: [],
        targetIdModal: null,
      };
    },
    created() {
    axios
      .get(API_URL + 'api/bidang-pemeriksaan')
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
      .delete(API_URL + 'api/bidang-pemeriksaan', {data:{id_bidang:sectorId}} )
      .then((response) => {
        console.log(response.data);
        this.$router.push({ path: '/dashboard' });
      })
      .catch(e => {
          console.log(e);
        });
    },
    targetId(id){
      this.targetIdModal = id
    }
  }
  };
  </script>
  