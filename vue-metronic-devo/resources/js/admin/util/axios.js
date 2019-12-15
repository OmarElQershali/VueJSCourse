import axios from 'axios'
import router from '@/router'

const instance = axios.create({
    baseURL: window.config.base,
})

instance.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
instance.defaults.headers.common['X-CSRF-TOKEN'] = document.head.querySelector(
    'meta[name="csrf-token"]'
).content

instance.interceptors.response.use(
    response => response,
    error => {
        const { status } = error.response

        // Show the user a 500 error
        if (status >= 500) {
            Numero.$emit('error', error.response.data.message)
        }

        // Handle Session Timeouts
        if (status === 401) {
            window.location.href = Numero.config.base
        }

        // Handle Forbidden
        if (status === 403) {
            router.push({ name: '403' })
        }

        // Handle Token Timeouts
        if (status === 419) {
            Numero.$emit('token-expired')
        }

        return Promise.reject(error)
    }
)

export default instance
