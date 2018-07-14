@extends('templates.main')

@section('main')
	<div class="product-cat-listing py-4">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="product-cat-listing__header">
						<div class="row between-md  py-8">
							@foreach($product_types as $product_type)
								<div class="product-cat-listing__product-cat-container mb-8 col-md-6 col-12">
									<h3 class="text-xl font-sans font-bold uppercase">
										{{$product_type->name}}
									</h3>
									@php
										$thumbnail_id = get_woocommerce_term_meta( $product_type->term_id, 'thumbnail_id', true );
										$image = wp_get_attachment_url( $thumbnail_id && $thumbnail_id != 0 ? $thumbnail_id : 1991 );
									@endphp
									<div class="row stretch py-4">
										<div class="col-md-5">
											<img src="{{$image}}" alt="" class="w-full block">
										</div>
										<div class="col-md-7">
											<div class="flex h-full flex-wrap">
												<p class="font-sans-mada w-full">
													{{$product_type->description}}
												</p>
												<a href="{{get_term_link($product_type->term_id)}}" class="px-4 py-2 text-xs text-white uppercase bg-blue mt-auto w-full text-center block font-sans font-bold">
													{{ pll__('Voir Nos', GROUPE_CT) . ' ' .  $product_type->name }}
												</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection