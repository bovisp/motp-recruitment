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

      if (this.rowKey === 'naptt15') {
        return this.hasAllTableKeys ? 
          `<span class="text-success"><i class="fas fa-check"></i> ${this.trans('components.confirmation.completed')}</span>` : 
          `<span class="text-danger"><i class="fas fa-times"></i> ${this.trans('components.confirmation.not-completed')}</span>`
      }

      return this.answers[this.rowKey] ? 
        `<span class="text-success"><i class="fas fa-check"></i> ${this.trans('components.confirmation.completed')}</span>` :
        `<span class="text-danger"><i class="fas fa-times"></i> ${this.trans('components.confirmation.not-completed')}</span>`
    },

    hasAllTableKeys () {
      return this.answers.naptt15 && this.answers.naptt18 && this.answers.naptt21 && this.answers.naptt00 && this.answers.naptt03 && this.answers.naptt06 && 
      this.answers.napat15 && this.answers.napat18 && this.answers.napat21 && this.answers.napat00 && this.answers.napat03 && this.answers.napat06 && 
      this.answers.dfptt15 && this.answers.dfptt18 && this.answers.dfptt21 && this.answers.dfptt00 && this.answers.dfptt03 && this.answers.dfptt06 && 
      this.answers.dfpat15 && this.answers.dfpat18 && this.answers.dfpat21 && this.answers.dfpat00 && this.answers.dfpat03 && this.answers.dfpat06
    }
  },

  mounted () {
    window.events.$on('answers', answers => {
      this.answers = answers
    })
  }
}
</script>