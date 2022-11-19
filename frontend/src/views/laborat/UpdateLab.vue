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
                      Proses Pemeriksaan
                    </h3>
                  </div>
                </div>
              </div>
              <div class="block w-full overflow-x-auto">
                <!-- content -->
                <div>
                  <form action="Post" id="orderlab">
                    <div class="flex flex-wrap">
                      <div class="w-full lg:w-4/12 xl:w-3/12 px-4">
                        <div
                          class="relative flex flex-col min-w-0 break-words bg-white mb-6 xl:mb-0"
                        >
                          <div class="flex-auto p-4">
                            <h5
                              class="text-black-700 uppercase font-bold text-sm"
                            >
                              Data Pasien
                            </h5>

                            <div class="py-3">
                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Id Pasien
                                </div>
                                <div
                                  class="border-2 border-white w-full x  py-2 self-center"
                                >
                                  {{ pemeriksaan.pasien_id }}
                                </div>
                              </div>

                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Nama
                                </div>
                                <div
                                  class="border-2 border-white w-full x  py-2 self-center"
                                >
                                  {{ pasien.nama }}
                                </div>
                              </div>

                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Jenis Kelamin
                                </div>
                                <div
                                  class="border-2 border-white w-full x  py-2 self-center"
                                >
                                  {{ pasien.jenis_kelamin }}
                                </div>
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
                            <h5
                              class="text-black-700 uppercase font-bold text-sm"
                            >
                              Data Pengirim
                            </h5>

                            <div class="py-3">
                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Nama
                                </div>
                                <div
                                  class="border-2 border-white w-full x  py-2 self-center"
                                >
                                  {{ pengirim.nama_lengkap }}
                                </div>
                              </div>
                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Nomer Telepon
                                </div>
                                <div
                                  class="border-2 border-white w-full x  py-2 self-center"
                                >
                                  {{ pengirim.no_telp }}
                                </div>
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
                            <h5
                              class="text-black-700 uppercase font-bold text-sm"
                            >
                              Data Validator
                            </h5>
                            <div class="py-3">
                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Id
                                </div>
                                <select
                                  class="form-select appearance-none border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  aria-label="Default select example"
                                  v-model="validator_id"
                                  v-on:click="targetValidatorId()"
                                >
                                  <option
                                    v-for="validator of allValidator.data"
                                    :key="validator.id"
                                    :value="validator.id"
                                  >
                                    {{ validator.id }}
                                  </option>
                                </select>
                              </div>

                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Nama
                                </div>
                                <div
                                  class="border-2 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                >
                                  {{ selectValidator.nama }}
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <h5
                      class="text-black-700 uppercase font-bold text-sm px-8 py-5"
                    >
                      Data Pemeriksaan
                    </h5>

                    <div class="block w-full overflow-x-auto">
                      <table
                        class="items-center w-full bg-transparent border-collapse"
                      >
                        <thead>
                          <tr>
                            <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            >
                              Id
                            </th>
                            <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            >
                              Parameter
                            </th>
                            <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            >
                              Hasil
                            </th>
                            <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            >
                              Satuan
                            </th>
                            <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            >
                              Nilai Rujukan
                            </th>
                            <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            >
                              Metode
                            </th>
                            <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            >
                              Kesan
                            </th>
                            <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            >
                              Catatan
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr
                            v-for="keterangan of keterangan"
                            :key="keterangan"
                          >
                            <th
                              class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                            >
                              {{ keterangan.id }}
                            </th>
                            <th
                              class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                            >
                              {{
                                parameter.data[keterangan.parameter_id - 1]
                                  .parameter
                              }}
                            </th>
                            <td
                              class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                              <input
                                type="text"
                                class="border-1 border-gray-400 px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                placeholder="hasil"
                                v-model="keterangan.hasil"
                              />
                            </td>
                            <td
                              class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                              {{
                                parameter.data[keterangan.parameter_id - 1]
                                  .satuan
                              }}
                            </td>
                            <td
                              class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                              {{
                                parameter.data[keterangan.parameter_id - 1]
                                  .nilai_rujukan
                              }}
                            </td>
                            <td
                              class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                              {{ metode.data[keterangan.metode_id - 1].nama }}
                            </td>
                            <td
                              class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                              {{ keterangan.kesan }}
                            </td>
                            <td
                              class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                            >
                              {{ keterangan.catatan }}
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="p-6">
                      <div
                        class="text-black-700 font-bold text-xs py-1 text-[#E02424]"
                      >
                        {{ messages }}
                      </div>

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
                            Apakah anda yakin ingin memproses Pemeriksaan?
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
import API_URL from "../../connection_api";

export default {
  name: "update-lab",
  components: {
    NavbarComponent,
    SidebarComponent,
  },
  data() {
    return {
      date: new Date().getFullYear(),
      pemeriksaan: [],
      bidang: [],
      parameter: [],
      metode: [],
      pasien: [],
      validator: [],
      validator_id: null,
      allValidator: [],
      pengirim: [],
      keterangan: [],
      selectValidator: {
        nama: null,
      },
      messages: "",
    };
  },
  created() {
    // Get Bidang
    axios
      .get(API_URL + "api/pemeriksaan/" + this.$route.params.id)
      .then((response) => {
        this.pemeriksaan = response.data.data;
        this.pasien = this.pemeriksaan.pasien;
        this.pengirim = this.pemeriksaan.user;
        this.keterangan = this.pemeriksaan.keterangan;

        for (let index = 0; index < this.keterangan.length; ++index) {
          delete this.keterangan[index].pemeriksaan_id;
          delete this.keterangan[index].created_at;
          delete this.keterangan[index].updated_at;
          delete this.keterangan[index].parameter;
          delete this.keterangan[index].metode;
          delete this.keterangan[index].bidang;
        }
        console.log(this.keterangan)
      })
      .catch((e) => {
        console.log(e);
      });
    // Get Bidang
    axios
      .get(API_URL + "api/bidang-pemeriksaan")
      .then((response) => {
        this.bidang = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
    //Get parameter
    axios
      .get(API_URL + "api/parameter-pemeriksaan")
      .then((response) => {
        this.parameter = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
    //Get parameter
    axios
      .get(API_URL + "api/metode-pemeriksaan")
      .then((response) => {
        this.metode = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
    //Get Validator
    axios
      .get(API_URL + "api/validator-pemeriksaan")
      .then((response) => {
        this.allValidator = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
  },
  methods: {
    targetValidatorId() {
      this.index2 = this.allValidator.data.findIndex(
        (idx) => idx.id === this.validator_id
      );
      this.selectValidator.nama = this.allValidator.data[this.index2].nama;
    },
    submitForm() {
      axios
        .put(
          API_URL + "api/pemeriksaan",
          {
            id_pemeriksaan: this.$route.params.id,
            validator_id: this.validator_id,
            status_id: 2,
            keterangan: this.keterangan,
          },
          {
            headers: {
              Authorization: "Bearer " + localStorage.getItem("access_token"),
            },
          }
        )
        .then((res) => {
          console.log(res)
          if (res.data.success == true) {
            this.$router.push({ path: "/Dashboard" });
          } else if (res.data.success == false) {
            this.messages = res.data.message;
          }
        });
    },
  },
};
</script>
