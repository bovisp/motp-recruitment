<template>
  <table class="table">
    <thead>
      <tr>
        <th>Response</th>
        <th>Status</th>
      </tr>
    </thead>

    <tbody>
      <confirm-table-row 
        v-for="row in rows"
        :key="row.name"
        :base-url="baseUrl"
        :link="row.link"
        :row-key="row.key"
        :link-text="row.text"
      />
    </tbody>
  </table>
</template>

<script>
import ConfirmTableRow from './ConfirmTableRow'

export default {
  props: {
    baseUrl: {
      type: String,
      required: true
    }
  },

  data () {
    return {
      rows: [
        { 
          link: 'case-one#case-one-answer',
          key: 'case1',
          text: 'Case One answer' 
        },
        { 
          link: 'case-two#case-two-exercise-one-answer',
          key: 'case2ex1',
          text: 'Case Two Exercise One answer'
        },
        { 
          link: 'case-two#case-two-exercise-one-image',
          key: 'image_url',
          text: 'Case Two Exercise One image' 
        },
        { 
          link: 'case-two#case-two-exercise-two-answer',
          key: 'case2ex2',
          text: 'Case Two Exercise Two answer' 
        },
        { 
          link: 'case-two#case-two-exercise-two-table',
          key: 'naptt15',
          text: 'Case Two Exercise Two table' 
        }
      ]
    }
  },

  components: {
    ConfirmTableRow
  },

  methods: {
    async fetch () {
      let { data } = await axios.get('/cases/submit-all/answers')

      window.events.$emit('answers', data)
    }
  },

  mounted () {
    this.fetch()
  }
}
</script>