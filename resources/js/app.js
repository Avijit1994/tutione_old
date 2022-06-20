require('./bootstrap');

import intlTelInput from 'intl-tel-input';
import Alpine from 'alpinejs';

window.intlTelInput = intlTelInput;

window.Alpine = Alpine;

Alpine.start();


const input = document.querySelector("#phone");
intlTelInput(input, {
    // any initialisation options go here
});
