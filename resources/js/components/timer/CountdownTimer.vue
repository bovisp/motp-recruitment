<template>
  <div>
    <div class="fixed-bottom bg-light py-3 border-top">
      <div class="container">
        <p class="mb-0 text-right">
          <strong>{{ trans('time_remaining.remaining') }}:</strong> 
          <span
            :class="{ 'text-danger': timeRemaining < 360 }"
          >{{ formattedTimeRemaining }}</span>
        </p>
      </div>
    </div>

    <div 
      class="modal fade" 
      id="timeRemainingModal" 
      tabindex="-1" 
      role="dialog" 
      aria-labelledby="timeRemainingModalLabel" 
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="timeRemainingModalLabel">
              {{ trans('time_remaining.modal-title') }}
            </h5>

            <button 
              type="button" 
              class="close" 
              data-dismiss="modal" 
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            {{ trans('time_remaining.modal-paragraph') }}
          </div>

          <div class="modal-footer">
            <button 
              class="btn btn-primary" 
              data-dismiss="modal"
            >{{ trans('generic.ok') }}</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import pluralize from 'pluralize'

export default {
  props: {
    baseUrl: {
      type: String,
      required: true
    }
  },

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
        return `${this.strPadLeft(minutes,'0',2)} ${pluralize(this.trans('time_remaining.minute'), minutes)}`
      }

      return `${hours} ${pluralize(this.trans('time_remaining.hour'), hours)} ${this.strPadLeft(minutes,'0',2)} ${pluralize(this.trans('time_remaining.minute'), minutes)}`
    }
  },

  mounted () {
    this.fetch()

    setInterval(async () => {
      await this.fetch()

      if (this.timeRemaining === 0) {
        window.location = `${this.baseUrl}/login`
      }

      if (this.timeRemaining <= 360 && this.timeRemaining >= 300) {
        $('#timeRemainingModal').modal('show')
      }
    }, 60000)
  }
}
</script>