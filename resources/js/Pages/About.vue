<template>
 
    <div :class="{'dark': !isOpen} ">
      <Nav />
      <!-- component -->
     
      <div class="flex grid place-items-center h-screen dark:bg-black">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 w-5/6 h-96 ">
          <div>
           <h1 class="text-4xl font-bold leading-tight mb-5 capitalize">   <p class="text-4xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12 dark:text-white">Jose Rodny Sibugan</p>
               </h1>
                <p class="text-xl dark:text-white"> 
                An aspiring web developer and application developer.
                This website contains everything about my application creation and web development. 
                I am the person who loves to explore things especially when it comes to technology
                </p>

                <div class="py-5">
                    <a href="https://raw.githubusercontent.com/joserodny/portfolio/master/Jose%20Rodny%20S.%20Sibugan.pdf" class="text-white rounded-full py-2 px-5 text-lg font-semibold bg-purple-600 inline-block border border-purple-600 mr-3">RESUME</a>  
                </div>
          </div>
          
            <div class="grid place-items-center grid-cols-1 gap-6">
            <div class="grid grid-cols-2 gap-2 mb-8">
              <div>
                <button id="linkedin" class="bg-white transform hover:-translate-y-3  border-2 w-12 h-12 rounded-full duration-500 text-blue-500 border-blue-500  hover:bg-blue-500 hover:text-white text-2xl">
                    <a href="https://www.linkedin.com/in/joserodnysibugan/"><i class="fab fa-linkedin-in"></i></a>
                  </button>
              </div>

              <div>
                <button id="github" class="bg-white transform hover:-translate-y-3  border-2 w-12 h-12 rounded-full duration-500 text-black border-black hover:bg-black dark:hover:bg-gray-800 dark:hover:text-white hover:text-white text-2xl">
                  <a href="https://github.com/joserodny"><i class="fab fa-github"></i></a>
                  </button>
              </div>  
                  
                
                  
            </div>
            <div class="mt-6 pt-10">
             <lottie-player class=" mx-auto -mt-36 md:-mt-36" src="https://assets2.lottiefiles.com/packages/lf20_dyimsq5i.json"  background="transparent"  speed="1"  style="width: 50%; height: 50%;"  loop  autoplay></lottie-player>
            </div>
          </div>
          
        </div>
     
          
    
    
    </div>
    </div>
</template>

<script >
import Nav from '../Components/Nav';



export default {
    data() {
    return {
      isOpen: false
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
    components: { Nav }, 
};
</script>

<style>
@import 'https://use.fontawesome.com/releases/v5.15.4/css/all.css';
</style>



