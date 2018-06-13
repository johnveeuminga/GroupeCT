<section class="hero row">

    @include('partials.components.header.sub-menu')
    @include('partials.components.header.contact-form')


    @if (is_array(get_field('home_slider')))
        <div class="hero-content-container">
            @foreach(get_field('home_slider') as $i => $slide)
                <div class="hero-content slide-container @if($i == 0) {{ 'active-slide' }} @endif" data-hero-slide="{{ $i }}">
                    <div class="img-container">
                        <img src="{{ $slide['bloc_1_slide_image_desktop']['url'] }}" class="image-desktop" alt="{{ $slide['bloc_1_slide_image_desktop']['alt'] }}">
                        <img src="{{ $slide['bloc_1_slide_image_mobile']['url'] }}" class="image-mobile" alt="{{ $slide['bloc_1_slide_image_desktop']['alt'] }}">
                        <div class="overlay"></div>
                        <div class="triangle"></div>
                    </div>
                    <div class="buffer"></div>

                    <div class="text-container">
                        <h1 class="hero-title">{!! $slide['bloc_1_slide_title'] !!}</h1>
                        <h2 class="hero-subtitle">{!! $slide['bloc_1_slide_description'] !!}</h2>
                        <a href="#" class="hero-arrow-container" ><img class="hero-arrow" src="{{ themosis_assets() }}/images/icon/icon-hero-arrow.svg" alt=""></a>
                        @if(!empty($slide['bloc_1_slide_cta_link']))
                            <a class="btn-bloc2 primary-btn-blue" href="{{ $slide['bloc_1_slide_cta_link'] }}">{{ $slide['bloc_1_slide_cta_label'] }}</a>
                        @endif
                    </div>

                </div>
            @endforeach
            <div class="slider-link-hero-container">
                @foreach(get_field('home_slider') as $i => $slide)
                    <a class="slider-hero-dot @if($i == 0) {{ 'active-hero-slide' }} @endif" href="#" data-target="{{ $i }}"></a>
                @endforeach
            </div>
        </div>
    @endif
</section>
