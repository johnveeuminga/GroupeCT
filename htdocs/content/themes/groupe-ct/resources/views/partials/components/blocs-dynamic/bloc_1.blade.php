@if ("standard" === $block->get_field('bloc_1_header_type'))
    <!-- Block 1 - Variant A - Standard Header -->
    <div class="default-padding default-width">

        <!-- TITLE START -->
        <div class="section-title-container">
            <!-- FIXME -->
            <li class="upper-title-no-dot">This subheader shouldn't exists?!</li> <!-- upper-title-no-dot : enleve le list style -->

            <h1 class="title">{{ $block->get_field('bloc_1_header_title') }}</h1> <!-- align-center : text-align:center for title and desc  -->

            <!-- FIXME -->
            <p class="desc">This description shouldn't exists?!</p>

            <!-- FIXME -->
            <h3>Missing fields</h3>
            <ul>
                <li>bloc_1_header_image</li>
                <li>bloc_1_header_cta_label</li>
                <li>bloc_1_header_cta_link</li>
                <li>bloc_1_header_cta_blank</li>
            </ul>
        </div>
        <!-- TITLE END -->
    </div>
@elseif ("slider" === $block->get_field('bloc_1_header_type'))
    <!-- Block 1 - Variant B - Slider Header -->
    <div class="img-plus-text default-padding default-width">
        <div class="slider-main-container">
            @foreach($block->get_field('bloc_1_slider') as $i => $slide)
                <div class="slide-container slide{{ $i }} @if($i == 0) {{ 'active-slide' }} @endif">
                    <div class="img-container">
                        <img src="{{ $slide['bloc_1_slide_image']['url'] }}" alt="{{ $slide['bloc_1_slide_image']['alt'] }}">
                    </div>
                    <div class="buffer"></div>

                    <div class="text-container">
                        <!-- FIXME -->
                        <li class="upper-title">This subheader shouldn't exists?!</li>
                        <h2 class="text-container-title">{{ $slide['bloc_1_slide_title'] }}</h2>
                        <!-- FIXME -->
                        <h3 class="text-container-subtitle">his subtitle shouldn't exists?!</h3>
                        <!-- FIXME -->
                        <p class="text">This description shouldn't exists?!</p>
                        <a class="btn-bloc2 primary-btn-blue" href="{{ $slide['bloc_1_slide_cta_link'] }}">{{ $slide['bloc_1_slide_cta_label'] }}</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="slider-link-container-bloc02">
            @foreach($block->get_field('bloc_1_slider') as $slide)
                <a class="slider-dot slide{{ $i }} blue-dot @if($i == 0) {{ 'active-dot-blue' }} @endif" href="#"></a>
            @endforeach
        </div>

    </div>
@endif