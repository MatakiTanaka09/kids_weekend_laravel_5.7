import axios from 'axios';
import util from '../utils/util';

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
    get(url, successCb = null, errorCb = null) {
        return this.request(util.METHOD_GET, url, {}, successCb, errorCb)
    },
    post(url, data, successCb = null, errorCb = null) {
        return this.request(util.METHOD_POST, url, data, successCb, errorCb)
    },
    put(url, data, successCb = null, errorCb = null) {
        return this.request(util.METHOD_PUT, url, data, successCb, errorCb)
    },
    delete(url, data = {}, successCb = null, errorCb = null) {
        return this.request(util.METHOD_DELETE, url, data, successCb, errorCb)
    },
    /**
     * Init the service.
     */
    init() {
        axios.defaults.baseURL = util.API_BASE_URL;
        axios.interceptors.request.use(config => {
            config.headers['Authorization']    = `Bearer ${localStorage.getItem(util.JWT_TOKEN)}`;
            config.headers['X-CSRF-TOKEN']     = window.Laravel.csrfToken;
            config.headers['X-Requested-With'] = 'XMLHttpRequest';
            return config
        })

        axios.interceptors.response.use(response => {
            const token = response.headers['Authorization'] || response.data['token'];
            // console.log(response.headers['Authorization']);
            // console.log(response.data['token']);
            if(token) {
                localStorage.setItem(util.JWT_TOKEN, token);
            }
            return response;
        }, error => {
            console.log(error);
            return Promise.reject(error);
        })
    }
};
