import { createInertiaApp } from '@inertiajs/inertia-vue'
import Vue from 'vue'
import Buefy from 'buefy'
import 'buefy/dist/buefy.css'

createInertiaApp({
  resolve: name => require(`./Pages/${name}`),
  setup({ el, App, props, plugin }) {
    Vue.use(plugin)

    Vue.use(Buefy);
    new Vue({
      render: h => h(App, props),
    }).$mount(el)
  },
})