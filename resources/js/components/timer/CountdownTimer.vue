<template>
  <div class="fixed-bottom bg-light py-3 border-top">
    <div class="container">
      <p class="mb-0 text-right">
        <strong>Time remaining:</strong> 
        {{ formattedTimeRemaining }}
      </p>
    </div>
  </div>
</template>

<script>
import pluralize from 'pluralize'

export default {
  data () {
    return {
      timeRemaining: 0
    }
  },

  methods: {
    async fetch () {
      let { data } = await axios.get('/countdown')

      this.timeRemaining = parseInt(data)
    },

    strPadLeft (string, pad, length) {
      return (new Array(length+1).join(pad)+string).slice(-length)
    }
  },
  
  computed: {
    formattedTimeRemaining () {
      let hours = Math.floor(this.timeRemaining / 3600)

      let minutes = Math.floor(this.timeRemaining / 60) - (hours * 60)

      if (hours === 0) {
        return `${this.strPadLeft(minutes,'0',2)} ${pluralize('minute')}`
      }

      return `${hours} ${pluralize('hour')} ${this.strPadLeft(minutes,'0',2)} ${pluralize('minute')}`
    }
  },

  mounted () {
    this.fetch()
  }
}
</script>