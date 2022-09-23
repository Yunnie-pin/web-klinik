<template class="bg-primary">
  <div class="bg-primary">

<div class="grid md:grid-cols-2 md:h-screen">
  <img src="../assets/img/hero.png" alt="heropict" class="w-screen h-fit maxmd:hidden">


  <div class="w-full m-auto">
    <img src="../assets/img/Logo.png" alt="logo" class="mx-auto py-4 ">
    <h1 class="font-semibold font-sans text-2xl text-white text-center py-2">
      Laborat Klinik Sistem
    </h1>


    <form id="login" class="p-6 md:px-24">
      <div class="text-light pb-2 font-bold text-white">Username</div>
      <div>
        <input type="text"
          class="border-2 border-white w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm"
          placeholder="Username" aria-label="Email" id="username">
      </div>

      <div class="text-light pb-2 font-bold text-white">Password</div>
      <div class="border-2 border-white w-full px-2 py-2 self-center rounded-lg bg-[#DBDBDB] drop-shadow-sm">
        <input :type="passwordFieldType" v-model="password" class="bg-[#DBDBDB] w-11/12 border-0" placeholder="Password" aria-label="Password"
          id="password">
        <i class="far self-end border-0 bg-[#DBDBDB]" :class="iconType" type="password" @click="switchVisibility"></i>
      </div>

      <div style="text-align:center!important">
        <router-link :to="{ name: 'dashboard' }">        <button type="submit"
          class="w-44 py-3 mt-4 self-center font-sans font-bold bg-[#374151] rounded-lg text-xs text-white text-center border-2 border-white">
          Login</button></router-link>

      </div>

      
    </form>
  </div>

</div>


</div>
</template>

<script>
export default {
    name: "login-page",
    data(){
      return {
        password: "",
        passwordFieldType: "password",
        iconType : "fa-eye"
      };
    },
    methods: {
      switchVisibility(){
        this.passwordFieldType = this.passwordFieldType === "password" ? "text" : "password";
        this.iconType = this.iconType === "fa-eye" ? "fa-eye-slash" : "fa-eye";
      }
    }
};

</script>

<style>

</style>