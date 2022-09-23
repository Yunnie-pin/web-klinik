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
                      <router-link :to="{ name: 'editprofile' }">                      <button
                        class="bg-primary active:primary uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1"
                        type="button"
                        style="transition: all 0.15s ease 0s"
                      >
                      Edit Profile
                      </button></router-link>
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4 lg:order-1">

                  </div>
                </div>
                
                <div class="text-center mt-12">
                  <h3
                    class="text-4xl font-semibold leading-normal mb-2 text-gray-800"
                  >
                    Windah Basudara
                  </h3>
                  <div
                    class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold uppercase"
                  >
                    <i
                      class="fas fa-id-card mr-2 text-lg text-gray-500"
                    ></i>
                    Petugas Laborat
                  </div>

                  <div class="mb-2 text-gray-700 mt-10">
                    <i class="fas fa-mail-bulk mr-2 text-lg text-gray-500"></i
                    >Windah@mail.com
                  </div>
                  
                  <div class="mb-2 text-gray-700">
                    <i class="fas fa-phone mr-2 text-lg text-gray-500"></i
                    >0812398123412
                  </div>

                  <div class="mb-2 text-gray-700">
                    <i class="fas fa-id-card mr-2 text-lg text-gray-500"></i
                    >ID012398092138902183
                  </div>
                  
                </div>
                
                <div class="mt-10 border-gray-300 text-center">

                </div>
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
  name: "profile-page",
  components: {
    NavbarComponent,
    SidebarComponent,
  },
};
</script>
