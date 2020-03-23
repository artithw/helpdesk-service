/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');
window.Slug = require('slug');

Slug.defaults.mode = 'rfc3986';

import Buefy from 'buefy';



// /Vue.use(Buefy);
Vue.use(Buefy, {
    defaultIconPack: 'fa'
    })
// add .default tp fix vue
//require('./components/Listing.vue').default
//Since v13, vue-loader exports the component as the default key, which still works the same when using import, but requires the above when using require
Vue.component('slug-widget', require('./components/slugWidget.vue').default);
Vue.component('ticket-widget', require('./components/TicketField.vue').default);
Vue.component('staff-table', require('./components/StaffTable.vue').default);
Vue.component('staff-ticket-table', require('./components/StaffShowTicket.vue').default);
Vue.component('staff-edit-table', require('./components/StaffEditTicket.vue').default);
Vue.component('manage-edit-user', require('./components/ManageEditUser.vue').default);

require('./manage');

const app = new Vue({
   el: '#app',
});

