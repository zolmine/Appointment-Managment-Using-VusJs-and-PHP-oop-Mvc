<template>
<div class="bg-black">
  <div class="flex justify-between dash overflow-hidden ">
    <!-- card -->

    <div class="p-16 mt-7">
      <div class="flex flex-wrap gap-3">


<!--        </div>-->

        <div v-for="row in Appointments">
          {{ CheckAppointmentStatus(row.date) }}
          <div class="bg-white shadow-md  rounded-3xl p-4 w-max h-64 ">
            <div class="flex flex-col w-72 ">
              <div :class="Status ? 'bg-red-500' : 'bg-green-500'" class=" h-9 w-full mb-3 rounded-lg">
              </div>
              <div class="flex-auto ml-3 justify-evenly py-2">
                <div class="flex flex-wrap ">
                  <div class="w-full flex-none text-xs text-blue-700 font-medium ">
                    Day
                  </div>
                  <!--                  day goees here-->
                  <h2 class="flex-auto text-lg font-medium">{{ row.date }}</h2>
                </div>

                <div class="flex py-4  text-sm text-gray-600">
                  <!--time goes here-->
                  <div class="flex-1 inline-flex items-center">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <p class="">{{ row.start }} To {{ row.end }}</p>
                  </div>
                </div>
                <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                <div class="flex space-x-3 text-sm font-medium">
                  <div class="flex-auto flex space-x-3">
                    <button
                        @click="RemoveRdv(row.id)" :class="Status ? 'hidden' : 'show'"
                        class="mb-2 md:mb-0 bg-red-500 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-red-600"
                        type="button" aria-label="like">Delete
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>


    <!-- side info  -->

    <div class="relative bg-white bg-opacity-50">
      <div class="flex flex-col sm:flex-row sm:justify-around">
        <div class="w-72 h-screen">
          <nav class="mt-10 px-6 ">

            <div
                class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 text-gray-800 rounded-lg bg-gray-300 ">
              <div class="flex flex-row gap-4">
                <h2 class="font-medium">Full Name</h2>
                <h2>{{ FullName }}</h2>
              </div>
            </div>
            <div
                class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 text-gray-800 rounded-lg bg-gray-300 ">
              <div class="flex flex-row gap-4">
                <h2 class="font-medium">Cin</h2>
                <h2>{{ Cin }}</h2>
              </div>
            </div>
            <div
                class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 text-gray-800 rounded-lg bg-gray-300 ">
              <div class="flex flex-row gap-4">
                <h2 class="font-medium">Age</h2>
                <h2>{{ Age }}</h2>
              </div>
            </div>
            <div
                class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 text-gray-800 rounded-lg bg-gray-300 ">
              <div class="flex flex-row gap-4">
                <h2 class="font-medium">Profession</h2>
                <h2>{{ Profession }}</h2>
              </div>
            </div>
            <div
                class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 text-gray-800 rounded-lg bg-gray-300 ">
              <div class="flex flex-row gap-4 truncate ">
                <h2 class="font-medium">Token</h2>
                <h2>{{ Token }}</h2>
              </div>
            </div>

          </nav>
        </div>
      </div>

    </div>

  </div>
</div>
  <div>







  </div>
</template>

<script>
export default {
  name: "dash",
  mounted() {
    this.checkSession()
    this.displayData()
  },
  data() {
    return {
      FullName: '',
      Cin: '',
      Age: '',
      Profession: '',
      Token: '',
      Appointments: '',
      Status: '',
      StatusButton: ''
    }
  },
  methods: {

    displayData() {
      this.FullName = sessionStorage.getItem("name");
      this.Cin = sessionStorage.getItem("cin");
      this.Age = sessionStorage.getItem("age");
      this.Profession = sessionStorage.getItem("profession");
      this.Token = sessionStorage.getItem("token");

      fetch('http://localhost/Brief_06/Api/Appointment/get_appointment.php?token=' + this.Token, {
        method: 'get'
      })
          .then(res => res.json())
          .then(data => this.Appointments = data)


    },

    CheckAppointmentStatus(date) {

      var AppDay = date[date.length - 2] + date[date.length - 1]
      var Today = new Date().getDate();
      var Month = new Date().getMonth() + 1;
      var AppMonth = date[date.length - 5] + date[date.length - 4]

      // console.log(parseInt(AppDay),Today, Month,parseInt(AppMonth))
      if (Month >= parseInt(AppMonth) && Today > parseInt(AppDay)) {
        this.Status = true
      } else {
        this.Status = false
      }

    },
    RemoveRdv(id) {
      fetch('http://localhost/Brief_06/Api/Appointment/delete_appointment.php?id=' + id, {
        method: 'get'
      })
          .then(this.displayData)
    }
    ,
    checkSession() {
      if (!sessionStorage.getItem('token')) {
        this.$router.push('/login')
      }
    }
  }
}
</script>

<style scoped>

</style>