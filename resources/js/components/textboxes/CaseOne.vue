<template>
  <form @submit.prevent="submit">
    <div class="form-group">
      <textarea 
        v-model="caseonetextarea" 
        rows="10" 
        class="form-control"
        :class="{ 'is-invalid': errors.case1 }"
      ></textarea>

      <p 
        v-if="errors.case1"
        v-text="errors.case1[0]"
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
  data () {
    return {
      caseonetextarea: ''
    }
  },

  computed: {
    ...mapGetters({
      errors: 'errors'
    })
  },

  methods: {
    async submit () {
      let response = await axios.post('/cases/case-one', {
        case1: this.caseonetextarea
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
      let { data } = await axios.get('/cases/case-one/answer')

      if (data.case1) {
        this.caseonetextarea = data.case1
      }
    }
  },

  mounted () {
    this.fetch()
  }
}
</script>