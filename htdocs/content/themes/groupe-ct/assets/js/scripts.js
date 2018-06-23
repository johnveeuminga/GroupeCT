import Vue from 'vue/dist/vue.js';
import FilterCheckbox from './components/FilterCheckbox.vue';

if(document.getElementById('filter__checkbox-container')){
	Vue.component( 'filter-checkbox', FilterCheckbox );

	const container = new Vue({
		el: '#filter__checkbox-container'
	});
}