<template>
  <div>
    <sidebar-component></sidebar-component>

    <div class="relative md:ml-64 bg-blueGray-100">
      <navbar-component></navbar-component>

      <!-- Header -->

      <div class="relative md:pt-24 pb-32 pt-12" :class="colorBgCustom">
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
                    <h3
                      class="font-semibold text-base text-blueGray-700 uppercase"
                    >
                      Perbaharui Data Petugas
                    </h3>
                  </div>
                </div>
              </div>
              <div class="block w-full overflow-x-auto">
                <!-- content -->
                <div>
                  <form id="tambahbidang">
                    <div class="flex flex-wrap">
                      <div class="w-full lg:w-4/12 xl:w-3/12 px-4">
                        <div
                          class="relative flex flex-col min-w-0 break-words bg-white mb-6 xl:mb-0"
                        >
                          <div class="flex-auto p-4">
                            <h5
                              class="text-black-700 uppercase font-bold text-sm"
                            >
                              Data Bidang Baru
                            </h5>

                            <div class="py-3">
                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Id
                                </div>
                                <input disabled
                                  type="text"
                                  class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  aria-label="id"
                                  id="id"
                                  :value="bidang.id"
                                />
                              </div>

                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Nama Bidang
                                </div>
                                <input
                                  type="text"
                                  class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  id="nama"
                                  v-model="bidang.nama"
                                />
                              </div>

                            
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="p-6">
                      <button
                      type="button"
                          class="w-44 py-2 mt-4 self-center font-sans font-bold bg-green-700 rounded-full text-xs text-white text-center border-2 border-gray-500"
                          data-bs-toggle="modal"
                          data-bs-target="#exampleModal"
                          >
                        Simpan
                      </button>
                    </div>

                      <!-- Modal -->
                      <div
                        class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                      >
                        <div
                          class="modal-dialog relative w-auto pointer-events-none"
                        >
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
                              Apakah anda yakin ingin memperbaharui Bidang?
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
                                type="button"
                                class="px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1"
                                data-bs-dismiss="modal"
                                v-on:click="submitForm(bidang.id,bidang.nama)"
                                >
                                Save changes
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>

                  </form>
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
  name: "update-sector",
  components: {
    NavbarComponent,
    SidebarComponent,
    FooterComponent,
  },
  data() {
    return {
      date: new Date().getFullYear(),
      form: {},
      bidang: {},
      nama: null,
      colorBgCustom: localStorage.getItem("colorBg"),
    };
  },

  created() {
    axios
      .get(API_URL + 'api/bidang-pemeriksaan/'+ this.$route.params.id)
      .then((response) => {
        console.log(response.data);
        this.form = response.data;
        this.bidang = {
          id : this.form.data.id,
          nama : this.form.data.bidang,
        }
        console.log(this.bidang)
      })
      .catch((e) => {
        console.log(e);
      });
  },



  methods: {
      submitForm(sectorId,sectorName) {
        axios
        .put(API_URL + "api/bidang-pemeriksaan", {id_bidang: sectorId, bidang: sectorName})
          .then((res) => {
            console.log(res);
            this.$router.push({ path: "/superadmin/sector-directory" });
          });
      },
    },
  
};
</script>
