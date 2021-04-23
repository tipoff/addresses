Nova.booting((Vue, router) => {
    Vue.component('index-domestic-address', require('./components/DomesticAddress/IndexField'));
    Vue.component('detail-domestic-address', require('./components/DomesticAddress/DetailField'));
    Vue.component('form-domestic-address', require('./components/DomesticAddress/FormField'));
})
