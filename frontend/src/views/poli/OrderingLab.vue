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
                      Pemesanan Lab
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
                                <select
                                  class="form-select appearance-none border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  aria-label="Default select example"
                                  v-model="pemeriksaan.pasien_id"
                                  v-on:click="targetPasienId()"
                                >
                                  <option
                                    v-for="pasien of pasien.data"
                                    :key="pasien.id"
                                    :value="pasien.id"
                                  >
                                    {{ pasien.id }}
                                  </option>
                                </select>
                              </div>

                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Nama
                                </div>
                                <input
                                  disabled
                                  type="text"
                                  class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  placeholder="Nama"
                                  aria-label="nama"
                                  id="nama"
                                  v-model="selectPasien.nama"
                                />
                              </div>

                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Jenis Kelamin
                                </div>
                                <input
                                  disabled
                                  type="text"
                                  class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  placeholder="Jenis Kelamin"
                                  aria-label="jeniskelamin"
                                  id="jeniskelamin"
                                  v-model="selectPasien.jenisKelamin"
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
                                <input
                                  disabled
                                  type="text"
                                  class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  placeholder="Nama"
                                  aria-label="namaPengirim"
                                  id="namaPengirim"
                                  v-model="sender.nama_lengkap"
                                />
                              </div>
                              <div class="py-0.5">
                                <div
                                  class="text-black-700 font-bold text-xs py-1"
                                >
                                  Nomer Telepon
                                </div>
                                <input
                                  disabled
                                  type="text"
                                  class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  placeholder="8xxxxxxxx"
                                  aria-label="nomertelepon"
                                  id="nomertelepon"
                                  v-model="sender.no_telp"
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <h5 class="text-black-700 uppercase font-bold text-sm px-8">
                      Data Pemeriksaan
                    </h5>

                    <div class="flex flex-wrap px-4">
                      <div class="w-full lg:w-3/12 xl:w-3/12">
                        <div
                          class="relative flex flex-col min-w-0 break-words bg-white mb-6 xl:mb-0"
                        >
                          <div class="flex-auto p-4">
                            <div class="py-0.5">
                              <div
                                class="text-black-700 font-bold text-xs py-1"
                              >
                                Pilih Bidang
                              </div>
                              <select
                                class="form-select appearance-none border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                aria-label="Default select example"
                                v-model="pemeriksaan.bidang_id"
                              >
                                <option
                                  v-for="bidang of bidang.data"
                                  :key="bidang.id"
                                  :value="bidang.id"
                                >
                                  {{ bidang.bidang }}
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="w-full lg:w-3/12 xl:w-3/12">
                        <div
                          class="relative flex flex-col min-w-0 break-words bg-white mb-6 xl:mb-0"
                        >
                          <div class="flex-auto p-4">
                            <div class="py-0.5">
                              <div
                                class="text-black-700 font-bold text-xs py-1"
                              >
                                Pilih Parameter
                              </div>
                              <select
                                class="form-select appearance-none border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                aria-label="Default select example"
                                v-model="pemeriksaan.parameter_id"
                                v-on:click="targetParameterId()"
                              >
                                <option
                                  v-for="parameter of parameter.data"
                                  :key="parameter.id"
                                  :value="parameter.id"
                                >
                                  {{ parameter.parameter }}
                                </option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="w-full lg:w-3/12 xl:w-3/12">
                        <div
                          class="relative flex flex-col min-w-0 break-words bg-white mb-6 xl:mb-0"
                        >
                          <div class="flex-auto p-4">
                            <div class="py-0.5">
                              <div
                                class="text-black-700 font-bold text-xs py-1"
                              >
                                Metode
                              </div>
                              <input
                                disabled
                                type="text"
                                class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                placeholder="Metode"
                                aria-label="metode"
                                id="metode"
                                v-model="selectParameter.metode"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="w-full lg:w-2/12 xl:w-2/12">
                        <div
                          class="relative flex flex-col min-w-0 break-words bg-white mb-6 xl:mb-0"
                        >
                          <div class="flex-auto p-4">
                            <div class="py-0.5">
                              <div
                                class="text-black-700 font-bold text-xs py-1"
                              >
                                Harga
                              </div>
                              <input
                                type="text"
                                class="border-1 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                placeholder="Harga"
                                aria-label="Harga"
                                id="Harga"
                                v-model="selectParameter.harga"
                              />
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="w-full lg:w-1/12 xl:w-1/12">
                        <div
                          class="relative flex flex-col min-w-0 break-words bg-white mb-6 xl:mb-0"
                        >
                          <div class="flex-auto p-4">
                            <div class="py-0.5">
                              <div class="text-white font-bold text-xs py-1">
                                button
                              </div>
                              <button
                                type="button"
                                class="py-2 w-full self-center font-sans font-bold bg-green-700 rounded-full text-xs text-white text-center border-2 border-gray-500"
                                v-on:click="incrementTable()"
                              >
                                +
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div
                      class="block w-full overflow-x-auto"
                      v-if="keterangan.length !== 0"
                    >
                      <table
                        class="items-center w-full bg-transparent border-collapse"
                      >
                        <thead>
                          <tr>
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
                            <th
                              class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                            >
                              Opsi
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr
                            v-for="(keterangan,index) in keterangan"
                            :key="keterangan"
                          >
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
                              {{ keterangan.hasil }}
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
                            <td
                              class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"
                              v-on:click="deletePemeriksaan(index)"
                            >
                              <i class="fas fa-trash text-red-500 mr-4"></i>
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
                              Tambahkan Pemeriksaan
                            </h5>
                            <button
                              type="button"
                              class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body relative p-4">
                            Apakah anda yakin ingin menambahkan Pemeriksaan?
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
import API_URL from "../../connection_api";

export default {
  name: "ordering-lab",
  components: {
    NavbarComponent,
    SidebarComponent,
    FooterComponent,
  },
  data() {
    return {
      date: new Date().getFullYear(),
      pemeriksaan: [],
      colorBgCustom: localStorage.getItem("colorBg"),
      bidang: [],
      parameter: [],
      metode: [],
      pasien: [],
      validator: [],
      selectPasien: {
        nama: null,
        jenisKelamin: null,
      },
      sender: {
        id: sessionStorage.getItem("id"),
        nama_lengkap: sessionStorage.getItem("nama_lengkap"),
        no_telp: sessionStorage.getItem("no_telp"),
      },
      selectValidator: {
        nama: null,
      },
      selectParameter: {
        parameter: null,
        metode: null,
        metodeId: null,
      },
      keterangan: [],
      messages: "",
    };
  },
  created() {
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
    //Get Pasien
    axios
      .get(API_URL + "api/pasien")
      .then((response) => {
        this.pasien = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
    //Get Validator
    axios
      .get(API_URL + "api/validator-pemeriksaan")
      .then((response) => {
        this.validator = response.data;
      })
      .catch((e) => {
        console.log(e);
      });
  },
  methods: {
    submitForm() {
      axios
        .post(
          API_URL + "api/pemeriksaan",
          {
            pasien_id: this.pemeriksaan.pasien_id,
            status_id: 1,

            keterangan: this.keterangan,
          },
          {
            headers: {
              Authorization: "Bearer " + sessionStorage.getItem("access_token"),
            },
          }
        )
        .then((res) => {
          if (res.data.success == true) {
            this.$router.push({ path: "/laborat/queue-lab" });
          } else if (res.data.success == false) {
            this.messages = res.data.message;
          }
        });
    },
    targetPasienId() {
      this.index = this.pasien.data.findIndex(
        (idx) => idx.id === this.pemeriksaan.pasien_id
      );
      this.selectPasien.nama = this.pasien.data[this.index].nama;
      this.selectPasien.jenisKelamin =
        this.pasien.data[this.index].jenis_kelamin;
    },

    targetParameterId() {
      this.index3 = this.parameter.data.findIndex(
        (idx) => idx.id === this.pemeriksaan.parameter_id
      );
      this.selectParameter.id = this.parameter.data[this.index3].id;
      this.selectParameter.nama = this.parameter.data[this.index3].parameter;
      this.selectParameter.metodeId =
        this.parameter.data[this.index3].metode.id;
      this.selectParameter.metode =
        this.parameter.data[this.index3].metode.nama;
      this.selectParameter.harga = this.parameter.data[this.index3].harga;
      console.log(this.selectParameter);
    },
    incrementTable() {
      this.keterangan.push({
        bidang_id: this.pemeriksaan.bidang_id,
        parameter_id: this.selectParameter.id,
        metode_id: this.selectParameter.metodeId,
        hasil: "-",
        kesan: "-",
        catatan: "-",
      });
    },
    deletePemeriksaan(index){
      this.keterangan.splice(index,1);
      
    }
  },
};
</script>
