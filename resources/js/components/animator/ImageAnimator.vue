<template>
  <div 
    class="p-2"
    :class="{ 'border rounded': standalone }"
  >
    <p class="mb-3 text-center">
      <strong>{{ image.time }}</strong>
    </p>

    <img 
      :src="image.image" 
      class="d-block mr-auto ml-auto"
      :class="{ 'img-fluid': fluid }"
    >

    <controls 
      @start="start"
      @backward="backward"
      @forward="forward"
      @end="end"
      @playpause="playpause"
    />
  </div>
</template>

<script>
import Controls from './Controls'
import { orderBy } from 'lodash-es'

export default {
  props: {
    file: {
      type: String,
      required: true
    },
    standalone: {
      type: Boolean,
      required: false,
      default: false
    },
    fluid: {
      type: Boolean,
      required: false,
      default: false
    }
  },

  components: {
    Controls
  },

  data () {
    return {
      data: [],
      image: {},
      handle: 0
    }
  },

  methods: {
    start () {
      this.clearIntervalHandle()

      this.image = this.data[0]
    },

    end () {
      this.clearIntervalHandle()
      
      this.image = this.data[this.data.length - 1]
    },

    backward () {
      this.clearIntervalHandle()

      this.switchImage('backward')
    },

    forward () {
      this.clearIntervalHandle()

      this.switchImage()
    },

    playpause ({state}) {
      if (state === 'fa-pause') {
        this.handle = setInterval(() => {
          this.switchImage()
        }, 500)

        return
      }
      
      this.clearIntervalHandle()
    },

    switchImage (direction = 'forward') {
      if (direction === 'forward' && this.image.order === this.data.length - 1) {
        this.image = this.data[0]

        return
      }

      if (direction === 'backward' && this.image.order === 0) {
        this.image = this.data[this.data.length - 1]

        return
      }

      if (direction === 'backward') {
        this.image = this.data[this.image.order - 1]

        return
      }

      this.image = this.data[this.image.order + 1]
    },

    clearIntervalHandle () {
      clearInterval(this.handle)
      
      this.handle = 0
    },

    async fetch () {
      let { data } = await axios.get(`/data/animations/${this.file}`)

      this.data = await orderBy(data, ['order'], ['asc'])

      this.image = this.data[0]
    }
  },

  mounted () {
    this.fetch()
  }
}
</script>