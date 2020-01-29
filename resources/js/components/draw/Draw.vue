<template>
  <div>
    <div class="d-flex w-100" id="case-two-exercise-one-image" v-if="!imageUrl || redoImage">
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

        <button 
          type="button" 
          class="btn btn-danger mt-4" 
          title="Cancel re-draw"
          @click.prevent="cancelRedo"
          v-if="imageUrl"
        >
          <i class="fas fa-times"></i>
        </button>
      </div>

      <div style="width: 800px; height: 530px">
        <canvas id="warmFront" class="mb-4"></canvas>
      </div>
    </div>    

    <div class="d-flex w-100" v-else>
      <div class="d-flex flex-column mr-4">
        <button 
          class="btn btn-primary" 
          title="Redo drawing"
          @click.prevent="redo"
        >
          <i class="fas fa-redo"></i>
        </button>
      </div>

      <div style="width: 800px; height: 530px">
        <img :src="imageUrl">
      </div>
    </div>
  </div>
</template>

<script>
import Toastify from 'toastify-js'

export default {
  props: {
    baseUrl: {
      type: String,
      required: true
    }
  },

  data () {
    return {
      options: {
        backgroundImage: 'https://res.cloudinary.com/tcddmedia/image/upload/v1579538082/moip_direct_entry_assessment/case%202/Exercise%201/OBS-reference_q6pygk.jpg',
        brushColor: '#FF2D00',
        brushSize: 4
      },
      imageUrl: '',
      redoImage: false
    }
  },

  methods: {
    async saveImage (e) {
      $("#warmFront").data("jqScribble").save(async (imageData) => {
        let { data } = await axios.post('/cases/case-two/image', { 
          imageData,
          key: 'image_url' 
        })

        this.redoImage = false

        await this.fetch()

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
    },

    async fetch () {
      let { data } = await axios.get('/cases/case-two/image')

      if (data) {
        this.imageUrl = `${this.baseUrl}/storage/images/${data}`
      }
    },

    redo () {
      this.redoImage = true

      setTimeout(() => {
        $('#warmFront').jqScribble(this.options)

        let canvasEl = document.getElementById('warmFront')

        if (canvasEl) {
          canvasEl.addEventListener('click', e => {
            $("#warmFront").data("jqScribble").save(async (imageData) => {
              let { data } = await axios.post('/cases/case-two/image', { 
                imageData,
                key: 'image_url' 
              })
            })
          })
        }
      }, 1000)
    },

    async cancelRedo () {
      await $('#warmFront').data('jqScribble').clear()

      this.redoImage = false
    }
  },

  async mounted () {
    await this.fetch()

    $('#warmFront').jqScribble(this.options)

    let canvasEl = document.getElementById('warmFront')

    if (canvasEl) {
      canvasEl.addEventListener('click', e => {
        console.log('clicked')
      })
    }
  }
}
</script>