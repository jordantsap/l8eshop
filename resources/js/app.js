// require
import './bootstrap';

window.Vue = require('vue').default;

// Vue.component('livesearch', require('./components/LiveSearch.vue').default);

Vue.component('sidebar', require('./components/Sidebar.vue').default);
Vue.component('variant-create', require('./components/VariantCreate.vue').default);
Vue.component('front-page', require('./components/Front.vue').default);

Vue.prototype.trans = (key) => {
    return _.get(window.trans, key, key);
};
// import Sidebar from './components/Sidebar.vue';
// import Front from './components/Front.vue';
// import VariantCreate from './components/VariantCreate.vue';

const app = new Vue({
    el: '#app',
    // components: {
    //     "variant-create": VariantCreate,
    //     "sidebar": Sidebar,
    //     "front": Front,
    // }
});