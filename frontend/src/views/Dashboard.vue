<template>
  <div>
    <sidebar-component></sidebar-component>

    <div class="relative md:ml-64 bg-blueGray-100">
      <navbar-component></navbar-component>

      <!-- Header -->

      <div class="relative md:pt-24 pb-32 pt-12" :class="colorBgCustom">
        <div class="px-4 md:px-10 mx-auto w-full">
          <div>
            <!-- Card stats -->
            <div class="p-3">
              <h5 class="text-white uppercase font-bold text-xs">Status Pasien</h5>
            </div>

            <div class="flex flex-wrap">
              <div class="w-full lg:w-4/12 xl:w-3/12 px-4">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                >
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div
                        class="relative w-full pr-4 max-w-full flex-grow flex-1"
                      >
                        <h5
                          class="text-blueGray-400 uppercase font-bold text-xs"
                        >
                          Total Pasien
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          {{totalPasien}}
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                        >
                          <i class="far fa-chart-bar"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">

                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div>
            <!-- Card stats -->
            <div class="p-3">
              <h5 class="text-white uppercase font-bold text-xs">Status Pemeriksaan</h5>
            </div>

            <div class="flex flex-wrap">
              <div class="w-full lg:w-4/12 xl:w-3/12 px-4">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                >
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div
                        class="relative w-full pr-4 max-w-full flex-grow flex-1"
                      >
                        <h5
                          class="text-blueGray-400 uppercase font-bold text-xs"
                        >
                        Total Pemeriksaan Harian
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          {{pemeriksaanHarian}}
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500"
                        >
                          <i class="fas fa-chart-pie"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4"></p>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-4/12 xl:w-3/12 px-4">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                >
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div
                        class="relative w-full pr-4 max-w-full flex-grow flex-1"
                      >
                        <h5
                          class="text-blueGray-400 uppercase font-bold text-xs"
                        >
                        Total Pemeriksaan Bulanan
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          {{pemeriksaanBulanan}}
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                      <!-- <span class="text-orange-500 mr-2">
                        <i class="fas fa-arrow-down"></i> 1.10%
                      </span>
                      <span class="whitespace-nowrap">
                        Since yesterday
                      </span> -->
                    </p>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-4/12 xl:w-3/12 px-4">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                >
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div
                        class="relative w-full pr-4 max-w-full flex-grow flex-1"
                      >
                        <h5
                          class="text-blueGray-400 uppercase font-bold text-xs"
                        >
                        Total Pemeriksaan Tahunan
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          {{pemeriksaanTahunan}}
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-lightBlue-500"
                        >
                          <i class="fas fa-percent"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">

                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <!-- Card stats -->
            <div class="p-3">
              <h5 class="text-white uppercase font-bold text-xs">Status Organisasi</h5>
            </div>

            <div class="flex flex-wrap">
              <div class="w-full lg:w-4/12 xl:w-3/12 px-4">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                >
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div
                        class="relative w-full pr-4 max-w-full flex-grow flex-1"
                      >
                        <h5
                          class="text-blueGray-400 uppercase font-bold text-xs"
                        >
                        Bagian Administrasi
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          {{bagianAdministrasi}}
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500"
                        >
                          <i class="far fa-chart-bar"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                    </p>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-4/12 xl:w-3/12 px-4">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                >
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div
                        class="relative w-full pr-4 max-w-full flex-grow flex-1"
                      >
                        <h5
                          class="text-blueGray-400 uppercase font-bold text-xs"
                        >
                        Bagian Poli
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          {{bagianPoli}}
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500"
                        >
                          <i class="fas fa-chart-pie"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4"></p>
                  </div>
                </div>
              </div>
              <div class="w-full lg:w-4/12 xl:w-3/12 px-4">
                <div
                  class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                >
                  <div class="flex-auto p-4">
                    <div class="flex flex-wrap">
                      <div
                        class="relative w-full pr-4 max-w-full flex-grow flex-1"
                      >
                        <h5
                          class="text-blueGray-400 uppercase font-bold text-xs"
                        >
                        Bagian Laborat
                        </h5>
                        <span class="font-semibold text-xl text-blueGray-700">
                          {{bagianLaborat}}
                        </span>
                      </div>
                      <div class="relative w-auto pl-4 flex-initial">
                        <div
                          class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500"
                        >
                          <i class="fas fa-users"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-sm text-blueGray-400 mt-4">
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="px-4 md:px-10 mx-auto w-full -m-24">
        <div class="flex flex-wrap"></div>
        <div class="flex flex-wrap mt-4">
          <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
            >
              <!-- <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-blueGray-700">
                      Page visits
                    </h3>
                  </div>
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                    <button
                      class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                      style="transition:all .15s ease"
                    >
                      See all
                    </button>
                  </div>
                </div>
              </div>
              <div class="block w-full overflow-x-auto">

                <table class="items-center w-full bg-transparent border-collapse">
                  <thead>
                    <tr>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Page name
                      </th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Visitors
                      </th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Unique users
                      </th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Bounce rate
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        /argon/
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        4,569
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        340
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                        46,53%
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        /argon/index.html
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        3,985
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        319
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                        46,53%
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        /argon/charts.html
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        3,513
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        294
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                        36,49%
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        /argon/tables.html
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        2,050
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        147
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-up text-emerald-500 mr-4"></i>
                        50,87%
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        /argon/profile.html
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        1,795
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        190
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                        46,53%
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div> -->
            </div>
          </div>
          <!-- <div class="w-full xl:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
              <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-blueGray-700">
                      Social traffic
                    </h3>
                  </div>
                  <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                    <button
                      class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                      type="button"
                      style="transition:all .15s ease"
                    >
                      See all
                    </button>
                  </div>
                </div>
              </div>
              <div class="block w-full overflow-x-auto">

                <table class="items-center w-full bg-transparent border-collapse">
                  <thead class="thead-light">
                    <tr>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Referral
                      </th>
                      <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Visitors
                      </th>
                      <th
                        class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left"
                        style="min-width:140px"
                      ></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Facebook
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        1,480
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">60%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                              <div
                                style="width:60%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Facebook
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        5,480
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">70%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-emerald-200">
                              <div
                                style="width:70%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Google
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        4,807
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">80%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-purple-200">
                              <div
                                style="width:80%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        Instagram
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        3,678
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">75%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-lightBlue-200">
                              <div
                                style="width:75%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-lightBlue-500"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                        twitter
                      </th>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        2,645
                      </td>
                      <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">30%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-orange-200">
                              <div
                                style="width:30%"
                                class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-emerald-500"
                              ></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div> -->
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
import NavbarComponent from "../components/Navbar.vue";
import SidebarComponent from "../components/Sidebar.vue";
import axios from "axios";
import API_URL from '../connection_api';

export default {
  name: "dashboard-page",
  components: {
    NavbarComponent,
    SidebarComponent,
  },
  data() {
    return {
      date: new Date().getFullYear(),
      containerData: [],
      colorBgCustom: localStorage.getItem("colorBg"),
      totalPasien: null,
      pemeriksaanHarian: null,
      pemeriksaanBulanan: null,
      pemeriksaanTahunan: null,
      bagianAdministrasi: null,
      bagianPoli: null,
      bagianLaborat: null,
    };
  },
  created() {
    axios
      .get(API_URL+'api/info/dashboard')
      .then((response) => {
        this.containerData = response.data;
        this.totalPasien = this.containerData.data.pasien;
        this.pemeriksaanHarian = this.containerData.data.pemeriksaan.harian;
        this.pemeriksaanBulanan = this.containerData.data.pemeriksaan.bulanan;
        this.pemeriksaanTahunan = this.containerData.data.pemeriksaan.tahunan;
        this.bagianAdministrasi = this.containerData.data.user['Administrasi'];
        this.bagianPoli = this.containerData.data.user['Poli'];
        this.bagianLaborat = this.containerData.data.user['Laborat'];
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>
