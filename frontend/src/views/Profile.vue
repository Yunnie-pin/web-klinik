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
                <div class="flex flex-wrap justify-center">
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
                    <div class="py-6 px-3 mt-32 sm:mt-0">
                      <router-link :to="{ name: 'editprofile' }">
                        <button
                          class="bg-primary active:primary uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                          type="button"
                          style="transition: all 0.15s ease 0s"
                        >
                          Edit Profile
                        </button></router-link
                      >
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4 lg:order-1"></div>
                </div>

                <div class="text-center mt-12">
                  <h3
                    class="text-4xl font-semibold leading-normal mb-2 text-gray-800"
                  >
                    {{ nama_lengkap }}
                  </h3>


                  <div class="mx-auto block w-1/2 overflow-x-auto">
                    <table
                      class="items-center w-1/2 bg-transparent border-collapse mx-auto"
                    >
                      <tbody>
                        <tr>
                          <th
                            class="border-t-0 border-l-0 border-r-0 text-xs whitespace-nowrap text-right"
                          >
                            <i
                              class="fas fa-mail-bulk mr-2 text-lg text-gray-500"
                            ></i>
                          </th>
                          <th
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                          >
                            {{ email }}
                          </th>
                          
                        </tr>

                        <tr>
                          <th
                            class="border-t-0 border-l-0 border-r-0 text-xs whitespace-nowrap text-right"
                          >
                            <i
                              class="fas fa-id-card mr-2 text-lg text-gray-500"
                            ></i>
                          </th>
                          <th
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                          >
                            {{ roles_name }}
                          </th>
                          
                        </tr>

                        <tr>
                          <th
                            class="border-t-0 border-l-0 border-r-0 text-xs whitespace-nowrap text-right"
                          >
                            <i
                              class="fas fa-phone mr-2 text-lg text-gray-500"
                            ></i>
                          </th>
                          <th
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                          >
                            {{ no_telp }}
                          </th>
                          
                        </tr>

                        <tr>
                          <th
                            class="border-t-0 border-l-0 border-r-0 text-xs whitespace-nowrap text-right"
                          >
                            <i
                              class="fas fa-id-card mr-2 text-lg text-gray-500"
                            ></i>
                          </th>
                          <th
                            class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"
                          >
                            {{ username }}
                          </th>
                          
                        </tr>
                        
                      </tbody>
                    </table>
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
<script >
import NavbarComponent from "../components/Navbar.vue";
import SidebarComponent from "../components/Sidebar.vue";
export default {
  name: "profile-page",
  components: {
    NavbarComponent,
    SidebarComponent,
  },
  data() {
    return {
      id: localStorage.getItem("id"),
      username: localStorage.getItem("username"),
      email: localStorage.getItem("email"),
      nama_lengkap: localStorage.getItem("nama_lengkap"),
      no_telp: localStorage.getItem("no_telp"),
      roles_id: localStorage.getItem("roles_id"),
      roles_name: localStorage.getItem("roles_name"),
    };
  },
};
</script>
