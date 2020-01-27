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
        :key="type"
        :value="type"
      >{{ type }}</option>
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
    value: {
      type: String,
      required: true
    }
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
        this.trans('components.qpf-table.rain'),
        this.trans('components.qpf-table.drizzle'),
        this.trans('components.qpf-table.snow'),
        this.trans('components.qpf-table.freezing-rain'),
        this.trans('components.qpf-table.freezing-drizzle'),
        this.trans('components.qpf-table.ice-pellets'),
        this.trans('components.qpf-table.snow-grains'),
        this.trans('components.qpf-table.rain-snow-mix')
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