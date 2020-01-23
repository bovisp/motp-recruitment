<template>
  <div>
    <p>{{ trans('components.confirmation.header-text') }}</p>

    <confirm-table 
      :base-url="baseUrl"
      :candidate-id="candidateId"
    />

    <button 
      class="btn btn-primary btn-block mt-4"
      data-toggle="modal" 
      data-target="#confirmModal"  
    >
      {{ trans('components.confirmation.finish-button') }}
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
              {{ trans('components.confirmation.modal-title') }}
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
            {{ trans('components.confirmation.modal-message') }}
          </div>

          <div class="modal-footer">
            <button 
              class="btn btn-secondary" 
              data-dismiss="modal"
            >{{ trans('generic.close') }}</button>

            <button 
              class="btn btn-primary" 
              @click.prevent="submit"
            >{{ trans('generic.finish') }}</button>
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

        // window.location = `${this.baseUrl}/login`
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