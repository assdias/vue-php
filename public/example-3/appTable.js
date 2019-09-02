import { fetchRecords } from './services.js'

// create Table Component
export default {
  /**
   */
  name: 'AppTable',
  /**
   */
  template: `
    <div class="page">
      <table class="table">
        <tr>
          <th>id</th>
          <th>Name</th>
        </tr>
        <tr
          v-for="(record, index) in records"
          :key="index"
        >
          <td>
            <a
              href="javascript:void(0)"
              @click="openItem(record)"
            >
              {{ record.id }}
            </a>
          </td>
          <td>{{ record.name }}</td>
        </tr>
      </table>
      <button
        class="btn btn-info"
        @click="newItem"
      >
        New
      </button>
    </div>`,
  /**
   */
  data: () => ({
    records: []
  }),
  /**
   */
  methods: {
    /**
     */
    newItem () {
      this.$router.push('/new')
    },
    /**
     * @param record
     */
    openItem (record) {
      this.$router.push(`/${record.id}`)
    },
    /**
     */
    fetchItems () {
      fetchRecords()
        .then((records) => this.records = records)
        .catch(() => alert('Houston, we have a problem!'))
    }
  },
  /**
   */
  created () {
    this.fetchItems()
  }
}
