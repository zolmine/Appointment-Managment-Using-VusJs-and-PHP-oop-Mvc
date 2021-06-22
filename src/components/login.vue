<template>

  <div class="flex flex-wrap w-full">
    <div class="w-1/2 shadow-2xl">
      <img class="hidden object-cover w-full h-screen md:block" src="../assets/9.jpg" alt=""/>
    </div>
    <div class="flex  flex-col w-full md:w-1/2">
      <div class="flex m-auto justify-center pt-12 md:justify-start md:pl-12 md:-mb-24">
        <a href="#" class="p-4 text-xl font-bold text-white bg-gray-900">
          Login Page
        </a>
      </div>
      <form @submit.prevent="getLoginData()" class="flex flex-col justify-center px-8 pt-8 my-auto md:justify-start md:pt-0 md:px-24 lg:px-32">

        <div class="flex flex-col pt-3 md:pt-8">

          <div class="flex relative ">
                        <span class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path></svg>
                        </span>
            <input v-model="Token" type="text" id="design-login-token" class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Enter Your Token"/>
          </div>

          <div class="flex flex-col pt-4 mb-12">
            <div class="flex relative ">
                            <span class=" inline-flex  items-center px-3 border-t bg-white border-l border-b  border-gray-300 text-gray-500 shadow-sm text-sm">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                            </span>
              <input v-model="Cin" type="text" id="design-login-cin" class=" flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" placeholder="Enter Your Cin"/>
            </div>
          </div>
          <button type="submit" class="w-full px-4 py-2 text-base font-semibold text-center text-white transition duration-200 ease-in bg-gray-900 shadow-md hover:text-black hover:bg-white focus:outline-none focus:ring-2">
                            <span class="w-full">
                                Submit
                            </span>
          </button>
        </div>
        <div class="pt-12 pb-12 text-center">
          <p>
            Don&#x27;t have an account?
            <router-link class="font-semibold underline" to="/register" > Register here.</router-link>


          </p>
        </div>
      </form>
    </div>

  </div>

</template>

<script>
export default {
  name: "login",
  data() {
    return {

      Token: '',
      Cin: '',
      Result:[]

    }
  },
  methods: {
    getLoginData(){
      fetch('http://localhost/Brief_06/Controllers/login_con.php?token=' + this.Token + '&cin=' + this.Cin,{
        method: 'get',
      })
          .then(res => res.json())
          .then(data => this.Result = data)
          .then( this.checkLoginData )

    },
    checkLoginData(){
      if (this.Result === 'error'){

      }else {
        this.Result.forEach(item => {
          sessionStorage.setItem("id",item.User_id);
          sessionStorage.setItem("name",item.User_fullname);
          sessionStorage.setItem("cin",item.User_cin);
          sessionStorage.setItem("age",item.User_age);
          sessionStorage.setItem("profession",item.User_profession);
          sessionStorage.setItem("token",item.User_token);

          this.$router.push('/Schedule')


        })
      }
    }
  }

}
</script>

<style scoped>

</style>