<template>
  <div>
    <sidebar-component></sidebar-component>

    <div class="relative md:ml-64">
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
                      Riwayat Pemeriksaan
                    </h3>
                  </div>
                  <div
                    class="relative w-full px-4 max-w-full flex-grow flex-1 text-right"
                  >
                    <select
                      class="form-select appearance-none border-1 border-gray-400 w-1/3 px-2 py-2 self-center rounded-lg drop-shadow-sm"
                      aria-label="Default select example"
                      v-model="formStatus"
                    >
                      <option value="1">Belum diproses</option>
                      <option value="2">Menunggu Direview</option>
                      <option value="3">Selesai</option>
                      <option value="4">Dibatalkan</option>
                    </select>
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
                        Validator
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
                    <tr
                      v-for="pemeriksaan of pemeriksaan.data"
                      :key="pemeriksaan.id"
                    >
                      <td
                        v-if="pemeriksaan.status.id == formStatus"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        {{ pemeriksaan.id }}
                      </td>
                      <td
                        v-if="pemeriksaan.status.id == formStatus"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        {{ pemeriksaan.pasien.nama }}
                      </td>
                      <td
                        v-if="pemeriksaan.status.id == formStatus"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        {{ pemeriksaan.user.nama_lengkap }}
                      </td>
                      <td
                        v-if="pemeriksaan.status.id == formStatus"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        <div v-if="pemeriksaan.status.id == 1">
                          -
                        </div> 
                        <div v-else>
                          {{ pemeriksaan.validator.nama }}
                        </div>
                      </td>
                      <td
                        v-if="pemeriksaan.status.id == formStatus"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        {{ pemeriksaan.updated_at }}
                      </td>
                      <td
                        v-if="pemeriksaan.status.id == formStatus"
                        class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                      >
                        <p
                          class="text-center py-0.5 w-full rounded text-white"
                          :class="styleStatus(pemeriksaan.status.id)"
                        >
                          {{ pemeriksaan.status.name }}
                        </p>
                      </td>
                      <td
                        v-if="pemeriksaan.status.id == formStatus"
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
            </div>
          </div>
        </div>

        <footer-vue></footer-vue>
      </div>
    </div>
  </div>
</template>
<script>
import NavbarComponent from "../../components/Navbar.vue";
import SidebarComponent from "../../components/Sidebar.vue";
import API_URL from "../../connection_api";
import axios from "axios";
import FooterVue from "../../components/Footer.vue";

export default {
  name: "history-check-up",
  components: {
    NavbarComponent,
    SidebarComponent,
    FooterVue,
  },
  data() {
    return {
      date: new Date().getFullYear(),
      pemeriksaan: {},
      formStatus: 3,
    };
  },
  created() {
    //read tabel pemeriksaan
    axios
      .get(API_URL + "api/pemeriksaan")
      .then((response) => {
        console.log(response.data);
        this.pemeriksaan = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
  },
  methods: {
    styleStatus(idStatus) {
      if (idStatus == 1) {
        return "bg-red-600";
      } else if (idStatus == 2) {
        return "bg-orange-600";
      } else if (idStatus == 3) {
        return "bg-green-600";
      } else if (idStatus == 4) {
        return "bg-black";
      }
    },
  },
};
</script>
