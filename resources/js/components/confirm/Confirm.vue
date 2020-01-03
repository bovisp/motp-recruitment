<template>
  <div>
    <p>[This should be modified probably. Let me know what you would like to say instead.] Please review your answers below. Any answers marked as incomplete must be completed and submitted before you finish the assessment. To go to a particular answer, just click on its link in the table below. Click on the "Finish assessment" button below when you are done.</p>

    <confirm-table 
      :base-url="baseUrl"
      :candidate-id="candidateId"
    />

    <button 
      class="btn btn-primary btn-block mt-4"
      data-toggle="modal" 
      data-target="#confirmModal"  
    >
      Finish assessment
    </button>

    <div 
      class="modal fade" 
      id="confirmModal" 
      tabindex="-1" 
      role="dialog" 
      aria-labelledby="confirmModalLabel" 
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="confirmModalLabel">
              Finish assessment
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
            Are you sure that you wish to finish the assessment? If you click the "Finish" button, you will be logged out and will no longer have access to your work.
          </div>

          <div class="modal-footer">
            <button 
              class="btn btn-secondary" 
              data-dismiss="modal"
            >Close</button>

            <button 
              class="btn btn-primary" 
              @click.prevent="submit"
            >Finish</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ConfirmTable from './ConfirmTable'
import { mapGetters } from 'vuex'
import Toastify from 'toastify-js'

export default {
  props: {
    baseUrl: {
      type: String,
      required: true
    },
    candidateId: {
      type: Number,
      required: true
    }
  },

  components: {
    ConfirmTable
  },

  computed: {
    ...mapGetters({
      errors: 'errors'
    })
  },

  methods: {
    async submit () {
      try {
        let { data } = await axios.post('/cases/submit-all')

        window.location = `${this.baseUrl}/login`
      } catch (e) {
        await $('#confirmModal').modal('hide')

        Toastify({
          text: this.errors.incomplete[0],
          duration: 7000,
          newWindow: true,
          gravity: "top",
          position: 'center',
          backgroundColor: "#dc3545",
          stopOnFocus: true,
        }).showToast();
      }
    }
  }
}
</script>