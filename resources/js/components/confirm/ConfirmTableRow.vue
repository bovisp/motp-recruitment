<template>
  <tr>
    <td>
      <a :href="`${baseUrl}/cases/${link}`">
        {{ linkText }}
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
    },
    link: {
      type: String,
      required: true
    },
    rowKey: {
      type: String,
      required: true
    },
    linkText: {
      type: String,
      required: true
    }
  },

  data () {
    return {
      answers: null
    }
  },

  computed: {
    getStatus () {
      if (!this.answers) return `<span class="text-danger"><i class="fas fa-times"></i> ${this.trans('components.confirmation.not-completed')}</span>`

      return this.answers[this.rowKey] ? 
        `<span class="text-success"><i class="fas fa-check"></i> ${this.trans('components.confirmation.completed')}</span>` :
        `<span class="text-danger"><i class="fas fa-times"></i> ${this.trans('components.confirmation.not-completed')}</span>`
    }
  },

  mounted () {
    window.events.$on('answers', answers => {
      this.answers = answers
    })
  }
}
</script>