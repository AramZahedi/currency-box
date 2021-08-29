/*
 * Rippler
 */
import Ripple from 'vue-ripple-directive'
import Snotify, {SnotifyPosition} from 'vue-snotify'

Ripple.color = 'rgba(255, 255, 255, 0.2)';
Vue.directive('ripple', Ripple);

// /*
//  * Chart.js
//  */
// require('chart.js');

/*
 * Vue.js Snotify
 */
const snotifyOptions = {
    toast: {
        position: SnotifyPosition.rightBottom
    }
};
Vue.use(Snotify, snotifyOptions);

/*
 * Sweet alerts 2
 */
window.Swal = require('sweetalert2');

window.md5 = require('md5');

require('air-datepicker/dist/js/datepicker')
require('air-datepicker/dist/js/i18n/datepicker.en')
