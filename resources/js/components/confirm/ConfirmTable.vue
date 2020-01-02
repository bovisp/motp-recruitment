<template>
  <table class="table">
    <thead>
      <tr>
        <th>Response</th>
        <th>Status</th>
      </tr>
    </thead>

    <tbody>
      <case-one-answer :base-url="baseUrl" />
      <case-two-exercise-one-answer :base-url="baseUrl" />
      <case-two-exercise-one-image :base-url="baseUrl" />
      <case-two-exercise-two-table :base-url="baseUrl" />
      <case-two-exercise-two-answer :base-url="baseUrl" />
    </tbody>
  </table>
</template>

<script>
import CaseOneAnswer from './table-rows/CaseOneAnswer'
import CaseTwoExerciseOneAnswer from './table-rows/CaseTwoExerciseOneAnswer'
import CaseTwoExerciseOneImage from './table-rows/CaseTwoExerciseOneImage'
import CaseTwoExerciseTwoTable from './table-rows/CaseTwoExerciseTwoTable'
import CaseTwoExerciseTwoAnswer from './table-rows/CaseTwoExerciseTwoAnswer'

export default {
  props: {
    baseUrl: {
      type: String,
      required: true
    }
  },

  components: {
    CaseOneAnswer,
    CaseTwoExerciseOneAnswer,
    CaseTwoExerciseOneImage,
    CaseTwoExerciseTwoTable,
    CaseTwoExerciseTwoAnswer
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