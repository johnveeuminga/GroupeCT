(function($) {
	$(document).ready(function(){
		var filters = {};
		var tax = $('#taxonomy').val();
		var term_id = $('#term_id').val();
		$('.filter').change( function() {
			var checked = ( $('.filter:checkbox:checked' ));
			var filter_group = $(this).data('filter-group');
			var taxonomies = {};

			$.each( checked, function( index ) {
				if( $(this).data( 'term-id' )) {
					var taxonomy = $(this).data( 'filter-group' );
					if( !taxonomies[taxonomy] ){
						taxonomies[taxonomy] = [];
					}
					taxonomies[taxonomy].push( $(this).data( 'term-id' ));
				}
			});

			if( !($(this).data( 'term-id' ))) {
				if($(this).prop('checked') && !($(this).data( 'term-id' ))){
					if(!filters[filter_group]){
						filters[filter_group] = [];
					}
	
					filters[filter_group].push( $(this).val());
				}else{
					if(filters[filter_group].indexOf($(this).val()) == 0){
						filters[filter_group].shift();
					}else{
	
						filters[filter_group].splice(filters[filter_group].indexOf($(this).val()), 1);
					}
				}
			}
			

			$.ajax({
				url: groupect.ajaxurl,
				type: 'GET',
				dataType: 'html',
				data:{
					action: 'get-products',
					security: 'get-products',
					filters: JSON.stringify(filters),
					taxonomies: JSON.stringify(taxonomies),
					// term_id: $('#base_id').val(),
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