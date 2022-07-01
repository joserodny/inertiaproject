

<template>

    <div :class="{'dark': !isOpen}">
      <Nav />
       
        <!-- Section: Design Block -->
        
        <section class=" bg-white dark:bg-black min-h-screen ">
            <div class="px-6 py-12 md:px-12 text-gray-800 text-center lg:text-left  ">
                <div class="container mx-auto xl:px-32">
                    <div class="grid lg:grid-cols-2 gap-12 flex items-center">     
                        <div class=" mt-12 lg:mt-0">
                        <h3 class="text-1xl md:text-2xl dark:text-white">Hi! <span class="wave">👋</span></h3>
                            <h1 class="text-4xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12 dark:text-white">Rodny here!<br /><span class="md:text-3xl text-blue-600">I'm a Web Developer</span></h1>
                              <button class=" transform hover:-translate-y-3  duration-500 text-red-700 ">
                                     <Link class=" px-7 py-3 mr-2 bg-blue-600  text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/project" role="button">project</Link>
                              </button>
                           </div>
                         <div class="flex grid grid-rows-3 grid-flow-col gap-4 ">
                            <div class="row-span-3 ..."></div>
                            <div class="col-span-2 h-32  grid place-items-center h-screen">
                            <h1 class="text-2xl md:text-3xl xl:text-2xl font-bold tracking-tight mb-12 dark:text-white">TECHNOLOGY & TOOLS</h1> 
                             <div class="grid grid-cols-7 gap-4 mb-8 md:gap-8 sm:gap-8">
                            <div>
                              <button class="bg-orange-400 transform hover:-translate-y-3  border-2 w-12 h-12 rounded-full duration-500 text-white border-orange-500  hover:bg-orange-300 hover:text-white text-2xl">
                                <i class="fab fa-html5"></i>
                              </button>
                            </div>

                            <div>
                              <button class="bg-blue-600 transform hover:-translate-y-3  border-2 w-12 h-12 rounded-full duration-500 text-white border-sky-600  dark:border-stone-700 hover:bg-blue-300 dark:hover:bg-blue-300 dark:hover:text-white hover:text-white text-2xl">
                                <i class="fab fa-css3-alt"></i> 
                              </button>
                            </div>

                            <div>
                              <button class="bg-white transform hover:-translate-y-3  border-2 w-12 h-12 rounded-full duration-500 text-black border-black  dark:border-stone-700 hover:bg-black dark:hover:bg-gray-800 dark:hover:text-white hover:text-white text-2xl">
                                <i class="fab fa-github"></i>
                              </button>
                            </div>

                            <div>
                              <button class="bg-gray-600 transform hover:-translate-y-3  border-2 w-12 h-12 rounded-full duration-500 text-white border-black  dark:border-stone-700 hover:bg-black dark:hover:bg-gray-800 dark:hover:text-white hover:text-white text-2xl">
                                <i class="fab fa-php"></i>
                              </button>
                            </div>

                            <div>
                              <button class="bg-white transform hover:-translate-y-3  border-2 w-12 h-12 rounded-full duration-500 text-red-700 border-red-400  dark:border-red-400 hover:bg-black dark:hover:bg-gray-800 dark:hover:text-red-700 hover:text-red-700 text-2xl">
                                <i class="fab fa-laravel"></i>
                              </button>
                            </div>  

                            <div>
                              <button class="bg-white transform hover:-translate-y-3  border-2 w-12 h-12 rounded-full duration-500 text-black border-black  dark:border-stone-700 hover:bg-black dark:hover:bg-gray-800 dark:hover:text-white hover:text-white text-2xl">
                                <i class="fas fa-database"></i>
                              </button>
                            </div>

                             <div>
                              <button class="bg-yellow-400 text-white transform hover:-translate-y-3  border-2 w-12 h-12 rounded-full duration-500  border-yellow-300  dark:border-yellow-300 hover:bg-yellow-200 dark:hover:bg-yellow-500 dark:hover:text-white hover:text-white text-2xl">
                                <i class="fab fa-js-square"></i>
                              </button>
                            </div>          
                                
                              
                                
                          </div>
                            </div>
                            <div class="row-span-2 col-span-2 ..."> 
                            <lottie-player class="hidden md:block" src="https://assets7.lottiefiles.com/private_files/lf30_WdTEui.json"  background="transparent"  speed="1.5"  style="width: 100%; height: 100%;" hover loop  autoplay></lottie-player>
                            <lottie-player class="block md:hidden" src="https://assets2.lottiefiles.com/private_files/lf30_obidsi0t.json" mode="bounce" background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop  autoplay></lottie-player>
                           </div>
                      </div>
                     
                    </div>
                </div>
          
            </div>
           
        </section>
      
        <!-- Section: Design Block --> 
    </div>
    
</template>


<script >
import Nav from '../Components/Nav';
import { Link } from "@inertiajs/inertia-vue3";
export default {
    data() {
    return {
      isOpen: true,
    };
  },
  mounted() { 
    this.emitter.on("dark", isOpen => {
      this.isOpen = isOpen;
    });
  },
  watch: {
      isOpen: function() {
          localStorage.setItem('dark', JSON.stringify(this.isOpen));
      }
  },
  created() {
       this.isOpen = JSON.parse(localStorage.getItem('dark'));
  },
    components: { Nav,Link }, 
};
</script>

<style>
@import 'https://use.fontawesome.com/releases/v5.15.4/css/all.css';

</style>
