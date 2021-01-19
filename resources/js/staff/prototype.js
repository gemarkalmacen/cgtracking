// core librariees
const core = require('^resources/js/core.js');
// create your prototypes here
Vue.prototype.$helper = core.helper;
Vue.prototype.$route = core.route;
Vue.prototype.$permission = core.permission;
Vue.prototype.$toaster = core.toaster;