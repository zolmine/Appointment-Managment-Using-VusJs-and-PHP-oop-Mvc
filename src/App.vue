<template>

    <router-link to="/">Home</router-link>
  
  <router-view/>
</template>
<script>
import reserve from "@/components/reserve.vue";
// import Datepicker from "@/components/Datepicker";



export default {
  components: {
    // Datepicker,
    reserve

  }
}

</script>
<style>

</style>
