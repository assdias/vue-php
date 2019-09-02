import AppTable from './appTable.js'
import AppForm from './appForm.js'

// load app
document.addEventListener('DOMContentLoaded', function () {
  // install Router
  Vue.use(VueRouter)

  // create Router
  const router = new VueRouter({
    routes: [
      {
        path: '/',
        component: AppTable
      },
      {
        path: '/new',
        component: AppForm
      },
      {
        path: '/:id',
        component: AppForm
      }
    ]
  })

  // create Vue
  new Vue({
    /**
     */
    el: '#app',
    /**
     */
    router
  })
})