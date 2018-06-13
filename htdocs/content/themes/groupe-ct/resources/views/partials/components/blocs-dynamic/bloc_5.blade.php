<!-- Bloc 5 - Testimonials -->
<div class="testimonials-main-container row no-padding">

    <div class="slider-main-container">
    @foreach($block->get_field('bloc_5_slides') as $i => $slide)
        <div class="slide-container slide{{ $i }} @if($i == 0) {{ 'active-slide' }} @endif">
            <div class="text-container col-md-6">
                <img class="testimonial-quote" src="{{ themosis_assets() }}/images/icon/icon-testimonial-quote-bottom.png" alt="">
                <p class="text">{{ $slide['bloc_5_slide_testimonial'] }}</p>
                <img class="testimonial-quote" src="{{ themosis_assets() }}/images/icon/icon-testimonial-quote-top.png" alt="">
                <p class="testimonial-name">{{ $slide['bloc_5_slide_author'] }} - <span class="testimonial-desc">{{ $slide['bloc_5_slide_author_title'] }}</span></p>

                @if ($slide['bloc_5_slide_cta_label'])
                    <div>
                        <a class="btn-bloc2 primary-btn-blue" href="{{ $slide['bloc_5_slide_cta_link'] }}" @if($slide['bloc_5_slide_cta_blank'])target='_blank'@endif>{{ $slide['bloc_5_slide_cta_label'] }}</a>
                    </div>
                @endif

                @if (count($block->get_field('bloc_5_slides')) > 1)
                    <div class="slider-link-container testinmonials-slides-link-container">
                        @foreach($block->get_field('bloc_5_slides') as $t => $slide_count)
                            <a class="slider-dot slide{{ $t }} white-dot @if($t == 0) {{ 'active-dot' }} @endif" href="#"></a>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="img-container col-md-6">
                <img src="{{ $slide['bloc_5_slide_image']['url'] }}" alt="{{ $slide['bloc_5_slide_image']['alt'] }}">
            </div>

        </div>
    @endforeach
    </div>
</div>



