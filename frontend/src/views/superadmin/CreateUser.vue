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
                    <h3
                      class="font-semibold text-base text-blueGray-700 uppercase"
                    >
                      Tambah Petugas
                    </h3>
                  </div>
                </div>
              </div>
              <div class="block w-full overflow-x-auto">
                <!-- content -->
                <div>
                  <form>
                    <div class="flex flex-wrap">
                      <div class="w-full lg:w-4/12 xl:w-3/12 px-4">
                        <div
                          class="relative flex flex-col min-w-0 break-words bg-white mb-6 xl:mb-0"
                        >
                          <div class="flex-auto p-4">
                            <h5
                              class="text-black-700 uppercase font-bold text-sm"
                            >
                              Data Petugas Baru
                            </h5>

                            <div class="py-3">
                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Username
                                </div>
                                <input
                                  type="text"
                                  class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  placeholder="Username"
                                  aria-label="username"
                                  id="username"
                                  v-model="form.username"
                                />
                              </div>

                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Nama
                                </div>
                                <input
                                  type="text"
                                  class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  placeholder="Nama"
                                  aria-label="nama"
                                  id="nama"
                                  v-model="form.nama_lengkap"
                                />
                              </div>

                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Email
                                </div>
                                <input
                                  type="text"
                                  class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  placeholder="Email"
                                  aria-label="email"
                                  id="email"
                                  v-model="form.email"
                                />
                              </div>

 
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="w-full lg:w-4/12 xl:w-3/12 px-4">
                        <div
                          class="relative flex flex-col min-w-0 break-words bg-white mb-6 xl:mb-0"
                        >
                          <div class="flex-auto p-4">
                            <div class="py-7">
                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Roles
                                </div>
                                <select
                                  class="form-select appearance-none border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  aria-label="Default select example" v-model="form.roles_id"
                                >
                                  <option :value=1>
                                    Super Admin
                                  </option>
                                  <option :value=2>Administrasi</option>
                                  <option :value=3>Laborat</option>
                                  <option :value=4>Poli</option>
                                </select>
                              </div>
                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Nomer Telepon
                                </div>
                                <input
                                  type="text"
                                  class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  placeholder="08xxxxxxxxx"
                                  aria-label="nomertelepon"
                                  id="nomertelepon"
                                  v-model="form.no_telp"
                                />
                              </div>

                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Password
                                </div>
                                <input
                                  type="password"
                                  class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  placeholder="Password"
                                  aria-label="password"
                                  id="password"
                                  v-model="form.password"
                                />
                              </div>

                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Konfirmasi Password
                                </div>
                                <input
                                  type="password"
                                  class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  placeholder="Password"
                                  aria-label="password"
                                  id="password"
                                  v-model="form.password_confirmation"
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
                              Tambahkan Petugas
                            </h5>
                            <button
                              type="button"
                              class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body relative p-4">
                            Apakah anda yakin ingin menambahkan Petugas?
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
                              v-on:click="submitForm()"
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
  name: "create-user",
  components: {
    NavbarComponent,
    SidebarComponent,
  },
  data() {
    return {
      date: new Date().getFullYear(),
      form: {
        nama_lengkap: "",
        no_telp: null,
        username: "",
        email: "",
        password: "",
        password_confirmation: "",
        roles_id: null
      },
    };
  },
  methods: {
    submitForm() {
      console.log(this.form);
      axios
        .post("http://127.0.0.1:3300/api/petugas", this.form)
        .then((res) => {
          console.log(res);
          this.$router.push({ path: "/superadmin/employee-directory" });
        });
    },
  },
};
</script>
