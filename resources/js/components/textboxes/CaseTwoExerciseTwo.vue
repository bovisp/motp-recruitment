<template>
  <form @submit.prevent="submit" class="mt-4">
    <div class="form-group">
      <textarea 
        v-model="caseTwoExerciseTwoTextarea" 
        rows="10" 
        class="form-control"
        :class="{ 'is-invalid': errors.case2ex2 }"
      ></textarea>

      <p 
        v-if="errors.case2ex2"
        v-text="errors.case2ex2[0]"
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
      caseTwoExerciseTwoTextarea: ''
    }
  },

  computed: {
    ...mapGetters({
      errors: 'errors'
    })
  },

  methods: {
    async submit () {
      let response = await axios.post('/cases/case-two/exercise-two', {
        case2ex2: this.caseTwoExerciseTwoTextarea
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
      let { data } = await axios.get('/cases/case-two/exercise-two/answer')

      if (data.case2ex2) {
        this.caseTwoExerciseTwoTextarea = data.case2ex2
      }
    }
  },

  mounted () {
    this.fetch()
  }
}
</script>