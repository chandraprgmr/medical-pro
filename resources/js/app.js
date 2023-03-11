import './bootstrap';
import '../css/app.css';
import '../css/sb-admin-2.min.css';
import '../vendor/fontawesome-free/css/all.min.css';
import 'vue3-easy-data-table/dist/style.css';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import Vue3EasyDataTable from 'vue3-easy-data-table';

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin, axios)
      .component('EasyDataTable', Vue3EasyDataTable)
      .mount(el)
  },
})
