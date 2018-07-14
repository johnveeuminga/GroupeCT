import Test from './components/Test.vue';
import Vue from 'vue';

Vue.component( 'filters', Test );
const app = new Vue( {
    el: '#filters'
});