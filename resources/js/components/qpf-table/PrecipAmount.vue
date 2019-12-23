<template>
  <select @input="changeAmount" ref="precipAmount" class="form-control form-control-sm">
    <option value=""></option>

    <option 
      v-for="amount in amounts"
      :key="amount"
      :value="amount"
    >{{ amount }}</option>
  </select>
</template>

<script>
export default {
  props: {
    typeKey: {
      type: String,
      required: true
    }
  },

  data () {
    return {
      solidAmounts: [
        '0.1-0.5 cm',
        '0.5-1 cm',
        '1-2.5 cm',
        '2.5-5 cm',
        '5-7.5 cm',
        '7.5-10 cm',
        '10-15 cm',
        '15-20 cm',
        '20-25 cm'
      ],
      liquidAmounts: [
        '0.1-0.5 mm',
        '0.5-1 mm',
        '1-2.5 mm',
        '2.5-5 mm',
        '5-7.5 mm',
        '7.5-10 mm',
        '10-15 mm',
        '15-20 mm',
        '20-25 mm'
      ],
      amounts: []
    }
  },

  methods: {
    determineAmounts (value) {
      switch (value) {
        case 'Rain':
        case 'Freezing Rain':
        case 'Drizzle':
        case 'Freezing Drizzle':
        case 'Rain-Snow mix':
          this.amounts = this.liquidAmounts
          break;
        
        case 'Snow':
        case 'Ice Pellets':
        case 'Snow Grains':
          this.amounts = this.solidAmounts
          beak;

        default: 
          throw new Error('Not a valid precipitation type')
      }
    },

    changeAmount () {
      this.$emit('input', this.$refs.precipAmount.value)
    }
  },

  mounted () {
    window.events.$on('changeAmounts', ({key, value}) => {
      if (this.typeKey === key) {
        this.determineAmounts(value)
      }
    })
  }
}
</script>