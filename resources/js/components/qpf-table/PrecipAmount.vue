<template>
  <div>
    <select 
      @input="changeAmount" 
      ref="precipAmount" 
      class="form-control form-control-sm"
      :class="{ 'is-invalid': hasErrorForType }"
      v-model="precipAmount"
    >
      <option value=""></option>

      <option 
        v-for="amount in amounts"
        :key="amount"
        :value="amount"
      >{{ amount }}</option>
    </select>

    <p 
      v-if="hasErrorForType"
      v-text="hasErrorForType"
      class="invalid-feedback"
    ></p>
  </div>
</template>

<script>
import { mapGetters } from 'vuex'
import { replace, get } from 'lodash-es'

export default {
  props: {
    typeKey: {
      type: String,
      required: true
    },
    amountKey: {
      type: String,
      required: true
    },
    value: {}
  },

  computed: {
    ...mapGetters({
      errors: 'errors'
    }),

    precipAmount: {
      get () {
        return this.value
      },

      set (val) {
        this.changeAmount()
      }
    },

    hasErrorForType () {
      let key = replace(this.amountKey, /\./g, '')

      let messages = get(this.errors, key)

      if (!messages) {
        return false
      }

      return messages[0]
    }
  },

  data () {
    return {
      solidAmounts: [
        '0 cm',
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
        '0 mm',
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
        case 'rain':
        case 'freezing-rain':
        case 'drizzle':
        case 'freezing-drizzle':
        case 'rain-snow-mix':
        case 'virga':
          this.amounts = this.liquidAmounts
          break;
        
        case 'snow':
        case 'ice-pellets':
        case 'snow-grains':
          this.amounts = this.solidAmounts
          break;
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