import VueI18n from 'vue-i18n'
// Get all generated lang files
var messages = {};
var files = require.context("^resources/js/generated/lang", true, /\.js$/);
files.keys().forEach(function(key){
    var name = key.replace(/(\.\/)|(\.js)/g, '');
    messages[name] = files(key).default;
});
Vue.use(VueI18n)
export const i18n = new VueI18n({
  locale: window.default_locale, // set locale
  fallbackLocale: window.fallback_locale,
  messages
});