document.addEventListener('DOMContentLoaded', function () {

  Vue.component('MyForm', {
    props: {
      value: {
        type: Object,
        default: () => ({})
      }
    },
    data: function () {
      return {
        password: {
          type: 'password'
        },
        post: {
          email: 'my@gmail.com',
          password: Math.ceil(Math.random() * 10000000),
          remember: true
        },
        remember: true
      }
    },
    methods: {
      changePasswordType () {
        let type = 'password'
        if (this.password.type === type) {
          type = 'text'
        }
        this.password.type = type
      }
    },
    watch: {
      value: {
        immediate: true,
        handler (value) {
          const { email, password, remember } = value
          this.post.email = email
          this.post.password = password
          this.post.remember = remember
        }
      }
    }
  })

  new Vue({
    el: '#app'
  })
})