<template>
  <form class="mt-4" @submit.prevent="submit">
    <div class="row">
      <div class="col-md-3">
        <div class="form-group">
          <label :for="`score-${type}`" class="font-weight-bolder">
            {{ trans('answers.score-maximum') }} {{ maxPoints }} {{ trans('answers.score-points') }}
          </label>

          <input 
            v-model="score" 
            :id="`score-${type}`"
            class="form-control"
            :class="{ 'is-invalid': hasError }"
          > 

          <p 
            v-if="hasError"
            v-text="errors.marks[this.type]"
            class="invalid-feedback"
          ></p>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label :for="`comments-${type}`" class="font-weight-bolder">
        {{ trans('answers.evaluation-comments') }}
      </label>

      <textarea 
        :id="`comments-${type}`"
        v-model="comment" 
        rows="10" 
        class="form-control"
      ></textarea>
    </div>

    <button class="btn btn-sm btn-primary">
      {{ trans('generic.submit') }}
    </button>
  </form>
</template>

<script>
import { mapGetters } from 'vuex'
import { get, find, filter } from 'lodash-es'
import Toastify from 'toastify-js'

export default {
  props: {
    candidate: {
      type: Object,
      required: true
    },
    answers: {
      required: true
    },
    type: {
      type: String,
      required: true
    },
    scores: {
      type: Array,
      required: true
    },
    maxScores: {
      type: Array,
      required: true
    }
  },

  data () {
    return {
      marks: {},
      maxPoints: 0
    }
  },

  computed: {
    ...mapGetters({
      errors: 'errors'
    }),

    hasError () {
      return filter(this.errors, error => {
        return get(error, this.type)
      }).length
    },

    comment: {
      get () {
        return this.marks.comment ? this.marks.comment : ''
      },

      set (value) {
        this.marks.comment = value
      }
    },

    score: {
      get () {
        return this.marks.score ? this.marks.score : ''
      },

      set (value) {
        this.marks.score = value
      }
    },

    hasErrorForType () {
      let messages = get(this.errors, this.type)

      if (!messages) {
        return false
      }

      return messages[0]
    }
  },

  methods: {
    async submit () {
      let { data } = await axios.post(`/scores/${this.candidate.id}`, {
        type: this.type,
        marks: this.marks
      })

      this.marks = data.score

      Toastify({
        text: data.message,
        duration: 3000,
        newWindow: true,
        gravity: "top",
        position: 'center',
        backgroundColor: "#28a745",
        stopOnFocus: true,
      }).showToast();
    }
  },

  mounted () {
    let marks = find(this.scores, ['type', this.type])
    let maxPoints = find(this.maxScores, ['name', this.type])['score']
    this.marks = marks ? marks : {}
    this.maxPoints = maxPoints ? maxPoints : 0
    this.marks.type = this.type
  }
}
</script>