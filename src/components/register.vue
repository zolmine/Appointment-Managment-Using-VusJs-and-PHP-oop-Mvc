<template>

  <div class="flex flex-wrap w-full">
    <div class="w-1/2 shadow-2xl">
      <img class="hidden object-cover w-full h-screen md:block" src="../assets/9.jpg" alt=""/>
    </div>
    <div class="flex flex-col w-full md:w-1/2">
      <div  class=" m-auto flex justify-center pt-12 md:justify-start md:pl-12 md:-mb-24">
        <a href="#" class="p-4 text-xl font-bold text-white bg-gray-900">
          Register Page
        </a>
      </div>
      <form  @submit.prevent="sendData()" class="flex flex-col justify-center px-8 pt-8 my-auto md:justify-start md:pt-0 md:px-24 lg:px-32">

        <div class="flex flex-col pt-3 md:pt-8">
<!--          FullName-->
          <div class="flex flex-col pt-4">
            <div class="flex relative ">
                        <span class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path></svg>
                        </span>
              <input  v-model="Fullname" type="text" id="design-register-fullbame" class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Enter Your First and Last Name" required />
            </div>
          </div>
<!-- Cin -->
          <div class="flex flex-col pt-4">
            <div class="flex relative ">
                        <span class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"></path></svg>
                        </span>
              <input required v-model="Cin" type="text" id="design-register-cin" class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Enter Your Cin"/>
            </div>
          </div>
<!--      Age    -->
          <div class="flex flex-col pt-4">
            <div class="flex relative ">
                        <span class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </span>
              <input required v-model="Age" type="number" id="design-register-age" class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Enter Your Age"/>
            </div>
          </div>

<!--     Profession     -->
          <div class="flex flex-col pt-4">
            <div class="flex relative ">
                        <span class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </span>
              <input  required v-model="Profession" type="text" id="design-register-profession" class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Enter Your Profession"/>
            </div>
          </div><br>

          <button type="submit"  class="w-full px-4 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-gray-900 shadow-md hover:text-black hover:bg-white focus:outline-none focus:ring-2">

                                Submit

          </button>
        </div>
        <div class="pt-12 pb-12 text-center">
          <p>
            You have an account?
            <router-link class="font-semibold underline" to="/login" > Login here.</router-link>


          </p>
        </div>
      </form>
    </div>


    <!--  Success Modal-->
    <div @click="hideModel"
        :class=" showPopup ? 'block' : 'hidden'"
        class="
  w-full
  h-screen
        absolute
        bottom-auto
        overflow-hidden
        bg-black
        bg-opacity-80
        shadow-md
        dark:bg-gray-800
      "
    >
      <div  class="px-4 py-2 flex justify-center mt-80 text-white h-16 items-center gap-4 bg-indigo-200 bg-opacity-50 mx-auto w-10/12 rounded-md">
        <svg
            class="w-7 h-7 text-white fill-current text-green-500  "
            viewBox="0 0 40 40"
            xmlns="http://www.w3.org/2000/svg"
        >
          <path
              d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"
          />
        </svg>
        <h2>This is Your Token</h2>
        <div class="mx-3">
          <span class="font-semibold text-black bg-indigo-200 bg-opacity-40  rounded-md py-2 px-3"
          >{{Token}}</span>

        </div>
      </div>
    </div>
  </div>








</template>

<script>
export default {
  name: "register",
  data(){
    return{
      Fullname:'',
      Cin:'',
      Age:'',
      Profession:'',
      Token:'',
      showPopup: false,
    }
  },
  methods:{
    sendData(){
        fetch('http://localhost/Brief_06/Controllers/register_con.php?fullname=' + this.Fullname + '&cin=' + this.Cin + '&age=' + this.Age + '&profession=' + this.Profession , {
          method: 'get'
        })
      .then(res => res.json())
      .then(data => this.Token = data)
      this.showPopup = !this.showPopup

    },

    hideModel(){
      this.showPopup = !this.showPopup
      this.$router.push('/login')
    }


  }
}
</script>

<style >

</style>