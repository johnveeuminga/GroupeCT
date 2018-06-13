@extends('templates.main')

@section('main')
	<span class="overlay hidden opacity-0" id="ajax-overlay"></span>
    <div class="product-brand__index ">
    	<div class="container">
    	    <div class="row between-sm py-8">
	    		<aside class="col-md-3">
	    			<div class="sidebar-header text-center">
	    				<h3 class="text-center mx-3 text-blue uppercase font-sans font-bold py-2 border-b-4 border-blue border-solid inline-block text-xl">{{ __('Refine Your Research', 'GROUPE-CT') }}</h3>
	    			</div>
	    			<input type="hidden" name="term_id" value="{{$object->term_id}}" id="base_id">
	    			<input type="hidden" name="taxonomy" value="{{ $object->taxonomy }}" id="taxonomy">
	    			@foreach($filters as $index=>$filter)
	    				@if(count($filter) > 0)
	    					<div class="sidebar-section my-4">
	    						<div class="sidebar-section-header px-3 py-4 text-white font-bold bg-blue uppercase font-sans">
	    							{{ __($index, 'GROUPE-CT') }}
	    						</div>
	    						<div class="sidebar-section-choices px-2 py-2">
	    							<div class="flex wrap flex-col">
	    								@foreach($filter as $filter_choice)
											<div class="form-group my-2 px-3">
		    									<input type="checkbox" id="{{$filter_choice->slug}}" name="filter_{{strtolower($index)}}" value="{{$filter_choice->term_id}}" class="filter" data-filter-group = "{{strtolower($filter_choice->taxonomy)}}">
		    									<label for="{{$filter_choice->slug}}" class="font-sans-mada text-lg ml-2">
		    										{{$filter_choice->name}}
		    									</label>
		    								</div>
	    								@endforeach
	    							</div>
	    						</div>
	    					</div>
	    				@endif
	    			@endforeach
	    			<div class="sidebar-section my-4">
						<div class="sidebar-section-header px-3 py-3 text-blue font-bold uppercase font-sans">
							{{ __('Categories of Our Printing Products', 'GROUPE-CT') }}
						</div>
						<div class="sidebar-section-choices px-2 py-2">
							<div class="flex wrap flex-col">
								@foreach($product_type_children as $product_type_child)
									@if($object->taxonomy === 'product_cat')
										@if($product_type_child->slug === $active_link && $object->taxonomy === 'product_cat')
											<a href="{{ get_term_link($product_type_child)}}" class="font-sans-mada text-red my-1 px-3 inline-block"> <span class="underline">{{__($product_type_child->name, 'GROUPE-CT')}}</span></a>
										@else
											<span class="font-sans-mada text-blue my-1 px-3 inline-block font-bold "> {{__($product_type_child->name, 'GROUPE-CT')}}</span>
										@endif
									@else
										<a href="{{ get_term_link($product_type_child)}}" class="font-sans-mada text-red my-1 px-3 inline-block"> <span class="underline">{{__($product_type_child->name, 'GROUPE-CT')}}</span></a>
									@endif
								@endforeach
							</div>
						</div>
					</div>
					<div class="sidebar-section my-4">
						<div class="sidebar-section-header px-3 py-3 text-blue font-bold uppercase font-sans">
							{{ __('Brands of our Printing Products', 'GROUPE-CT') }}
						</div>
						<div class="sidebar-section-choices px-2 py-2">
							<div class="flex wrap flex-col">
								@foreach($brands as $brand_single)
									@if($object->taxonomy === 'product_brands')
										@if($brand_single->slug === $active_link)
											<a href="{{ get_term_link($brand_single)}}" class="font-sans-mada text-red my-1 px-3 inline-block"> <span class="underline">{{__($brand_single->name, 'GROUPE-CT')}}</span></a>
										@else
											<span class="font-sans-mada text-blue my-1 px-3 inline-block font-bold "> {{__($brand_single->name, 'GROUPE-CT')}}</span>
										@endif
									@else
										<a href="{{ get_term_link($brand_single)}}" class="font-sans-mada text-red my-1 px-3 inline-block"> <span class="underline">{{__($brand_single->name, 'GROUPE-CT')}}</span></a>
									@endif
								@endforeach
							</div>
						</div>
						
					</div>
	    		</aside>
    	    	<div class="col-md-8">
    	    		<h2 class="product-brand__title text-3xl uppercase font-bold font-sans">{{ __($object->name . ' ' . $product_type->name, 'GROUPE-CT') }}</h2>
    	    		<div class="product-brand-header">
    	    			<div class="row middle-xs my-3">
    	    				<div class="col-md-3">
    	    					<img src="{{$logo}}" alt="{{$object->name}}">
    	    				</div>
    	    				<div class="col-md-9">
    	    					<p class="font-sans-mada text-lg">
    	    						{{$object->description}}
    	    					</p>
    	    				</div>
    	    			</div>
    	    		</div>
    	    		<div class="product-brand__products mt-8">
    	    			<div class="product-brand__products-header px-4 py-3 bg-red">
    	    				<span class="font-bold font-sans text-white uppercase">{{__($page_title . ' ' . 'products', 'GROUPE-CT')}}</span>
    	    			</div>
    	    			<div class="row my-4 product-brand__products-row">
    	    				@if(!empty($products))
	    	    				@foreach($products as $product)
	    	    					<div class="col-md-3 product-brand__products-col">
	    	    						<div class="product-brand__product my-8 text-center px-2">
	    	    							@if(has_post_thumbnail($product->ID))
	    	    							<img src="{{ get_the_post_thumbnail_url($product->ID) }}" alt="{{$product->post_title}}" class="w-100 block">
	    	    							@else
	    	    							<img src="{{ wp_get_attachment_url(1991) }}" alt="{{$product->post_title}}" class="w-100 block">
	    	    							@endif
	    	    							<a href="{{get_the_permalink($product->ID)}}" class="font-sans-mada text-blue text-lg">
	    	    								{{ $product->post_title }}
	    	    							</a>
	    	    						</div>
	    	    					</div>
	    	    				@endforeach
	    	    			@else
	    	    				<p class="font-sans-mada text-center text-lg py-4 w-full font-bold">No products.</p>
	    	    			@endif
    	    			</div>
    	    		</div>
    	    	</div>
    	    </div>
    	</div>
    </div>
@endsection


	