@extends('templates.main')

@section('main')
	<section class="single-product">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					@if( get_previous_post() || get_next_post())
						<div class="publication-nav-container">
						    <div class="publication-nav">
							        @if (get_previous_post())
							            <a class="publication-nav-item cta-pub-left" href="{{ get_permalink(get_previous_post()) }}">{{ pll__('Go Back to the Previous Page') }}</a>
							        @else
							            <span></span>
							        @endif
							        @if (get_next_post())
							            <a class="publication-nav-item cta-pub-right" href="{{ get_permalink(get_next_post()) }}">{{ pll__('Go to The Next Page') }}</a>
							        @else
							            <span></span>
							        @endif
						    </div>
						</div>	
					@endif
					<div class="single-product__header bg-blue-light px-4 py-3 my-8">
						<h2 class="text-lg text-white uppercase font-sans font-bold">{{$product->get_name()}}</h2>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-8">
							<div class="row">
								<div class="col-sm-12">
									<div class="row">
										<div class="col-sm-10">
											<div class="single-product__images">
												<div class="row">
													<div class="col-sm-10">
														@if(has_post_thumbnail($product->get_id()))
															<div class="single-product__slider-main">
																<div class="product-slider__slide">
																	<img src="{{ get_the_post_thumbnail_url( $product->get_id(), 'full') }}" alt="" class='w-full block'>
																</div>
																@foreach($product->get_gallery_image_ids() as $gallery_id)
																	<div class="product-slider__slide">
																		<img src="{{ wp_get_attachment_url($gallery_id) }}" alt="" class="w-full block">
																	</div>
																@endforeach
															</div>
														@else
															<div class="product-main-image-placeholder mb-6">
																<img src="{{ wp_get_attachment_image_url(1991, 'full') }}" alt="{{ __('Image Placeholder', 'GROUPE-CT') }}" class="w-100">
															</div>
														@endif
													</div>
													<div class="col-sm-2">
														@if($product->get_gallery_image_ids())
															<div class="single-product__slider-thumbnails">
																<div class="product-slider__slide">
																	<div class="product-slider__slide">
																		<img src="{{ get_the_post_thumbnail_url( $product->get_id(), 'full') }}" alt="" class='w-full block'>
																	</div>
																</div>
																@foreach($product->get_gallery_image_ids() as $gallery_id)
																	<div class="product-slider__slide">
																		<img src="{{ wp_get_attachment_url($gallery_id) }}" alt="" class="w-full block">
																	</div>
																@endforeach
															</div>
														@endif
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-8">
					<div class="single-product__description">
						<div class="single-product__tabs">
							<ul class="list-reset flex border-b border-grey border-solid">
							  <li class="-mb-px mr-1 active">
							    <a class="bg-white inline-block border-l border-t border-r font-sans-mada py-2 px-4 text-black text-semibold" href="#" data-target='single-product__product-description'>Product Description</a>
							  </li>
							  <li class="mr-1 -mb-px">
							    <a class="border-l border-t border-r inline-block py-2 px-4 text-black font-sans-mada text-semibold" href="#" data-target="single-product__product-description-list">Product Attributes</a>
							  </li>
							</ul>
							<div class="tabs">
								<div id="single-product__product-description" class="active fade tab in">
									<div class="product-description-container row">
										<div class="col-md-8">
											<div class="product-description md:border-r border-dark-grey border-dashed md:pr-3 ">
												{!! wpautop($product->get_description()) !!}
											</div>
										</div>
										<div class="col-md-4">
											Stock: {{ $product->get_stock_quantity()}}
										</div>
									</div>
								</div>
								<div id="single-product__product-description-list" class="fade tab">
									<h2>Attributes</h2>
									<div class="single-product__attr-list">
										<div class="row py-3 border-b border-solid border-grey">
											<div class="col-md-4">
												<span class="font-bold">
													Type: 
												</span>
											</div>
											<div class="col-md-8">
												{{ implode($product_types_name , ', ') }}
											</div>
										</div>
										@if($product_brand)
											<div class="row py-3 border-b border-solid border-grey">
												<div class="col-md-4">
													<span class="font-bold">
														Make: 
													</span>
												</div>
												<div class="col-md-8">
													{{ __($product_brand->name) }}
												</div>
											</div>
										@endif
										<div class="row py-3 border-b border-solid border-grey">
											<div class="col-md-4">
												<span class="font-bold">
													Dimensions:
												</span>
											</div>
											<div class="col-md-8">
												{{ wc_format_dimensions($product->get_dimensions(false)) }}
											</div>
										</div>
										@foreach($product->get_attributes() as $attribute)
											<div class="row py-3 border-b border-solid border-grey">
												<div class="col-md-4">
													<span class="font-bold">
														{{ __($attribute->get_taxonomy_object()->attribute_label, 'GROUPE-CT')}}:
													</span>
												</div>
												<div class="col-md-8">
													{{ __($product->get_attribute($attribute->get_name(), 'GROUPE-CT'))}}
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
		</div>
	</section>
@endsection