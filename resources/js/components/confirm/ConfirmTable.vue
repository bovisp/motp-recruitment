<template>
  <table class="table">
    <thead>
      <tr>
        <th>{{ trans('components.confirmation.response') }}</th>
        <th>{{ trans('components.confirmation.status') }}</th>
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
    },
    candidateId: {
      type: Number,
      required: true
    }
  },

  data () {
    return {
      rows: [
        { 
          link: 'case-one#case-one-answer',
          key: 'case1',
          text: trans('components.confirmation.case-one-answer')
        },
        { 
          link: 'case-two#case-two-exercise-one-answer',
          key: 'case2ex1',
          text: trans('components.confirmation.case-two-exercise-one-answer')
        },
        { 
          link: 'case-two#case-two-exercise-one-image',
          key: 'image_url',
          text: trans('components.confirmation.case-two-exercise-one-image')
        },
        { 
          link: 'case-two#case-two-exercise-two-answer',
          key: 'case2ex2',
          text: trans('components.confirmation.case-two-exercise-two-answer')
        },
        { 
          link: 'case-two#case-two-exercise-two-table',
          key: 'naptt15',
          text: trans('components.confirmation.case-two-exercise-two-table')
        }
      ]
    }
  },

  components: {
    ConfirmTableRow
  },

  methods: {
    async fetch () {
      let { data } = await axios.get(`/answers/${this.candidateId}/api`)

      window.events.$emit('answers', data)
    }
  },

  mounted () {
    this.fetch()
  }
}
</script>