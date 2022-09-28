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
  
                    <form action="Post" id="tambahpasien">
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
                                  />
                                </div>
  
                                <div class="py-0.5">
                                  <div
                                    class="text-black-700 font-bold text-xs py-1"
                                  >
                                    Tanggal Lahir
                                  </div>
                                  <input
                                    type="text"
                                    class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                    placeholder="dd/mm/yyyy"
                                    aria-label="birthday"
                                    id="birthday"
                                  />
                                </div>
  
                                <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Jenis Kelamin
                                </div>
                                <select
                                  class="form-select appearance-none border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  aria-label="Default select example"
                                >
                                  <option selected>
                                    Pilih Jenis Kelamin
                                  </option>
                                  <option value="male">Laki-Laki</option>
                                  <option value="female">Perempuan</option>
                                </select>
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
                                    aria-label="Default select example"
                                  >
                                    <option selected>
                                      Pilih Roles
                                    </option>
                                    <option value="Administrasi">Administrasi</option>
                                    <option value="Poli">Poli</option>
                                    <option value="Laborat">Laborat</option>
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
                                  />
                                </div>
  
                                <div class="py-0.5">
                                  <div
                                    class="text-black-700 font-bold text-xs py-1"
                                  >
                                    Password User Baru
                                  </div>
                                  <input
                                    type="password"
                                    class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                    placeholder="Password"
                                    aria-label="password"
                                    id="password"
                                  />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
  
                      <div class="p-6">
                                    <button
                                      type="submit"
                                      class="w-44 py-2 mt-4 self-center font-sans font-bold bg-green-700 rounded-full text-xs text-white text-center border-2 border-gray-500"
                                    >
  Simpan
                                    </button>
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
  
  export default {
    name: "create-user",
    components: {
      NavbarComponent,
      SidebarComponent,
    },
    data() {
      return {
        date: new Date().getFullYear(),
      };
    },
  };
  </script>
  