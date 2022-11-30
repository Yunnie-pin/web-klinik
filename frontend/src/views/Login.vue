<template class="bg-primary">
  <div class="bg-primary">
    <div class=" md:h-screen">

      <div class="sm:w-full md:w-9/12 lg:w-6/12 m-auto lg:pt-16 md:p-10">
        <img src="../assets/img/Logo.png" alt="logo" class="mx-auto py-4" />
        <h1
          class="font-semibold font-sans text-2xl text-white text-center py-2"
        >
          Laborat Klinik Sistem
        </h1>

        <form id="login" class="p-6 md:px-24">
          <div class="text-light pb-2 font-bold text-white">Email</div>
          <div>
            <input
              type="text"
              class="border-2 border-white w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
              placeholder="Email"
              aria-label="Email"
              id="Email"
              v-model="form.email"
            />
          </div>

          <div class="text-light py-2 font-bold text-white">Password</div>
          <div
            class="border-2 border-white w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
          >
            <input
              :type="passwordFieldType"
              v-model="form.password"
              class="bg-[#DBDBDB] lg:w-10/12 md:w-10/12 border-0"
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

          <div class="pt-2">
            <div class="font-bold  text-[#E02424] drop-shadow-lg" >{{messages}}</div>
          </div>

          <div style="text-align: center !important">
            <button
              type="button"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
              class="w-44 py-3 mt-4 self-center font-sans font-bold bg-[#374151] rounded-lg text-xs text-white text-center border-2 border-white"
            >
              Login
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
            <div class="modal-dialog relative w-auto pointer-events-none">
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
                    Login
                  </h5>
                  <button
                    type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body relative p-4">
                  Apa anda yakin ingin melanjutkan?
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
                    Continue
                  </button>
                </div>
              </div>
            </div>
          </div>


        </form>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import API_URL from "../connection_api";

export default {
  name: "login-page",


  data() {
    return {
      password: "",
      passwordFieldType: "password",
      iconType: "fa-eye",

      colorBgCustom: localStorage.getItem("colorBg"),
      messages: "",
      form: {
        email: null,
        password: null,
      },
      
    };
  },
  methods: {
    switchVisibility() {
      this.passwordFieldType =
        this.passwordFieldType === "password" ? "text" : "password";
      this.iconType = this.iconType === "fa-eye" ? "fa-eye-slash" : "fa-eye";
    },

    submitForm() {
      console.log(this.form);
      axios.post( API_URL + "api/login", this.form).then((res) => {
        if (res.data.success == true) {
          sessionStorage.setItem("authenticated", true);
          sessionStorage.setItem("access_token", res.data.data.access_token);
          sessionStorage.setItem("id", res.data.data.user.id);
          sessionStorage.setItem("username", res.data.data.user.username);
          sessionStorage.setItem("email", res.data.data.user.email);
          sessionStorage.setItem("nama_lengkap", res.data.data.user.nama_lengkap);
          sessionStorage.setItem("no_telp", res.data.data.user.no_telp);
          sessionStorage.setItem("roles_id", res.data.data.user.roles_id);
          localStorage.setItem("colorBg", "bg-primary");
          if(res.data.data.user.roles_id == 1){
            sessionStorage.setItem("roles_name", "Super Admin");
          } if(res.data.data.user.roles_id == 2){
            sessionStorage.setItem("roles_name", "Administrasi");
          }  if(res.data.data.user.roles_id == 3){
            sessionStorage.setItem("roles_name", "Laborat");
          }  if(res.data.data.user.roles_id == 4){
            sessionStorage.setItem("roles_name", "Poli");
          }  
          this.$router.push({ name: "dashboard" });
        }
        if (res.data.success == false) {
          this.messages = res.data.message;
        }
        console.log(res);
      });
    },
  },
};
</script>

<style></style>
