<template>

  <!-- nav-bar -->
  <nav class=" w-full 0  items-center lg:px-36  bar ">


    <div class="w-full justify-between flex items-center md:text-center px-3 h-5 md:h-10 navv ">

      <div class="hidden md:block ">
        <div class="ml-10 flex items-baseline space-x-4">
          <router-link to="/" class="text-white  hover:text-gray-800 px-3 py-2 rounded-md text-[1.20rem] font-medium cursor-pointer "> Home</router-link>
          <router-link to="/login" class="text-white  hover:text-gray-800 px-3 py-2 rounded-md text-[1.20rem] font-medium cursor-pointer"> Login</router-link>
          <router-link to="/schedule" class="text-white  hover:text-gray-800 px-3 py-2 rounded-md text-[1.20rem] font-medium cursor-pointer"> Reserve</router-link>
          <router-link to="/dashboard" class="text-white  hover:text-gray-800 px-3 py-2 rounded-md text-[1.2white font-medium cursor-pointer"> My Schedules</router-link>
        </div>
      </div>
    </div>


    <div class="md:hidden">

      <div class="ml-10 flex items-center space-x-4 justify-center ">
        <router-link to="/" class="text-black  hover:text-gray-800  px-3 py-2 rounded-md text-sm font-medium"> Home</router-link>
        <router-link to="/login" class="text-black  hover:text-gray-800  px-3 py-2 rounded-md text-sm font-medium"> Login</router-link>
        <router-link to="/schedule" class="text-black  hover:text-gray-800  px-3 py-2 rounded-md text-sm font-medium"> Reserve</router-link>
        <router-link to="/dashboard" class="text-black  hover:text-gray-800  px-3 py-2 rounded-md text-sm font-medium"> My Schedules</router-link>
      </div>
    </div>
  </nav>




</template>

<script>
export default {
  name: "nav"
}
</script>

<style scoped>

</style>