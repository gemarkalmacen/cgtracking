// Application js for customer
require('../bootstrap');
window.Vue = require('vue');
var { i18n } = require('./i18n')
require('./prototype');
require('./mixin');
// dataset
const root = document.getElementById('app')
const dataset = root.dataset;
// user variables
var page = dataset.vuePage;
var data = dataset.vueProps;
// Get page script
var config = require(`^resources/js/staff/pages/${page}.js`)(data);
// Vue global components
Vue.component('datatable', require('^resources/js/staff/components/datatable').default);
Vue.component('select2', require('^resources/js/staff/components/select2').default);
Vue.component('v-switch', require('^resources/js/staff/components/v-switch').default);
Vue.component('mobile', require('^resources/js/staff/components/mobile').default);
// Vue.component('ktimageinput', require('^resources/js/staff/components/ktimageinput').default);
Vue.component('v-datetimepicker', require('^resources/js/staff/components/v-datetimepicker').default);
// Vue instance
var _defaultConfig = {
    el: '#app',
    i18n
};

window.EventHub = new Vue();

const app = new Vue(Object.assign({}, _defaultConfig, config));
