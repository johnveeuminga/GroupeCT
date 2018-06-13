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
											{{ __('Brands of our Printing Products', 'GROUPE-CT') }}
										</div>
										<div class="sidebar-section-choices px-2 py-2">
											<div class="flex wrap flex-col">
												@foreach($brands as $brand_single)
													<a href="{{ get_term_link($brand_single)}}" class="font-sans-mada text-red my-1 px-3 inline-block"> <span class="underline">{{__($brand_single->name, 'GROUPE-CT')}}</span></a>
												@endforeach
											</div>
										</div>
										
									</div>
								</div>
							</aside>
							<div class="col-md-8">
								@foreach($product_types as $product_type)
									<div class="product-cat-listing__product-cat-container mb-8">
										<h3 class="text-2xl font-sans font-bold uppercase">
											{{$product_type->name}}
										</h3>
										@php
											$thumbnail_id = get_woocommerce_term_meta( $product_type->term_id, 'thumbnail_id', true );
											$image = wp_get_attachment_url( $thumbnail_id );
										@endphp
										<div class="row stretch py-4">
											<div class="col-md-4">
												<img src="{{$image}}" alt="" class="w-full block">
											</div>
											<div class="col-md-8">
												<div class="flex h-full flex-wrap">
													<p class="font-sans-mada text-lg w-full">
														{{$product_type->description}}
													</p>
													<a href="{{get_term_link($product_type->term_id)}}" class="px-4 py-2 text-2xl text-white uppercase bg-blue mt-auto inline-block font-sans font-bold">
														{{__('See Our ' . $product_type->name, 'GROUPE-CT')}}
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