const jQuery = require('jquery');

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
    function savePageAsPDF() {
        var pdf = new jsPDF('p', 'pt', 'letter'),
        source = $('#ver-paciente')[0],

        specialElementHandlers = {
            '#bypassme': function (element, renderer) {
                return true
            }
        },
        margins = {
            top: 20,
            bottom: 20,
            left: 40,
            width: 522
        };

        pdf.fromHTML(
            source, 
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, 
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                pdf.save('Reporte Medico.pdf');
            }, margins
        );
    }
    $('document').ready(function() {
        $("#fecha-nacimiento").datepicker({
            language: 'es',
            dateFormat: 'yyyy-mm-dd',
            view: 'years',
            maxDate: new Date(),
            autoClose: true
        });

        $('#escolaridad').select2({
            tags: true,
            placeholder: "Escolaridad"
        });

        $("#colonia").select2({
            tags: true,
            placeholder: "Colonia / Pueblo"
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

        $("#imprimir-resumen").click(function() {
            savePageAsPDF();
        });
    });
})(jQuery);