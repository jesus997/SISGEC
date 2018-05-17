const jQuery = require('jquery');
const Vue = require('vue/dist/vue.js');

import AddressComponent from '../vue/Address.vue';
import BuscarPaciente from '../vue/BuscarPaciente.vue';

import '../../node_modules/bootstrap/dist/js/bootstrap.min.js';
import '../../node_modules/air-datepicker/dist/js/datepicker.min.js';
import '../../node_modules/air-datepicker/dist/js/i18n/datepicker.es.js';
import '../../node_modules/intl-tel-input/build/js/utils.js';
import '../../node_modules/intl-tel-input/build/js/intlTelInput.min.js';
import '../../node_modules/select2/dist/js/select2.min.js';
import '../../node_modules/select2/dist/js/i18n/es.js';

import '../../node_modules/air-datepicker/dist/css/datepicker.min.css';
import '../../node_modules/select2/dist/css/select2.min.css';
import '../../node_modules/intl-tel-input/build/css/intlTelInput.css';

(function($) {
    $('document').ready(function() {
        $("#fecha-nacimiento").datepicker({
            language: 'es',
            dateFormat: 'yyyy-mm-dd',
            view: 'years',
            maxDate: new Date(),
            autoClose: true
        });

        $("#colonia").select2({
            tags: true,
            placeholder: "Colonia / Pueblo"
        });

        $('#escolaridad').select2({
            tags: true,
            placeholder: "Escolaridad"
        });

        $("#phone").intlTelInput({
            initialCountry: "auto",
            geoIpLookup: function(callback) {
              $.get('https://ipinfo.io', function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
              });
            }
        });

        /** VUE */

        Vue.component('dinamic-address', AddressComponent);
        Vue.component('buscar-paciente', BuscarPaciente);

        if($("#nuevo-paciente").length > 0) {
            new Vue({
                el: '#nuevo-paciente'
            });
        }

        if($("#buscar-paciente").length > 0) {
            new Vue({
                el: '#buscar-paciente'
            });
        }
    });
})(jQuery);