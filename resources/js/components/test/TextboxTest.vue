<template>
  <div class="mt-5">
    <form @submit.prevent="submit">
      <div class="form-group">
        <textarea 
          v-model="body" 
          rows="10" 
          class="form-control"
        ></textarea>
      </div>
      
      <button class="btn btn-primary btn-sm">Save</button>
    </form>
  </div>
</template>

<script>
import Toastify from 'toastify-js'
import { debounce } from 'lodash-es'

export default {
  data () {
    return {
      body: '',
      buttonClicked: false
    }
  },

  watch: {
    body: {
      handler: debounce(function () {
        this.submitData()
      }, 2000)
    }
  },

  methods: {
    submit () {
      this.buttonClicked = true

      this.submitData()
    },

    async submitData () {
      let { data } = await axios.post(`/test`, {
        body: this.body
      })

      if (this.buttonClicked) {
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

      this.buttonClicked = false
    },

    async fetch() {
      let { data } = await axios.get(`/test/data`)

      this.body = data
    }
  },

  mounted () {
    this.fetch()
  }
}
</script>