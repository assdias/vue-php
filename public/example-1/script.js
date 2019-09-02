document.addEventListener('DOMContentLoaded', function () {
  // noinspection JSUnresolvedFunction
  const form = new Vue({
    el: 'form',
    data: function () {
      return {
        password: {
          type: 'password'
        },
        post: {
          email: 'my@gmail.com',
          password: Math.ceil(Math.random() * 10000000),
          remember: true
        }
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
    }
  })
})