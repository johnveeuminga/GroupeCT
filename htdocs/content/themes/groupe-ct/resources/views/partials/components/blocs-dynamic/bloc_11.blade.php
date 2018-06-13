    <!-- Block 11 - Software Product -->
<!-- prod-logiciel MAIN CONTAINER START -->
<div class="prod-logiciel-main-container default-padding default-width">
    @foreach($block->get_field('bloc_11_software_products') as $product)
        <div class="prod-logiciel-container {{ $product['bloc_11_slide_image_left'] ? '' : 'reverse-elem' }}"><!-- reverse-elem : to swap img and text div -->
            <div class="prod-logiciel-img-container">
                @if (!empty($product['bloc_11_video_link']))
                    <a class="youtube-lity" href="{{ $product['bloc_11_video_link'] }}" data-lity></a>
                @endif
                <img class="img-video shadow" src="{{ $product['bloc_11_slide_image']['url'] }}" alt="{{ $product['bloc_11_slide_image']['alt'] }}">
                @if (!empty($product['bloc_11_video_caption']))
                    <span class="prod-logiciel-lang">{{ $product['bloc_11_video_caption'] }}</span>
                @endif
            </div>
            <div class="buffer"></div>
            <div class="prod-logiciel-text-container">
                @if (!empty($product['bloc_11_title']))
                    <h3 class="prod-logiciel-title">{{ $product['bloc_11_title'] }}</h3>
                @endif
                @if (!empty($product['bloc_11_subtitle']))
                    <p class="prod-logiciel-subtitle">{{ $product['bloc_11_subtitle'] }}</p>
                @endif
                @if (!empty($product['bloc_11_description']))
                    <p class="prod-logiciel-text">{!! nl2br($product['bloc_11_description']) !!}</p>
                @endif
                @if ($product['bloc_11_brochure'])
                    <div class="brochure-container">
                        <a class="brochure-download-pdf-white" href="{{ $product['bloc_11_brochure']['url'] }}" target="_blank">{{ pll__('BROCHURE') }}</a>
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div><!-- prod-logiciel MAIN CONTAINER END -->

