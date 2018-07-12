@extends('templates.main')

@section('main')
	<div class="product-cat-listing">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="product-cat-listing__header">
						<div class="row between-md  py-8">
							<aside class="col-md-3">
								<div class="sidebar-section">
									<div class="sidebar-section">
										<div class="sidebar-section-header px-3 text-blue font-bold uppercase font-sans">
											{{ __("Les Catégories de nos produits d'impression", 'GROUPE-CT') }}
										</div>
										<div class="sidebar-section-choices px-2 py-2">
											<div class="flex wrap flex-col">
												@foreach($product_types as $product_type)
													<a href="{{ get_term_link($product_type)}}" class="font-sans-mada text-red my-1 px-3 inline-block"> <span class="underline">{{__($product_type->name, 'GROUPE-CT')}}</span></a>
												@endforeach
											</div>
										</div>
										
									</div>
								</div>
							</aside>
							<div class="col-md-8">
								@foreach($brands as $brand)
									<div class="product-cat-listing__product-cat-container mb-8">
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
														{{ pll__('Voir Nos', GROUPE_CT) . ' '. $brand->name }}
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
	</div>
@endsection