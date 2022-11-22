<template>
  <div>
    <sidebar-component></sidebar-component>
    <div class="relative md:ml-64 bg-blueGray-100">
      <navbar-component></navbar-component>
      <main class="profile-page">
        <section class="relative block" style="height: 500px">
          <div
            class="absolute top-0 w-full h-full bg-center bg-cover"
          >
            <span
              id="blackOverlay"
              class="w-full h-full absolute opacity-50" :class="colorBgCustom"
            ></span>
          </div>
          <div
            class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
            style="height: 70px"
          >
            <svg
              class="absolute bottom-0 overflow-hidden"
              xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="none"
              version="1.1"
              viewBox="0 0 2560 100"
              x="0"
              y="0"
            >
              <polygon
                class="text-gray-300 fill-current"
                points="2560 0 2560 100 0 100"
              ></polygon>
            </svg>
          </div>
        </section>
        <section class="relative py-16 bg-gray-300">
          <div class="container mx-auto px-4">
            <div
              class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64"
            >
              <div class="px-6">
                <div class="flex flex-wrap justify-center pb-5">
                  <div
                    class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center"
                  >
                    <div class="relative">
                      <img
                        alt="..."
                        src="../assets/img/defaultpict.png"
                        class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16"
                        style="max-width: 150px"
                      />
                    </div>
                  </div>
                  <div
                    class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center"
                  >
                    <div class="py-6 px-3 mt-32 sm:mt-0"></div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4 lg:order-1"></div>
                </div>

                <!-- Card  -->
                <div class="te">
                  <h3
                    class="text-4xl font-semibold leading-normal mb-2 text-gray-800 text-center pt-5"
                  >
                    Edit Profile
                  </h3>
                  <div class="p-3">
                    <h5 class="text-white uppercase font-bold text-xs">
                      Status Pemeriksaan
                    </h5>
                  </div>

                  <!-- kolom isi -->
                  <div class="flex flex-wrap">
                    <div class="w-full lg:w-12/12 xl:w-3/12 px-4">
                      <div
                        class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg"
                      >
                        <div class="flex-auto p-4">
                          <div class="flex flex-wrap">
                            <div
                              class="relative w-full pr-4 max-w-full flex-grow flex-1"
                            >
                              <form
                                id="editprofile"
                                class="p-6 sm:px-12 px-2 md:px-20 lg:px-56"
                              >
                                <!-- form password baru -->
                                <div class="py-4">
                                  <div
                                    class="text-light pb-2 font-bold text-blueGray-700"
                                  >
                                    Password Baru
                                  </div>
                                  <div>
                                    <input
                                      type="password"
                                      class="border-2 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                      placeholder="Password Baru"
                                      aria-label="passwordbaru"
                                      id="passwordbaru"
                                      v-model="password"
                                    />
                                  </div>
                                </div>

                                <div
                                  class="text-light pb-2 font-bold text-blueGray-700"
                                >
                                  {{ message }}
                                </div>

                                <div style="text-align: center !important">
                                  <button
                                    type="button"
                                    data-bs-toggle="modal"
                                    data-bs-target="#exampleModal"
                                    class="w-44 py-3 mt-4 self-center font-sans font-bold bg-[#374151] rounded-lg text-xs text-white text-center border-2 border-white"
                                  >
                                    SUBMIT
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
                                          Change Password
                                        </h5>
                                        <button
                                          type="button"
                                          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                          data-bs-dismiss="modal"
                                          aria-label="Close"
                                        ></button>
                                      </div>
                                      <div class="modal-body relative p-4">
                                        Apa anda yakin ingin mengganti password?
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
                                          v-on:click="
                                            submitForm(
                                              password,
                                            )
                                          "
                                        >
                                          Continue
                                        </button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <p class="text-sm text-blueGray-400 mt-4"></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mt-10 border-gray-300 text-center"></div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</template>
<script>
import NavbarComponent from "../components/Navbar.vue";
import SidebarComponent from "../components/Sidebar.vue";
import axios from "axios";
import API_URL from "../connection_api";

export default {
  name: "change-password",
  components: {
    NavbarComponent,
    SidebarComponent,
  },
  data() {
    return {
      message: null,
      colorBgCustom: localStorage.getItem("colorBg"),
    };
  },
  methods: {
    submitForm(newPassword) {
      axios
        .post(API_URL + "api/change-password", {
          password: newPassword,
        },
        {
            headers: {
              Authorization: "Bearer " + sessionStorage.getItem("access_token"),
            },
        }    
        )
        .then((res) => {
          if (res.data.success == true) {
            this.$router.push({ path: "/Dashboard" });
          } else {
            this.messages = res.data.message;
          }
        });
    },
  },
};
</script>
