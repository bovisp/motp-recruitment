<template>
  <tr>
    <td>
      <a :href="`${baseUrl}/cases/case-one#case-one-answer`">
        Case One answer
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
      key: 'case1',
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