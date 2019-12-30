<template>
  <div>
    <p>[This should be modified probably. Let me know what you would like to say instead.] Please review your answers below. Any answers marked as incomplete must be completed and submitted before you finish the assessment. To go to a particular answer, just click on its link in the table below. Click on the "Finish assessment" button below when you are done.</p>

    <confirm-table />

    <button class="btn btn-primary btn-block mt-4">
      Finish assessment
    </button>
  </div>
</template>

<script>
import ConfirmTable from './ConfirmTable'

export default {
  components: {
    ConfirmTable
  }
}
</script>