<template>



  <schedules/>
  <footers/>


</template>

<script>

import navbar from "@/components/nav";
import schedules from "@/components/schedule";
import footers from "@/components/footer";

export default {
  name: 'Schedule',
  components: {
    navbar ,
    schedules ,
    footers

  }
}
</script>
