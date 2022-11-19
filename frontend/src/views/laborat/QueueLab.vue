<template>
    <div>
      <sidebar-component></sidebar-component>
  
      <div class="relative md:ml-64 bg-blueGray-100">
        <navbar-component></navbar-component>
  
        <!-- Header -->
  
        <div class="relative bg-primary md:pt-24 pb-32 pt-12">
          <div class="px-4 md:px-10 mx-auto w-full"></div>
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
                        Antrean Pemeriksaan
                      </h3>
                    </div>
                  </div>
                </div>
                <div class="block w-full overflow-x-auto">
                  <table
                  class="items-center w-full bg-transparent border-collapse"
                >
                  <thead>
                    <tr>
                      <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                      >
                        id
                      </th>
                      <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                      >
                        Nama Pasien
                      </th>
                      <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                      >
                        Dokter
                      </th>

                      <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                      >
                        Waktu
                      </th>
                      <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                      >
                        Proses
                      </th>
                      <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                      >
                        Aksi
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="pemeriksaan of pemeriksaan.data" :key="pemeriksaan.id">
                      <td v-if="pemeriksaan.status.id == 1"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        {{ pemeriksaan.id }}
                      </td>
                      <td v-if="pemeriksaan.status.id == 1"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        {{ pemeriksaan.pasien.nama}}
                      </td>
                      <td v-if="pemeriksaan.status.id == 1"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        {{ pemeriksaan.user.nama_lengkap}}
                      </td>

                      <td v-if="pemeriksaan.status.id == 1"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        {{ pemeriksaan.updated_at}}
                      </td>
                      <td v-if="pemeriksaan.status.id == 1"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        <p
                          class="text-center py-0.5 w-full rounded text-white" :class="styleStatus(pemeriksaan.status.id)"
                        >
                          {{ pemeriksaan.status.name}}
                        </p>
                      </td>
                      <td v-if="pemeriksaan.status.id == 1"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        <div class="dropdown">
                          <button
                            class="dropdown-toggle text-center py-0.5 px-2 bg-blue-500 rounded text-white"
                            id="dropdownMenuButton1"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                          >
                            <p>
                              Opsi
                              <i class="fas fa-edit"></i>
                            </p>
                          </button>
                          <ul
                            class="dropdown-menu min-w-max absolute bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none"
                            aria-labelledby="dropdownMenuButton1"
                          >
                          <li>
                            <button
                            type="button"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"
                          @click="targetId(pemeriksaan.id)">
                              <a
                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                href="#"
                                >Proses Pemesanan</a
                              >
                            </button>
                            </li>
                            <li>
                              <button
                              type="button"
                          data-bs-toggle="modal"
                          data-bs-target="#Modal2"
                          @click="targetId(pemeriksaan.id)"                              
                              >
                                <a
                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                href="#"
                                >Batalkan Pemesanan</a
                              >
                              </button>
 
                            </li>
                            <li>
                              <a
                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                href="#"
                                >Cetak Hasil</a
                              >
                            </li>
                            <li>
                              <a
                                class="dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                                href="#"
                                >Cetak Nota</a
                              >
                            </li>
                          </ul>
                        </div>
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
                        Proses Pemeriksaan
                      </h5>
                      <button
                        type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body relative p-4">
                      Apakah anda yakin ingin proses pemeriksaan?
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
                          path:
                            '/laborat/update-lab/' +
                            targetIdModal,
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
                        Batalkan Pemesanan
                      </h5>
                      <button
                        type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body relative p-4">
                      Apakah anda yakin ingin membatalkan pemesanan?
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
                      @click="cancelPemeriksaan(targetIdModal)"
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
              
              


              <div class="text-black-700 font-bold text-xs py-1 text-[#E02424]">
              {{ messages }}
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
import API_URL from '../../connection_api';

  export default {
    name: "queue-lab",
    components: {
      NavbarComponent,
      SidebarComponent,
    },
    data() {
    return {
      date: new Date().getFullYear(),
      pemeriksaan : {},
      targetIdModal: null,
      messages: null,
    };
  },
  created() {
    //read tabel pemeriksaan
    axios
      .get(API_URL + "api/pemeriksaan")
      .then((response) => {
        this.pemeriksaan = response.data;
      })
      .catch((e) => {
        console.log(e);
      }); 
  },
  methods: {
    styleStatus(idStatus) {
      if(idStatus == 1){
        return "bg-red-600"
      } else if (idStatus == 2){
        return "bg-green-600"
      }
    },
    targetId(id){
      this.targetIdModal = id
    },
    cancelPemeriksaan(
      idPatient,
    ){
      axios
        .put(API_URL+"api/pemeriksaan", {
          id_pemeriksaan: idPatient,
          status_id : 4,
        },
        {
          headers: {
            Authorization: "Bearer " + localStorage.getItem("access_token"),
          },
        }
        )
        .then((res) => {
          if(res.data.success == true ){
            this.$router.push({ path: "/Dashboard" });
          }else if (res.data.success !== true ){
            this.messages = res.data.message;
          }

        });
    },
  },
  };
  </script>
  