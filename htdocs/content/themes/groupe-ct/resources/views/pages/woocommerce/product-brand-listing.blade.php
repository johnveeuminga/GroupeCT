@extends('templates.main')

@section('main')
	<div class="product-cat-listing">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="product-cat-listing__header">
						<div class="row between-md  py-8">
							@foreach($brands as $brand)
								<div class="product-cat-listing__product-cat-container mb-8 col-md-6 col-12">
									<h3 class="text-xl font-sans font-bold uppercase">
										{{$brand->name}}
									</h3>
									@php
										$thumbnail_id = get_term_meta( $brand->term_id, 'thumbnail', true );
										$image = wp_get_attachment_url( $thumbnail_id && $thumbnail_id != 0 ? $thumbnail_id : 1991 );
									@endphp
									<div class="row stretch py-4">
										<div class="col-md-4">
											<img src="{{$image}}" alt="" class="w-full block">
										</div>
										<div class="col-md-8">
											<div class="flex h-full flex-wrap">
												<p class="font-sans-mada w-full">
													{{$brand->description}}
												</p>
												<a href="{{get_term_link($brand->term_id)}}" class="px-4 py-2 text-sm text-white uppercase bg-blue mt-auto w-full block font-sans font-bold text-center">
													{{ pll__('Voir Nos', GROUPE_CT) . ' '. $brand->name .( pll_current_language() == 'en' ? ' Products' : '')}}
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