import Axios from "axios"

export const setErrors = ({ commit }, payload) => commit('setErrors', payload)

export const clearErrors = ({ commit }) => commit('clearErrors')