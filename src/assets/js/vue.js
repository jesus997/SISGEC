const jQuery = require('jquery');
const Vue = require('vue/dist/vue.js');

import AddressComponent from '../vue/Address.vue';
import BuscarPaciente from '../vue/BuscarPaciente.vue';

(function($) {
    $('document').ready(function() {
        if($("#address-zone").length > 0) {
            Vue.component('dinamic-address', AddressComponent);
            new Vue({
                el: '#address-zone'
            });
        }

        if($("#buscar-paciente").length > 0) {
            Vue.component('buscar-paciente', BuscarPaciente);
            new Vue({
                el: '#buscar-paciente'
            });
        }
    });
})(jQuery);