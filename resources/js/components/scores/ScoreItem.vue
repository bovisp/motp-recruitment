<template>
  <form class="mt-4" @submit.prevent="submit">
    <div class="form-group">
      <textarea 
        v-model="comment" 
        rows="10" 
        class="form-control"
        :class="{ 'is-invalid': hasError }"
      ></textarea>

      <p 
        v-if="hasError"
        v-text="errors.marks[this.type]"
        class="invalid-feedback"
      ></p>
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
      type: Object,
      required: true
    },
    type: {
      type: String,
      required: true
    },
    scores: {
      type: Array,
      required: true
    }
  },

  data () {
    return {
      marks: {}
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
    this.marks = marks ? marks : {}
    this.marks.type = this.type
  }
}
</script>