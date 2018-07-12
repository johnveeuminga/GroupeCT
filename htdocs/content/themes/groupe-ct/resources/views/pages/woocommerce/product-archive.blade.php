@extends('templates.main')

@section('main')
	<span class="overlay hidden opacity-0" id="ajax-overlay"></span>
    <div class="product-brand__index ">
    	<div class="container">
    	    <div class="row between-sm py-8">
	    		<aside class="col-md-3">
	    			<div class="sidebar-header text-center">
	    				<h3 class="text-center mx-3 text-blue uppercase font-sans font-bold py-2 border-b-4 border-blue border-solid inline-block text-lg">{{ __('Raffiner Votre Recherche', 'GROUPE-CT') }}</h3>
	    			</div>
                    <div class="sidebar-section my-4">
                        <div class="sidebar-section-header px-3 py-4 text-white font-bold bg-blue uppercase font-sans text-center">
                            {{ __("Les Catégories de nos produits d'impression", 'GROUPE-CT') }}							
                        </div>
                        <div class="sidebar-section-choices px-2 py-2">
                            <div class="flex wrap flex-col">
                                @foreach($product_type_children as $product_type_child)
                                    <div class="form-group my-2 px-3">
                                        <input type="checkbox" id="{{ $product_type_child->slug}}" name="{{ $product_type_child->slug }}" value="{{ $product_type_child->term_id }}" class="filter" data-filter-group = "product_cat">
                                        <label for="{{ $product_type_child->slug }}" class="font-sans-mada text-lg ml-2">
                                            {{ __($product_type_child->name, GROUPE_CT) }}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-section-choices px-2 py-2">
                        <div class="sidebar-section-header px-3 py-4 text-white font-bold bg-blue uppercase font-sans text-center">
                            {{ __("Les Marques de nos produits d'impression", 'GROUPE-CT') }}	
                        </div>
                        <div class="flex wrap flex-col">
                            @foreach($brands as $brand_single)
                                <div class="form-group my-2 px-3">
                                    <input type="checkbox" id="{{ $brand_single->slug}}" name="{{ $brand_single->slug }}" value="{{ $brand_single->term_id }}" class="filter" data-filter-group = "product_brands">
                                    <label for="{{ $brand_single->slug }}" class="font-sans-mada text-lg ml-2">
                                        {{ __($brand_single->name, GROUPE_CT) }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>				
	    			@foreach($filters as $index=>$filter)
	    				@if(count($filter) > 0)
	    					@if($index == 'Print Speed' || $index == 'Vitesse d’impression')
	    						<div class="sidebar-section my-4">
		    						<div class="sidebar-section-header px-3 py-4 text-white font-bold bg-blue uppercase font-sans text-center">
		    							{{ __($index, 'GROUPE-CT') }}
		    						</div>
		    						<div class="sidebar-section-choices px-2 py-2">
		    							<div class="flex wrap flex-col">
		    								<div class="form-group my-2 px-3">
		    									<input type="checkbox" id="20ppm-less" name="filter_20ppm-less" value="0-20" class="filter" data-filter-group = "{{strtolower('pa_print-speed')}}">
		    									<label for="20ppm-less" class="font-sans-mada text-lg ml-2">
		    										{{ __('20 ppm et moins', GROUPE_CT) }}
		    									</label>
		    								</div>
		    								<div class="form-group my-2 px-3">
		    									<input type="checkbox" id="21-35ppm" name="filter_21-35ppm" value="21-35" class="filter" data-filter-group = "{{strtolower('pa_print-speed')}}">
		    									<label for="21-35ppm" class="font-sans-mada text-lg ml-2">
		    										{{ __('Entre 21 et 35 ppm', GROUPE_CT) }}
		    									</label>
		    								</div>
		    								<div class="form-group my-2 px-3">
		    									<input type="checkbox" id="36-45ppm" name="filter_36-45ppm" value="36-45" class="filter" data-filter-group = "{{strtolower('pa_print-speed')}}">
		    									<label for="36-45ppm" class="font-sans-mada text-lg ml-2">
		    										{{ __('Entre 36 et 45 ppm', GROUPE_CT) }}
		    									</label>
		    								</div>
	    									<div class="form-group my-2 px-3">
		    									<input type="checkbox" id="46-55ppm" name="filter_46-55ppm" value="46-55" class="filter" data-filter-group = "{{strtolower('pa_print-speed')}}">
		    									<label for="46-55ppm" class="font-sans-mada text-lg ml-2">
		    										{{ __('Entre 46 et 55 ppm', GROUPE_CT) }}
		    									</label>
		    								</div>
		    								<div class="form-group my-2 px-3">
		    									<input type="checkbox" id="56-75ppm" name="filter_56-75" value="56-75" class="filter" data-filter-group = "{{strtolower('pa_print-speed')}}">
		    									<label for="56-75ppm" class="font-sans-mada text-lg ml-2">
		    										{{ __('Entre 56 et 75 ppm', GROUPE_CT) }}
		    									</label>
		    								</div>
		    								<div class="form-group my-2 px-3">
		    									<input type="checkbox" id="75plus" name="filter_75plus" value="75-+" class="filter" data-filter-group = "{{strtolower('pa_print-speed')}}">
		    									<label for="75plus" class="font-sans-mada text-lg ml-2">
		    										{{ __('75 ppm et plus', GROUPE_CT) }}
		    									</label>
		    								</div>
		    							</div>
		    						</div>
		    					</div>
	    					@else
		    					<div class="sidebar-section my-4">
		    						<div class="sidebar-section-header px-3 py-4 text-white font-bold bg-blue uppercase font-sans text-center">
		    							{{ __($index, 'GROUPE-CT') }}
		    						</div>
		    						<div class="sidebar-section-choices px-2 py-2">
		    							<div class="flex wrap flex-col">
											@foreach($filter as $filter_choice)
												@if(get_term_meta($filter_choice->term_id, 'search-term-index', true))
													<div class="form-group my-2 px-3">
														<input type="checkbox" id="{{$filter_choice->slug}}" name="filter_{{strtolower($index)}}" value="{{$filter_choice->term_id}}" class="filter" data-filter-group = "{{strtolower($filter_choice->taxonomy)}}">
														<label for="{{ $filter_choice->slug }}" class="font-sans-mada text-lg ml-2">
															{{ $filter_choice->name }}
														</label>
													</div>
												@endif
		    								@endforeach
		    							</div>
		    						</div>
		    					</div>
	    					@endif
	    				@endif
					@endforeach
                    <div class="sidebar-section my-4">
                        <div class="sidebar-section-header px-3 py-3 text-blue font-bold uppercase font-sans">
                            {{ __("Les Catégories de nos produits d'impression", 'GROUPE-CT') }}
                        </div>
                        <div class="sidebar-section-choices px-2 py-2">
                            <div class="flex wrap flex-col">
                                @foreach($product_type_children as $product_type_child)
                                    <a href="{{ get_term_link($product_type_child)}}" class="font-sans-mada text-red my-1 px-3 inline-block"> <span class="underline">{{__($product_type_child->name, 'GROUPE-CT')}}</span></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-section my-4">
                        <div class="sidebar-section-header px-3 py-3 text-blue font-bold uppercase font-sans">
                            {{ __("Les Marques de nos produits d'impression", 'GROUPE-CT') }}
                        </div>
                        <div class="sidebar-section-choices px-2 py-2">
                            <div class="flex wrap flex-col">
                                @foreach($brands as $brand_single)
                                    <a href="{{ get_term_link($brand_single)}}" class="font-sans-mada text-red my-1 px-3 inline-block"> <span class="underline">{{__($brand_single->name, 'GROUPE-CT')}}</span></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
	    		</aside>
    	    	<div class="col-md-8">
    	    		<div class="product-brand__products">
                        <h2 class="product-brand__title text-3xl uppercase font-bold font-sans border-b-4 border-black border-solid pb-3">{{ $page_title }}</h2>
    	    			<div class="row my-4 product-brand__products-row flex">
    	    				@if(!empty($products))
	    	    				@foreach($products as $product)
	    	    					<div class="col-md-3 product-brand__products-col flex">
	    	    						<div class="product-brand__product my-4 text-center px-2 flex">
											<a href="{{get_the_permalink($product->ID)}}" class="font-sans-mada leading-tight text-blue text-lg flex flex-col">
												@if(has_post_thumbnail($product->ID))
												<img src="{{ get_the_post_thumbnail_url($product->ID) }}" alt="{{$product->post_title}}" class="w-100 block">
												@else
												<img src="{{ wp_get_attachment_url(1991) }}" alt="{{$product->post_title}}" class="w-100 block">
												@endif
	    	    								<span class="font-sans-mada leading-tight text-blue text-lg block mt-auto">
	    	    									{{ $product->post_title }} </span>
	    	    							</a>
	    	    						</div>
	    	    					</div>
	    	    				@endforeach
	    	    			@else
	    	    				<p class="font-sans-mada text-center text-lg py-4 w-full font-bold">{{ __('Aucun prodiot trouvé.', 'GROUPE-CT')}}.</p>
	    	    			@endif
    	    			</div>
    	    		</div>
    	    	</div>
    	    </div>
    	</div>
    </div>
@endsection


	