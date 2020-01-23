import Axios from "axios"

export const setErrors = ({ commit }, payload) => {
  commit('setErrors', payload.errors)
  commit('setConfigData', JSON.parse(payload.configData))
}

export const clearErrors = ({ commit }) => {
  commit('clearErrors')
  commit('clearConfigData')
}