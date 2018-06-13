<template>
	<div class="filter">
		Test Vue Component
	</div>
</template>
<script>
	export default{
		mounted(){
			axios.get('/filters/264')
				.then( (response) => {
					console.log(response);
				});
		}
	}
</script>