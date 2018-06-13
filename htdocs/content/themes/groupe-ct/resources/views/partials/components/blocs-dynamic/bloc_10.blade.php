<div class="bloc-product-search-main-container">
    <div class="bloc-product-container">
        <div class="nav-cat-main-container">
            <!-- insert product category as a class in the <a> -->
            <nav class="nav-cat-container default-padding default-width">
                <h3 class="select-title">{{ pll__('Sélectionnez la catégorie de votre choix') }}</h3>
                @include('partials.components.helpers.bloc-10-filters')
            </nav>

            <div class="product-main-container default-padding default-width">
                @foreach($block->get_field('bloc_10_products') as $product)
                    <div class="product-container {{ empty($product['bloc_10_product_category']) ? '' : $product['bloc_10_product_category'] }}">
                        <div class="product-inner-container">
                            <div class="product-img-container">
                                <img class="product-img" src="{{ $product['bloc_10_image']['url'] }}" alt="{{ $product['bloc_10_image']['alt'] }}">
                            </div>
                            <div class="product-text-container">
                                <div class="product-text-content-container">
                                    <h3 class="product-title">{{ $product['bloc_10_title'] }}</h3>
                                    <p class="product-desc">{{ $product['bloc_10_description'] }}</p>
                                </div>
                                <div class="brochure-download-container">
                                    @if ($product['bloc_10_product_pdf'])
                                        <a class="brochure-download-pdf-blue" href="{{ $product['bloc_10_product_pdf']['url'] }}" target="_blank">{{ pll__('BROCHURE') }}</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
