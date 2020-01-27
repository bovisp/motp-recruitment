import axios from 'axios'
import store from '../store'

axios.interceptors.response.use(
	response => response,
	error => {
		if (error.response.status === 422) {
      store.dispatch('setErrors', {
        errors: error.response.data.errors,
        configData: error.response.config.data
      })
      
      console.log(error.response)
		}

		return Promise.reject(error)
	}
)

axios.interceptors.request.use(
	config =>  {
    store.dispatch('clearErrors')

		return config
	}, 

	error =>  {
		return Promise.reject(error)
	}
);