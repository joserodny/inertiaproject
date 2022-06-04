<template>
 
    <div :class="{'dark': !isOpen}">
      <Nav />
        <!-- Section: Design Block -->
        <section class="bg-white dark:bg-black min-h-screen">
         
            <div class="px-6 py-12 md:px-12 text-gray-800 text-center lg:text-left ">
                <div class="container mx-auto xl:px-32">
                    <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                        <div class="mt-12 lg:mt-0">
                        <h3 class="text-1xl md:text-2xl dark:text-white">Hi! <span class="wave">👋</span></h3>
                            <h1 class="text-4xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12 dark:text-white">Rodny here!<br /><span class="md:text-3xl text-blue-600">I'm a Web Developer</span></h1>
                            <a class="inline-block px-7 py-3 mr-2 bg-blue-600  text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/about" role="button">project</a>
                         </div>
                        <div class="">
                            <lottie-player class="hidden md:block" src="https://assets7.lottiefiles.com/private_files/lf30_WdTEui.json"  background="transparent"  speed="1.5"  style="width: 100%; height: 100%;" hover loop  autoplay></lottie-player>
                            <lottie-player class="block md:hidden" src="https://assets2.lottiefiles.com/private_files/lf30_obidsi0t.json" mode="bounce" background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop  autoplay></lottie-player>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->
    </div>
</template>

<script>
import Nav from '../Components/Nav';

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
    components: { Nav }, 
};
</script>
