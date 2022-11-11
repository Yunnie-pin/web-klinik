<template>
  <div>
    <a
      class="text-blueGray-500 block"
      href="#pablo"
      v-on:click="toggleDropdown($event)"
      ref="btnDropdownRef"
    >
      <div class="items-center flex">
        <span
          class="w-12 h-12 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full"
        >
          <img
            alt="..."
            class="w-full rounded-full align-middle border-none shadow-lg"
            src="../assets/img/defaultpict.png"
          />
        </span>
      </div>
    </a>
    <div
      ref="popoverDropdownRef"
      class="bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
      v-bind:class="{
        hidden: !dropdownPopoverShow,
        block: dropdownPopoverShow
      }"
      style="min-width: 12rem"
    >
    
      <a
      
        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
      >      <router-link :to="{ name: 'profile' }">Profile</router-link>
       
      </a>


      <div class="h-0 my-2 border border-solid border-blueGray-100" />
      <a
      @click="logout"
        href="#pablo"
        class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700"
      >
        Logout
      </a>
    </div>
  </div>
</template>
<script>
import { createPopper } from "@popperjs/core";
import { useRouter } from 'vue-router';

export default {
  data() {
    return {
      dropdownPopoverShow: false
    };
    
  },
  setup(){
      const router = useRouter();

      const logout = () => {
        localStorage.setItem("authenticated",false);
        localStorage.removeItem("username");
        router.push({name : "login"});
      };

      return {logout}

    },
  methods: {
    toggleDropdown: function(event) {
      event.preventDefault();
      if (this.dropdownPopoverShow) {
        this.dropdownPopoverShow = false;
      } else {
        this.dropdownPopoverShow = true;
        createPopper(this.$refs.btnDropdownRef, this.$refs.popoverDropdownRef, {
          placement: "bottom-end"
        });
      }
    }
  }
};
</script>
