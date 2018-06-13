(function($) {
	$(document).ready(function(){
		var filters = {};
		$('.filter').change( function() {
			var filter_group = $(this).data('filter-group');
			if($(this).prop('checked')){
				if(!filters[filter_group]){
					filters[filter_group] = [];
				}
				filters[filter_group].push( $(this).val());

			}else{
				filters[filter_group].splice(filters[filter_group].indexOf($(this).val(), 1));
			}

			$.ajax({
				url: groupect.ajaxurl,
				type: 'GET',
				dataType: 'html',
				data:{
				action: 'get-products',
					security: 'get-products',
					filters: JSON.stringify(filters)
				},

				beforeSend: function(){
					$('#ajax-overlay').removeClass('hidden');
					setTimeout( function(){
						$('#ajax-overlay').removeClass('opacity-0');
					}, 100)
				}
			}).done( function(data){
				var response = JSON.parse(data);
				if(response.data){
					$('.product-brand__products-row').html(response.data);
				}
				$('#ajax-overlay').addClass('opacity-0');
				setTimeout( function(){
					$('#ajax-overlay').addClass('hidden');
				},200)
			})
		});
	});
}(jQuery));