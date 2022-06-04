<template>
 
    <div :class="{'dark': !isOpen}">
      <Nav />
        <!-- Section: Design Block -->
        <section class="bg-white dark:bg-black min-h-screen">
         
            <div class="px-6 py-12 md:px-12 text-gray-800 text-center lg:text-left dark:bg-tb">
                <div class="container mx-auto xl:px-32">
                    <div class="grid lg:grid-cols-2 gap-12 flex items-center">
                        <div class="mt-12 lg:mt-0">
                            <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12 dark:text-white">USER<br /><span class="text-blue-600">for your business</span></h1>
                            <a class="inline-block px-7 py-3 mr-2 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Get started</a>
                            <a class="inline-block px-7 py-3 bg-transparent text-blue-600 font-medium text-sm leading-snug uppercase rounded hover:text-blue-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none focus:ring-0 active:bg-gray-200 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#!" role="button">Learn more</a>
                        </div>
                        <div class="mb-12 lg:mb-0">
                            <img
                                src="https://mdbootstrap.com/img/new/ecommerce/vertical/028.jpg"
                                class="w-full rounded-lg shadow-lg"
                                alt=""
                            />
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
