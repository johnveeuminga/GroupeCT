<!-- Block 2 - Text/Image & Image/Text - Slider -->
<div class="img-plus-text img-plus-text-slider default-padding default-width">
    <div class="slider-main-container">
        @foreach($block->get_field('bloc_2_slides') as $i => $slide)
            <div class="slide-container slide{{ $i }} @if($i == 0) {{ 'active-slide' }} @endif @if($slide['bloc_2_slide_image_left'] === false) reverse-elem @endif">

                <div class="img-container">
                    <img src="{{ $slide['bloc_2_slide_image']['url'] }}" alt="{{ $slide['bloc_2_slide_image']['alt'] }}">
                </div>
                <div class="buffer"></div>
                <div class="text-container">
                    @if (!empty($slide['bloc_2_slide_subheader']))<p class="upper-title">{{ $slide['bloc_2_slide_subheader'] }}</p>@endif
                    @if (!empty($slide['bloc_2_slide_title']))<h2 class="text-container-title">{{ $slide['bloc_2_slide_title'] }}</h2>@endif
                    @if (!empty($slide['bloc_2_slide_text']))<p class="text">{!! nl2br($slide['bloc_2_slide_text']) !!}</p>@endif
                    @if (!empty($slide['bloc_2_slide_phone_1']) || !empty($slide['bloc_2_slide_phone_2']))
                        <div class="contact-container">
                            @if (!empty($slide['bloc_2_slide_phone_1']))
                                <div class="contact-content">
                                    @if (!empty($slide['bloc_2_slide_phone_1_location']))<span class="contact-location">{!! $slide['bloc_2_slide_phone_1_location']  !!}</span>@endif
                                    @if (!empty($slide['bloc_2_slide_phone_1_label']))<a class="contact-phone" href="tel:+{!! $slide['bloc_2_slide_phone_1'] !!}">{!! $slide['bloc_2_slide_phone_1_label'] !!}</a>@endif
                                </div>
                            @endif
                            @if (!empty($slide['bloc_2_slide_phone_2']))
                                <div class="contact-content">
                                    @if (!empty($slide['bloc_2_slide_phone_2_location']))<span class="contact-location">{!! $slide['bloc_2_slide_phone_2_location'] !!}</span>@endif
                                    @if (!empty($slide['bloc_2_slide_phone_2_label']))<a class="contact-phone" href="tel:+{!! $slide['bloc_2_slide_phone_2'] !!}">{!! $slide['bloc_2_slide_phone_2_label'] !!}</a>@endif
                                </div>
                            @endif
                        </div>
                    @endif

                    @if ($slide['bloc_2_slide_cta_label'])
                        <div class="cta-container">
                            <a class="btn-bloc2 primary-btn-blue @if ($slide['bloc_2_slide_cta_open_contact']) open-contact-form @endif" href="@if($slide['bloc_2_slide_cta_open_contact'])#@else{{ $slide['bloc_2_slide_cta_link'] }}@endif" @if($slide['bloc_2_slide_cta_blank'])target='_blank'@endif>{{ $slide['bloc_2_slide_cta_label'] }}</a>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <div class="slider-link-container-bloc02">
        @foreach($block->get_field('bloc_2_slides') as $i => $slide)
            <a class="slider-dot slide{{ $i }} blue-dot @if($i == 0) {{ 'active-dot-blue' }} @endif" href="#"></a>
        @endforeach
    </div>

</div>