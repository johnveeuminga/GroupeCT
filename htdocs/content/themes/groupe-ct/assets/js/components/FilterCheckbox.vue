<!-- <style scoped>
	.filter-checbox-container.edit-form-field .form-field{
		margin-top: 1em;
		margin-bottom: 1em;
	}

	.filter-checbox-container.edit-form-field .form-field input{
		width: 100%;
	}
</style> -->

<template>
	<div class="filter-checkbox-container" :class="{ 'edit-form-field': edit }">
		<div class="form-field" :class="">
			<label for="enable-range-filter">
				<input type="checkbox" id="enable-range-filter" v-model="formData.isRange" name="enable_range">
				Enable range filtering
			</label>
		</div>
		<div class="filterRangeValues" v-if="formData.isRange">
			<div class="form-field">
				<label for="range-min">Filter range minimum value</label>
				<input type="number" id="range-min" name="range_min" v-model="formData.rangeMin">
			</div>
			<div class="form-field">
				<label for="range-max">Filter range maximum value</label>
				<input type="number" id="range-max" name="range_max" v-model="formData.rangeMax">
			</div>
			<div class="form-field">
				<label for="range-interval">How many intervals for each step?</label>
				<input type="number" id="range-interval" name="range_interval" v-model="formData.interval">
			</div>
		</div>
	</div>
</template>

<script>
	export default{
		props: {
			enableRange: {
				default: false,
			},
			edit: {
				default: false,
			},

			rangeMin: {
				default: ''
			},

			rangeMax: {
				default: ''
			},

			rangeInterval: {
				default: ''
			}
		},

		data(){
			return {
				formData: {
					isRange: false,
					rangeMin: '',
					rangeMax: '',
					interval: '',
				}
			}
		},

		mounted() {
			if(this.enableRange){
				console.log(this.enableRange);
				this.formData.isRange = this.enableRange;
			}

			if(this.rangeMin){
				this.formData.rangeMin = this.rangeMin;
			}

			if(this.rangeMax){
				this.formData.rangeMax = this.rangeMax;
			}

			if(this.rangeInterval){
				this.formData.interval = this.rangeInterval;
			}

		},

		watch: {
			enableRange(){
				console.log('ready');
				this.formData.isRange = this.enableRange;
			}
		}
	}
</script>