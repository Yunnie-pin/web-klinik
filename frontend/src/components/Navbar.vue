<template>
  <!-- Navbar -->
  <nav
    class="
      absolute
      top-0
      left-0
      w-full
      z-10
      bg-transparent
      md:flex-row md:flex-nowrap md:justify-start
      flex
      items-center
      p-4
    "
  >
    <div
      class="
        w-full
        mx-autp
        items-center
        flex
        justify-between
        md:flex-nowrap
        flex-wrap
        md:px-10
        px-4
      "
    >
      <!-- Brand -->
      <a
        class="
          text-white text-sm
          uppercase
          hidden
          lg:inline-block
          font-semibold
        "
        href="https://www.creative-tim.com/learning-lab/tailwind-starter-kit#/dashboard"
        >{{ $route.name }}</a
      >

      <ul class="flex-col md:flex-row list-none items-center hidden md:flex">
        <div class="pr-4">
          <h5 class="text-white uppercase font-bold text-xs">
            Hi! Windah Basudara
          </h5>
        </div>
        <user-dropdown-component></user-dropdown-component>
      </ul>
    </div>
  </nav>

  <!-- End Navbar -->
</template>
<script>
import UserDropdownComponent from "./UserDropdown.vue";
export default {
  components: {
    UserDropdownComponent,
  },
};
</script>
