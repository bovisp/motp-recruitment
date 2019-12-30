<template>
  <table class="table">
    <thead>
      <tr>
        <th>Response</th>
        <th>Status</th>
      </tr>
    </thead>

    <tbody>
      <case-one-answer />
      <case-two-exercise-one-answer />
      <case-two-exercise-two-answer />
    </tbody>
  </table>
</template>

<script>
import CaseOneAnswer from './table-rows/CaseOneAnswer'
import CaseTwoExerciseOneAnswer from './table-rows/CaseTwoExerciseOneAnswer'
import CaseTwoExerciseTwoAnswer from './table-rows/CaseTwoExerciseTwoAnswer'

export default {
  components: {
    CaseOneAnswer,
    CaseTwoExerciseOneAnswer,
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