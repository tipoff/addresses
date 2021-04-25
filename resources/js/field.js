import VueTelInput from 'vue-tel-input'

Nova.booting((Vue, router) => {
    Vue.use(VueTelInput);

    Vue.component('index-phone-number', require('./components/PhoneNumber/IndexField'));
    Vue.component('detail-phone-number', require('./components/PhoneNumber/DetailField'));
    Vue.component('form-phone-number', require('./components/PhoneNumber/FormField'));
})
