<template>
  <div class="d-flex w-100" id="case-two-exercise-one-image">
    <div class="d-flex flex-column mr-4">
      <button 
        class="btn btn-primary" 
        title="Save image"
        @click.prevent="saveImage"
      >
        <i class="fas fa-save"></i>
      </button>

      <button 
        type="button" 
        class="btn btn-outline-dark clearImage mt-4" 
        title="Clear image"
        @click.prevent="clearImage"
      >
        <i class="fas fa-trash"></i>
      </button>
    </div>

    <div style="width: 800px; height: 530px">
      <canvas id="warmFront" class="mb-4"></canvas>
    </div>
  </div>    
</template>

<script>
import Toastify from 'toastify-js'

export default {
  data () {
    return {
      options: {
        backgroundImage: 'https://res.cloudinary.com/tcddmedia/image/upload/v1579538082/moip_direct_entry_assessment/case%202/Exercise%201/OBS-reference_q6pygk.jpg',
        brushColor: '#FF2D00',
        brushSize: 4
      }
    }
  },

  methods: {
    async saveImage (e) {
      $("#warmFront").data("jqScribble").save(async (imageData) => {
        let { data } = await axios.post('/cases/case-two/image', { 
          imageData,
          key: 'image_url' 
        })

        Toastify({
          text: data.data,
          duration: 3000,
          newWindow: true,
          gravity: "top",
          position: 'center',
          backgroundColor: "#28a745",
          stopOnFocus: true,
        }).showToast();
      })
    },

    async  clearImage (e) {
      await $("#warmFront").data("jqScribble").clear()

      await $("#warmFront").data("jqScribble").update({
        backgroundImage: this.options.backgroundImage
      });

      Toastify({
        text: this.trans('components.draw.image-cleared'),
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
    $('#warmFront').jqScribble(this.options);
  }
}
</script>