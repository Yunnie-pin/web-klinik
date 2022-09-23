<template>
  <div>
    <sidebar-component></sidebar-component>
    <div class="relative md:ml-64 bg-blueGray-100">
      <navbar-component></navbar-component>
      <main class="profile-page">
        <section class="relative block" style="height: 500px">
          <div
            class="absolute top-0 w-full h-full bg-center bg-cover"
            style="
              background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');
            "
          >
            <span
              id="blackOverlay"
              class="w-full h-full absolute opacity-50 bg-black"
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
                              <form id="editprofile" class="p-6 sm:px-12 px-2 md:px-20 lg:px-56">


                                <!-- form email -->
                                <div class="py-4">
                                  <div
                                    class="text-light pb-2 font-bold text-blueGray-700"
                                  >
                                    Email
                                  </div>
                                  <div>
                                    <input
                                      type="text"
                                      class="border-2 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                      placeholder="Email"
                                      aria-label="email"
                                      id="email"
                                    />
                                  </div>
                                </div>

                                <!-- form nomer telepon -->
                                <div class="py-4">
                                  <div
                                    class="text-light pb-2 font-bold text-blueGray-700"
                                  >
                                    Nomer Telepon
                                  </div>
                                  <div>
                                    <input
                                      type="number"
                                      class="border-2 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                      placeholder="Telp"
                                      aria-label="telp"
                                      id="telp"
                                      
                                    />
                                  </div>
                                </div>

                                <div class="py-4">
                                  <div
                                    class="text-light pb-2 font-bold text-blueGray-700"
                                  >
                                    Konfirmasi Password
                                  </div>
                                  <div
                                    class="border-2 border-gray-400 w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
                                  >
                                    <input
                                      :type="passwordFieldType"
                                      v-model="password"
                                      class="bg-[#DBDBDB] w-9/12 sm:w-10/12 md:11/12 border-0"
                                      placeholder="Password"
                                      aria-label="Password"
                                      id="password"
                                    />
                                    <i
                                      class="far self-end border-0 bg-[#DBDBDB]"
                                      :class="iconType"
                                      type="password"
                                      @click="switchVisibility"
                                    ></i>
                                  </div>
                                </div>

                                <div style="text-align: center !important">
                                  <button
                                    type="submit"
                                    class="w-44 py-3 mt-4 self-center font-sans font-bold bg-[#374151] rounded-lg text-xs text-white text-center border-2 border-white"
                                  >
                                    <router-link :to="{ name: 'dashboard' }"
                                      >SUBMIT</router-link
                                    >
                                  </button>
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
export default {
  name: "edit-profile",
  components: {
    NavbarComponent,
    SidebarComponent,
  },
  data() {
    return {
      password: "",
      passwordFieldType: "password",
      iconType: "fa-eye",
    };
  },
  methods: {
    switchVisibility() {
      this.passwordFieldType =
        this.passwordFieldType === "password" ? "text" : "password";
      this.iconType = this.iconType === "fa-eye" ? "fa-eye-slash" : "fa-eye";
    },
  },
};
</script>
