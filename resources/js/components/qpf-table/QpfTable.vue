<template>
  <div class="my-5" id="case-two-exercise-two-table">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">CYNA</th>
          <th scope="col">15Z</th>
          <th scope="col">18Z</th>
          <th scope="col">21Z</th>
          <th scope="col">00Z</th>
          <th scope="col">03Z</th>
          <th scope="col">06Z</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{ trans('components.qpf-table.precipitation-type') }}</th>
          <td><precip-type v-model="na.pt.t15" obj-key="na.pt.t15" /></td>
          <td><precip-type v-model="na.pt.t18" obj-key="na.pt.t18" /></td>
          <td><precip-type v-model="na.pt.t21" obj-key="na.pt.t21" /></td>
          <td><precip-type v-model="na.pt.t00" obj-key="na.pt.t00" /></td>
          <td><precip-type v-model="na.pt.t03" obj-key="na.pt.t03" /></td>
          <td><precip-type v-model="na.pt.t06" obj-key="na.pt.t06" /></td>
        </tr>
        <tr>
          <th scope="row">{{ trans('components.qpf-table.precipitation-amount') }}</th>
          <td><precip-amount type-key="na.pt.t15" amount-key ="na.pa.t15" v-model="na.pa.t15" /></td>
          <td><precip-amount type-key="na.pt.t18" amount-key ="na.pa.t18" v-model="na.pa.t18" /></td>
          <td><precip-amount type-key="na.pt.t21" amount-key ="na.pa.t21" v-model="na.pa.t21" /></td>
          <td><precip-amount type-key="na.pt.t00" amount-key ="na.pa.t00" v-model="na.pa.t00" /></td>
          <td><precip-amount type-key="na.pt.t03" amount-key ="na.pa.t03" v-model="na.pa.t03" /></td>
          <td><precip-amount type-key="na.pt.t06" amount-key ="na.pa.t06" v-model="na.pa.t06" /></td>
        </tr>
      </tbody>
    </table>

    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">CYDF</th>
          <th scope="col">15Z</th>
          <th scope="col">18Z</th>
          <th scope="col">21Z</th>
          <th scope="col">00Z</th>
          <th scope="col">03Z</th>
          <th scope="col">06Z</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">{{ trans('components.qpf-table.precipitation-type') }}</th>
          <td><precip-type v-model="df.pt.t15" obj-key="df.pt.t15" /></td>
          <td><precip-type v-model="df.pt.t18" obj-key="df.pt.t18" /></td>
          <td><precip-type v-model="df.pt.t21" obj-key="df.pt.t21" /></td>
          <td><precip-type v-model="df.pt.t00" obj-key="df.pt.t00" /></td>
          <td><precip-type v-model="df.pt.t03" obj-key="df.pt.t03" /></td>
          <td><precip-type v-model="df.pt.t06" obj-key="df.pt.t06" /></td>
        </tr>
        <tr>
          <th scope="row">{{ trans('components.qpf-table.precipitation-amount') }}</th>
          <td><precip-amount type-key="df.pt.t15" amount-key ="df.pa.t15" v-model="df.pa.t15" /></td>
          <td><precip-amount type-key="df.pt.t18" amount-key ="df.pa.t18" v-model="df.pa.t18" /></td>
          <td><precip-amount type-key="df.pt.t21" amount-key ="df.pa.t21" v-model="df.pa.t21" /></td>
          <td><precip-amount type-key="df.pt.t00" amount-key ="df.pa.t00" v-model="df.pa.t00" /></td>
          <td><precip-amount type-key="df.pt.t03" amount-key ="df.pa.t03" v-model="df.pa.t03" /></td>
          <td><precip-amount type-key="df.pt.t06" amount-key ="df.pa.t06" v-model="df.pa.t06" /></td>
        </tr>
      </tbody>
    </table>

    <button class="btn btn-primary d-block" @click.prevent="submit">
      {{ trans('generic.submit') }}
    </button>
  </div>
</template>

<script>
import PrecipType from './PrecipType'
import PrecipAmount from './PrecipAmount'
import Toastify from 'toastify-js'

export default {
  props: {
    candidateId: {
      type: Number,
      required: true
    }
  },

  components: {
    PrecipType,
    PrecipAmount
  },

  data () {
    return {
      df: {
        pt: {
          t15: '',
          t18: '',
          t21: '',
          t00: '',
          t03: '',
          t06: ''
        },
        pa: {
          t15: '',
          t18: '',
          t21: '',
          t00: '',
          t03: '',
          t06: ''
        }
      },
      na: {
        pt: {
          t15: '',
          t18: '',
          t21: '',
          t00: '',
          t03: '',
          t06: ''
        },
        pa: {
          t15: '',
          t18: '',
          t21: '',
          t00: '',
          t03: '',
          t06: ''
        }
      }
    }
  },

  methods: {
    async fetch () {
      let { data } = await axios.get(`/answers/${this.candidateId}/api`)

      if (data.naptt15) {
        this.na.pt.t15 = data.naptt15
        this.na.pt.t18 = data.naptt18
        this.na.pt.t21 = data.naptt21
        this.na.pt.t00 = data.naptt00
        this.na.pt.t03 = data.naptt03
        this.na.pt.t06 = data.naptt06
        this.na.pa.t15 = data.napat15
        this.na.pa.t18 = data.napat18
        this.na.pa.t21 = data.napat21
        this.na.pa.t00 = data.napat00
        this.na.pa.t03 = data.napat03
        this.na.pa.t06 = data.napat06
        this.df.pt.t15 = data.dfptt15
        this.df.pt.t18 = data.dfptt18
        this.df.pt.t21 = data.dfptt21
        this.df.pt.t00 = data.dfptt00
        this.df.pt.t03 = data.dfptt03
        this.df.pt.t06 = data.dfptt06
        this.df.pa.t15 = data.dfpat15
        this.df.pa.t18 = data.dfpat18
        this.df.pa.t21 = data.dfpat21
        this.df.pa.t00 = data.dfpat00
        this.df.pa.t03 = data.dfpat03
        this.df.pa.t06 = data.dfpat06
      }
    },

    async submit () {
      let tableData = this.prepare()

      let { data } = await axios.post('/cases/case-two/table', tableData)

      Toastify({
        text: data.data,
        duration: 3000,
        newWindow: true,
        gravity: "top",
        position: 'center',
        backgroundColor: "#28a745",
        stopOnFocus: true,
      }).showToast();
    },

    prepare () {
      return {
        naptt15: this.na.pt.t15,
        naptt18: this.na.pt.t18,
        naptt21: this.na.pt.t21,
        naptt00: this.na.pt.t00,
        naptt03: this.na.pt.t03,
        naptt06: this.na.pt.t06,
        napat15: this.na.pa.t15,
        napat18: this.na.pa.t18,
        napat21: this.na.pa.t21,
        napat00: this.na.pa.t00,
        napat03: this.na.pa.t03,
        napat06: this.na.pa.t06,
        dfptt15: this.df.pt.t15,
        dfptt18: this.df.pt.t18,
        dfptt21: this.df.pt.t21,
        dfptt00: this.df.pt.t00,
        dfptt03: this.df.pt.t03,
        dfptt06: this.df.pt.t06,
        dfpat15: this.df.pa.t15,
        dfpat18: this.df.pa.t18,
        dfpat21: this.df.pa.t21,
        dfpat00: this.df.pa.t00,
        dfpat03: this.df.pa.t03,
        dfpat06: this.df.pa.t06
      }
    }
  },

  mounted () {
    this.fetch()
  }
}
</script>