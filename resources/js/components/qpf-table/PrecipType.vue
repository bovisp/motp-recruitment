<template>
  <div>
    <select 
      @input="changeType" 
      ref="precipType" 
      class="form-control form-control-sm"
      :class="{ 'is-invalid': hasErrorForType }"
      v-model="precipType"
    >
      <option value=""></option>

      <option 
        v-for="type in types"
        :key="type.code"
        :value="type.code"
      >{{ type.name }}</option>
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
import { replace, get, split } from 'lodash-es'

export default {
  props: {
    objKey: {
      type: String,
      required: true
    },
    value: {}
  },

  watch: {
    precipType () {
      window.events.$emit('changeAmounts', {
        key: this.objKey,
        value: this.precipType 
      })
    }
  },

  computed: {
    ...mapGetters({
      errors: 'errors'
    }),

    precipType: {
      get () {
        return this.value
      },

      set (val) {
        this.changeType()
      }
    },

    hasErrorForType () {
      let key = replace(this.objKey, /\./g, '')

      let messages = get(this.errors, key)

      if (!messages) {
        return false
      }

      return messages[0]
    }
  },

  data () {
    return {
      types: [
        {code: 'rain', name: this.trans('components.qpf-table.rain')},
        {code: 'drizzle', name: this.trans('components.qpf-table.drizzle')},
        {code: 'snow', name: this.trans('components.qpf-table.snow')},
        {code: 'freezing-rain', name: this.trans('components.qpf-table.freezing-rain')},
        {code: 'freezing-drizzle', name: this.trans('components.qpf-table.freezing-drizzle')},
        {code: 'ice-pellets', name: this.trans('components.qpf-table.ice-pellets')},
        {code: 'snow-grains', name: this.trans('components.qpf-table.snow-grains')},
        {code: 'rain-snow-mix', name: this.trans('components.qpf-table.rain-snow-mix')},
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