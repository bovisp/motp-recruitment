<template>
  <select @input="changeType" ref="precipType" class="form-control form-control-sm">
    <option value=""></option>

    <option 
      v-for="type in types"
      :key="type"
      :value="type"
    >{{ type }}</option>
  </select>
</template>

<script>
export default {
  props: {
    objKey: {
      type: String,
      required: true
    }
  },

  data () {
    return {
      types: [
        'Rain',
        'Drizzle',
        'Snow',
        'Freezing Rain',
        'Freezing Drizzle',
        'Ice Pellets',
        'Snow Grains',
        'Rain-Snow mix'
      ]
    }
  },

  methods: {
    changeType () {
      this.$emit('input', this.$refs.precipType.value)

      window.events.$emit('changeAmounts', {
        key: this.objKey,
        value: this.$refs.precipType.value 
      })
    }
  }
}
</script>