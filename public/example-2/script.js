document.addEventListener('DOMContentLoaded', function () {
  // create AppHeader
  Vue.component('app-header', {
    /**
     */
    template: '#app-header-template',
    /**
     */
    data: () => ({
      like: false
    }),
    /**
     */
    methods: {
      /**
       */
      toggleLikeApp () {
        this.like = !this.like
        this.$store.commit('doYouLikeThisApp', this.like)
      }
    }
  })

  // create AppFooter
  Vue.component('app-footer', {})

  Vue.use(Vuex)

  // create Vuex
  const store = new Vuex.Store({
    /**
     */
    state: {
      yes: false
    },
    /**
     */
    mutations: {
      doYouLikeThisApp (state, yes) {
        state.yes = yes
      }
    }
  })

  // create Vue
  new Vue({
    /**
     */
    el: '#page',
    /**
     */
    store,
    /**
     */
    computed: {
      /**
       * @return {boolean}
       */
      userLikesThisApp () {
        return this.$store.state.yes
      },
      /**
       * @return {Object}
       */
      prices () {
        if (this.$store.state.yes) {
          return { pro: 15, enterprise: 29 }
        }
        return { pro: 23, enterprise: 45 }
      }
    }
  })
})