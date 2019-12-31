<template>
  <tr>
    <td>
      <a :href="`${baseUrl}/cases/case-two#case-two-exercise-two-answer`">
        Case Two Exercise Two answer
      </a>
    </td>
    <td v-html="getStatus"></td>
  </tr>
</template>

<script>
export default {
  props: {
    baseUrl: {
      type: String,
      required: true
    }
  },

  data () {
    return {
      key: 'case2ex2',
      answers: null
    }
  },

  computed: {
    getStatus () {
      if (!this.answers) return `<span class="text-success"><i class="fas fa-check"></i> Completed</span>`

      return this.answers[this.key] ? 
        `<span class="text-success"><i class="fas fa-check"></i> Completed</span>` :
        `<span class="text-danger"><i class="fas fa-times"></i> Not completed</span>`
    }
  },

  mounted () {
    window.events.$on('answers', answers => {
      this.answers = answers
    })
  }
}
</script>