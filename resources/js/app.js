import './bootstrap';
import ToastComponent from '../../vendor/usernotnull/tall-toasts/resources/js/tall-toasts'
import Alpine from 'alpinejs';

Alpine.data('ToastComponent', ToastComponent)

window.Alpine = Alpine;

Alpine.start();
