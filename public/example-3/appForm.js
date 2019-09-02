// create Form Component
export default {
  /**
   */
  name: 'AppForm',
  /**
   */
  template: `
      <div class="page">
        <form @submit="submit">
          <div class="form-group">
            <label for="name">Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              v-model="record.name"
              placeholder="ex.: John Doe"
            >
          </div>
          <button class="btn btn-info">
            Save
          </button>
          <button
            class="btn btn-default"
            type="button"
            @click="$router.go(-1)"
          >
            Back
          </button>
        </form>
      </div>`,
  data: () => ({
    record: {
      id: undefined,
      name: undefined
    }
  }),
  /**
   */
  methods: {
    /**
     */
    submit ($event) {
      $event.preventDefault()
      $event.stopPropagation()
      this.saveItem()
    },
    /**
     */
    saveItem () {
      const init = {
        method: 'POST',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(this.record)
      }
      fetch('api/', init)
        .then(this.successSaveItem)
        .catch(() => alert('Houston, we have a problem!'))
    },
    /**
     * @param response
     */
    successSaveItem (response) {
      response.json().then((record) => this.record = record)
      alert('Save successfully!')
    },
    /**
     * @param id
     */
    fetchItem (id) {
      const init = {
        method: 'GET',
        headers: {
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        }
      }
      fetch(`api?id=${id}`, init)
        .then(this.receiveItem)
        .catch(() => alert('Houston, we have a problem!'))
    },
    /**
     * @param response
     */
    receiveItem (response) {
      response.json().then((record) => this.record = record)
    }
  },
  /**
   */
  created () {
    if (!this.$route.params.id) {
      return
    }
    this.fetchItem(this.$route.params.id)
  }
}
