/*
| Include the minimum Javascript
| -------------------------------------------------- */
import '../../../../../resources/js/bootstrap.js'

/*
| Start Alpine JS
| -------------------------------------------------- */
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();


/*
| Include the Fonts and the images from these Module for VITE
| -------------------------------------------------- */
import.meta.glob([
    './../../assets/flags/**',
])
