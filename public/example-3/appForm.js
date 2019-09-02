import { fetchRecord, saveRecord } from './services.js'

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
      saveRecord(this.record)
        .then((record) => {
          this.record = record
          alert('Save successfully!')
        })
        .catch(() => alert('Houston, we have a problem!'))
    },
    /**
     * @param id
     */
    fetchItem (id) {
      fetchRecord(id)
        .then((record) => this.record = record)
        .catch(() => alert('Houston, we have a problem!'))
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
