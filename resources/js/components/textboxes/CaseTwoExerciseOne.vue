<template>
  <form @submit.prevent="submit" class="mt-5">
    <div class="form-group">
      <textarea 
        v-model="caseTwoExerciseOneTextarea" 
        rows="10" 
        class="form-control"
        :class="{ 'is-invalid': errors.case2ex1 }"
      ></textarea>

      <p 
        v-if="errors.case2ex1"
        v-text="errors.case2ex1[0]"
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
      caseTwoExerciseOneTextarea: ''
    }
  },

  computed: {
    ...mapGetters({
      errors: 'errors'
    })
  },

  methods: {
    async submit () {
      let response = await axios.post('/cases/case-two/exercise-one', {
        case2ex1: this.caseTwoExerciseOneTextarea
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
      let { data } = await axios.get('/cases/case-two/exercise-one/answer')

      if (data.case2ex1) {
        this.caseTwoExerciseOneTextarea = data.case2ex1
      }
    }
  },

  mounted () {
    this.fetch()
  }
}
</script>