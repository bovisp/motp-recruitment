<template>
  <div>
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
          <th scope="row">Precipitation Type</th>
          <td><precip-type v-model="na.pt.t15" objKey="na.pt.t15" /></td>
          <td><precip-type v-model="na.pt.t18" objKey="na.pt.t18" /></td>
          <td><precip-type v-model="na.pt.t21" objKey="na.pt.t21" /></td>
          <td><precip-type v-model="na.pt.t00" objKey="na.pt.t00" /></td>
          <td><precip-type v-model="na.pt.t03" objKey="na.pt.t03" /></td>
          <td><precip-type v-model="na.pt.t06" objKey="na.pt.t06" /></td>
        </tr>
        <tr>
          <th scope="row">Precipitation Amount</th>
          <td><precip-amount typeKey="na.pt.t15" v-model="na.pa.t15" /></td>
          <td><precip-amount typeKey="na.pt.t18" v-model="na.pa.t18" /></td>
          <td><precip-amount typeKey="na.pt.t21" v-model="na.pa.t21" /></td>
          <td><precip-amount typeKey="na.pt.t00" v-model="na.pa.t00" /></td>
          <td><precip-amount typeKey="na.pt.t03" v-model="na.pa.t03" /></td>
          <td><precip-amount typeKey="na.pt.t06" v-model="na.pa.t06" /></td>
        </tr>
      </tbody>
    </table>

    <table class="table">
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
          <th scope="row">Precipitation Type</th>
          <td><precip-type v-model="df.pt.t15" objKey="df.pt.t15" /></td>
          <td><precip-type v-model="df.pt.t18" objKey="df.pt.t18" /></td>
          <td><precip-type v-model="df.pt.t21" objKey="df.pt.t21" /></td>
          <td><precip-type v-model="df.pt.t00" objKey="df.pt.t00" /></td>
          <td><precip-type v-model="df.pt.t03" objKey="df.pt.t03" /></td>
          <td><precip-type v-model="df.pt.t06" objKey="df.pt.t06" /></td>
        </tr>
        <tr>
          <th scope="row">Precipitation Amount</th>
          <td><precip-amount typeKey="df.pt.t15" v-model="df.pa.t15" /></td>
          <td><precip-amount typeKey="df.pt.t18" v-model="df.pa.t18" /></td>
          <td><precip-amount typeKey="df.pt.t21" v-model="df.pa.t21" /></td>
          <td><precip-amount typeKey="df.pt.t00" v-model="df.pa.t00" /></td>
          <td><precip-amount typeKey="df.pt.t03" v-model="df.pa.t03" /></td>
          <td><precip-amount typeKey="df.pt.t06" v-model="df.pa.t06" /></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import PrecipType from './PrecipType'
import PrecipAmount from './PrecipAmount'

export default {
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
  }
}
</script>