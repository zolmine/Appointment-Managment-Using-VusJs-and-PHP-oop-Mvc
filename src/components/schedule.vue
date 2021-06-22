<template>


  <!-- confirm modal  -->
  <div
      class="fixed z-10 inset-0 overflow-y-auto"
      :class="[show ? 'block' : 'hidden', hidee ? 'block' : 'hidden' , succ ? 'hidden' : 'block']"
  >

    <div
        class="
        flex
        items-end
        justify-center
        min-h-screen
        pt-4
        px-4
        pb-20
        text-center
        sm:block
        sm:p-0
      "
    >
      <!-- This element is to trick the browser into centering the modal contents. -->
      <span
          class="hidden sm:inline-block sm:align-middle sm:h-screen"
          aria-hidden="true"
      >&#8203;</span
      >
      <div
          class="
          inline-block
          align-bottom
          bg-white
          rounded-lg
          text-left
          overflow-hidden
          shadow-xl
          transform
          transition-all
          sm:my-8
          sm:align-middle
          sm:max-w-lg
          sm:w-full
        "
      >
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
            <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
              <h3 class="text-lg leading-6 font-medium text-gray-900">
                Confirm reservation
              </h3>
              <div class="mt-2">
                <p class="text-sm text-gray-500">
                  Are you sure you want to deactivate your account? All of your
                  data will be permanently removed. This action cannot be
                  undone.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
          <button
              @click="showSuccess();sendData();checkFetchedData()"
              type="button"
              class="
              w-full
              inline-flex
              justify-center
              rounded-md
              border border-transparent
              shadow-sm
              px-4
              py-2
              bg-green-500
              text-base
              font-medium
              text-white
              hover:bg-green-700
              focus:outline-none
              focus:ring-2 focus:ring-offset-2 focus:ring-green-500
              sm:ml-3
              sm:w-auto
              sm:text-sm
            "
          >
            Confirm
          </button>
          <button
              @click="hideConfirm()"
              type="button"
              class="
              mt-3
              w-full
              inline-flex
              justify-center
              rounded-md
              border border-gray-300
              shadow-sm
              px-4
              py-2
              bg-white
              text-base
              font-medium
              text-gray-700
              hover:bg-gray-50
              focus:outline-none
              focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500
              sm:mt-0
              sm:ml-3
              sm:w-auto
              sm:text-sm
            "
              ref="cancelButtonRef"
          >
            Back
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- success modal -->
  <div
      class="absolute top-0 m-auto w-full mt-5"
      :class="[hide ? 'hidden' : 'block']"
  >
    <div
        class="
        flex
        w-full
        max-w-sm
        mx-auto
        overflow-hidden
        bg-white
        rounded-lg
        shadow-md
        dark:bg-gray-800
      "
    >
      <div class="flex items-center justify-center w-12 bg-green-500">
        <svg
            class="w-6 h-6 text-white fill-current"
            viewBox="0 0 40 40"
            xmlns="http://www.w3.org/2000/svg"
        >
          <path
              d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"
          />
        </svg>
      </div>

      <div class="px-4 py-2 -mx-3">
        <div class="mx-3">
          <span class="font-semibold text-green-500 dark:text-green-400"
          >Success</span
          >
        </div>
      </div>
    </div>
  </div>

  <div class="bg-green-500 h-screen tt">
  <!-- table -->
  <div class="flex justify-center " >


  <div class="overflow-x-auto mt-36">
    <div class=" flex gap-3 bg-gray-400 p-5 rounded-md">
      <h5 class="font-benne">Pick a date</h5>
      <input v-model="today" ref="date_inp" type="date" @change="getDate();checkFetchedData()" id="date_inp" name="date" class="bg-opacity-5">
    </div>
    <div class="t ">
      <div class=" bg-white bg-opacity-50 shadow-md rounded my-6 rounded-md ">
        <table class="min-w-max w-full table-auto ">
          <thead>
          <tr
              class="
                  bg-gray-200
                  text-gray-900
                  uppercase
                  text-sm
                  leading-normal
                "
          >
            <th class="py-3 px-6 text-left">LAWYER</th>
            <th class="py-3 px-6 text-left">DATE</th>
            <th class="py-3 px-6 text-center">START TIME</th>
            <th class="py-3 px-6 text-center">END TIME</th>
            <th class="py-3 px-6 text-center">Actions</th>
          </tr>
          </thead>
          <tbody v-for="(row) in rows " :key="row.id"  class="text-gray-900 text-sm font-semibold ">
          <tr  class="border-b border-gray-200 hover:bg-gray-100">
            <!-- LAWYER -->
            <td class="py-3 px-6 text-left">
              <div class="flex items-center">

                <span class="font-medium">{{ row.name }}</span>
              </div>
            </td>
            <!-- Date -->
            <td class="py-3 px-6 text-left">
              <div class="flex items-center">
                <span>{{ today }}</span>
              </div>
            </td>
            <!-- start time -->
            <td class="py-3 px-6 text-center">
                  <span
                      class="
                      bg-green-200
                      text-green-600
                      py-1
                      px-3
                      rounded-full
                      text-xs
                    "
                  >{{ row.start }}</span
                  >
            </td>
            <!-- end time -->
            <td class="py-3 px-6 text-center">
                  <span
                      class="
                      bg-green-200
                      text-green-600
                      py-1
                      px-3
                      rounded-full
                      text-xs
                    "
                  >{{ row.end }}</span
                  >
            </td>
            <!-- action -->
            <td  class="py-3 px-6 text-center ">
              <div v-bind:id="`${row.id}`" class="flex item-center justify-center tesla">
                <div
                    class="

                        transform
                        hover:text-purple-500
                        hover:scale-110
                      "
                >
                  <svg
                      @click="showConfirm(row.id)"
                      class="w-6 h-6"
                      fill="none"
                      stroke="currentColor"
                      viewBox="0 0 24 24"
                      xmlns="http://www.w3.org/2000/svg"
                  >
                    <path

                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"

                    ></path>
                  </svg>
                  <span
                      class="
                      bg-red-200
                      text-red-600
                      py-1
                      px-3
                      rounded-full
                      text-xs
                    "
                  >Reserved</span
                  >
                </div>

              </div>
            </td>
          </tr >
          </tbody>
        </table>
      </div>
    </div>
  </div>
  </div>
  </div>
</template>

<script>


export default {
  name: "table",
  data() {
    return {
      show: false,
      hide: true,
      succ: false,
      hidee: true,
      rows: [],
      today: "",
      id: "" ,
      checkSchedules: '',
      Token: sessionStorage.getItem("token")


    };
  },
  mounted() {
    this.checkSession();
    fetch('http://localhost/Brief_06/Api/Appointment/get_schedule.php')
        .then(res => res.json())
        .then(data => this.rows = data)
        .catch(err => console.log(err.message()));

    this.date();
    this.checkFetchedData();

  },
  watch:{

  }
  ,
  methods: {
    showConfirm(id) {
      this.show = !this.show;
      this.id = id;

    },
    showSuccess() {
      this.hide = !this.hide;
      this.hidee = !this.hidee;
      setTimeout( () =>{
        this.hide = true;
        this.$router.push('/dashboard')
      },3000)

    },


    hideConfirm() {
      this.succ = !this.succ;
    },
    date() {

      let today = new Date()
      let year = today.getFullYear()
      let month = today.getMonth() + 1
      let day = today.getDate()

      if (day < 10) {
        day = '0' + day
      }
      if (month < 10) {
        month = '0' + month
      }

      this.today = year + "-" + month + "-" + day
      this.$refs.date_inp.setAttribute('min', this.today)
    },

    getDate() {
      this.today = this.$refs.date_inp.value;

    },
    sendData() {

      fetch('http://localhost/Brief_06/Controllers/insert.php?id=' + this.id + '&date=' + this.today + '&token=' + this.Token, {
        method: 'get',
      })
    },

    checkFetchedData() {
      fetch('http://localhost/Brief_06/Api/Appointment/check_shedule.php?date=' + this.today, {
        method: 'get'
      })
      .then(res => res.json())
      .then(data => this.checkSchedules = data)
      .then( this.checkId );

    },
    checkId(){
      var test1 = document.querySelectorAll('.tesla');


      test1.forEach(item => {
        item.querySelector('svg').style.display = "block"
        item.querySelector('span').style.display = "none"
      })

if (this.checkSchedules != 0){

  for (let i=0; i<= (this.checkSchedules.length - 1); i++){
    var test = document.querySelectorAll('.tesla');
    test.forEach(item => {
      if (parseInt(item.id) == parseInt(this.checkSchedules[i])){
        // console.log()
        item.querySelector('svg').style.display = "none"
        item.querySelector('span').style.display = "block"

      }
    })
  }
}else {

  test1.forEach(item => {
    item.querySelector('svg').style.display = "block"
    item.querySelector('span').style.display = "none"
  })
}
    console.log('yes')
    },
    checkSession(){
      console.log(sessionStorage.getItem('token'))
      if (!sessionStorage.getItem('token')){
        this.$router.push('/login')
      }
    }

  },
};


</script>

