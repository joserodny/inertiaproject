require('./bootstrap');

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import mitt from 'mitt';

const emitter = mitt();


createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) })
      .use(plugin)
      app.config.globalProperties.emitter = emitter
      app.mount(el)
  },
});


InertiaProgress.init();
