import axios from 'axios';

export default {
    request(method, url, data, successCb = null, errorCb = null) {
        axios.request({
            url,
            data,
            method: method.toLowerCase()
        })
            .then(successCb)
            .catch(errorCb)
    },
    get (url, successCb = null, errorCb = null) {
        return this.request('get', url, {}, successCb, errorCb)
    },
    post (url, data, successCb = null, errorCb = null) {
        return this.request('post', url, data, successCb, errorCb)
    },
    put (url, data, successCb = null, errorCb = null) {
        return this.request('put', url, data, successCb, errorCb)
    },
    delete (url, data = {}, successCb = null, errorCb = null) {
        return this.request('delete', url, data, successCb, errorCb)
    },
    /**
     * Init the service.
     */
    init() {
        axios.defaults.baseURL = '/api/v1'
        axios.interceptors.request.use(config => {
            config.headers['Authorization']    = `Bearer ${localStorage.getItem('jwt-token')}`;
            config.headers['X-CSRF-TOKEN']     = window.Laravel.csrfToken;
            config.headers['X-Requested-With'] = 'XMLHttpRequest';
            return config
        })

        axios.interceptors.response.use(response => {
            const token = response.headers['Authorization'] || response.data['token'];
            // console.log(response.headers['Authorization']);
            // console.log(response.data['token']);
            if(token) {
                localStorage.setItem('jwt-token', token);
            }
            return response;
        }, error => {
            console.log(error);
            return Promise.reject(error);
        })
    }
};
