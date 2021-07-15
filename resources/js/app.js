require('./bootstrap');

require('alpinejs');

window.Vue = require('vue');
Vue.component('alert-success', require('./components/AlertSuccess').default);
const app = new Vue({
    el: '#app',
});
