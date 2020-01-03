<template>
  <form @submit.prevent="submit">
    <div class="form-group">
      <textarea 
        v-model="body" 
        rows="10" 
        class="form-control"
        :class="{ 'is-invalid': errors[answerKey] }"
      ></textarea>

      <p 
        v-if="errors[answerKey]"
        v-text="errors[answerKey][0]"
        class="invalid-feedback"
      ></p>
    </div>
    
    <button class="btn btn-primary">Submit</button>
  </form>
</template>

<script>
import { mapGetters } from 'vuex'
import Toastify from 'toastify-js'

export default {
  props: {
    answerKey: {
      type: String,
      required: true
    },
    endpoint: {
      type: String,
      required: true
    },
    candidateId: {
      type: Number,
      required: true
    }
  },

  data () {
    return {
      body: ''
    }
  },

  computed: {
    ...mapGetters({
      errors: 'errors'
    })
  },

  methods: {
    async submit () {
      let response = await axios.post(`/cases/${this.endpoint}`, {
        body: this.body,
        key: this.answerKey
      })

      Toastify({
        text: "Answer saved successfully",
        duration: 3000,
        newWindow: true,
        gravity: "top",
        position: 'center',
        backgroundColor: "#28a745",
        stopOnFocus: true,
      }).showToast();
    },

    async fetch() {
      let { data } = await axios.get(`/api/answers/${this.candidateId}`)

      if (data[this.answerKey]) {
        this.body = data[this.answerKey]
      }
    }
  },

  mounted () {
    this.fetch()
  }
}
</script>