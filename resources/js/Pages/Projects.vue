<template>
 
    <div :class="{'dark': !isOpen}">
      <Nav />
	
<div class="relative min-h-screen flex flex-col items-center justify-center dark:bg-black "> 
    <div class="grid mt-8  gap-9 grid-cols-1 md:grid-cols-2 xl:grid-cols-3  " >
        <div  v-for="item in projects" :key="item.title">
             <div class="flex flex-col w-96">
            <div class="bg-gray-300 shadow-md  rounded-3xl p-4">
                <div class="flex-none lg:flex">
                    <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                        <img :src="item.img"
                            alt="Just a flower" class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">
                    </div>
                    <div class="flex-auto ml-3 justify-evenly py-2">
                        <div class="flex flex-wrap ">
                            <div class="w-full flex-none text-xs text-blue-700 font-medium " >
                                {{ item.stack }}
                            </div>
                            <h2 class="flex-auto text-lg font-medium">{{ item.title }}</h2>
                        </div>
                        <p class="mt-3"></p>
                        <div class="flex py-4  text-sm text-gray-500">
                            <div class=" items-center">
                                
                                <p class="">{{ item.desc }}</p>
                            </div>

                        </div>
                        <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                        <div class="flex space-x-3 text-sm font-medium">
                           
                            <button
                                class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                                type="button" aria-label="like"><a :href="item.url" target="_blank">View Project</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>           
        </div>  
    </div>
</div>

    </div>
</template>

<script>
import Nav from '../Components/Nav';


export default {
    data() {
    return {
      isOpen: false,
      projects: [{
          img: 'https://raw.githubusercontent.com/joserodny/inertiaproject/072a39b9f2a3ec47f9039caac47ea1576445e56b/latestport.png',
          title: 'Latest Portfolio',
          desc: 'Just learning new things',
          url: 'https://github.com/joserodny/inertiaproject',
          stack: 'Laravel, Vue, Inertia, Tailwind',
         
      },
      {
          img: 'https://user-images.githubusercontent.com/41980624/149607521-60679f20-0b1a-4bf5-8a07-60d52b2f5d5c.png',
          title: 'EVACUATION MONITORING',
          desc: 'This system aims to solve the problem in getting the total numbers of evacuees.',
          url: 'https://github.com/joserodny/evacuationcenter',
          stack: 'Laravel, Mysql',  
      },
      {
          img: 'https://joserodnys.netlify.app/img/portfolio/cap1.png',
          title: 'OLD EVACUATION MONITORING',
          desc: 'Capstone Project /private repo',
          stack: 'Php, Html, Bootstrap, Javascript, Mysql',
         
      },
      {
          img: 'https://github.com/joserodny/landingpageflexbox/blob/master/landingpage.png?raw=true',
          title: 'Landing page flexbox',
          desc: 'To learn how to use the Flexbox layout system to create a responsive website',
          url: 'https://flexboxlandingpage.netlify.app/',
          stack: ' Html, Css flexbox',
          
      },
      {
          img: 'https://cdn2.hubspot.net/hubfs/4367560/Imported_Blog_Media/scrapy.png',
          title: 'Web scraping',
          desc: 'Web scraping is the process of using bots to extract content and data from a website',
          url: 'https://github.com/joserodny/scrapy',
          stack: 'Python, Scrapy',
         
      },
      {
          img: 'https://github.com/joserodny/winejouse/blob/main/winejouse.png?raw=true',
          title: 'Wine Jouse',
          desc: 'wine ecommerce store app',
          url: 'https://github.com/joserodny/winejouse',
          stack: 'Php, Mysql, Bootstrap',
         
      }, ]
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





