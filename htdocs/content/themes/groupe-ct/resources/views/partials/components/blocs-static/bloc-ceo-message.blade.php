<div class="testimonials-main-container row no-padding">
    <div class="slider-main-container">
        @foreach($block->get_field('bloc_5_slides') as $i => $slide)
        <div class="slide-container slide{{ $i }} @if($i == 0) {{ 'active-slide' }} @endif">
            <div class="img-container mobile">
                <img src="{{ themosis_assets() }}/images/logo/logo-loblaw.png" alt="">
            </div>

            <div class="text-container col-md-6">
                <img class="testimonial-quote" src="{{ themosis_assets() }}/images/icon/icon-testimonial-quote-top.png" alt="">
                <p class="text">{{ $slide['bloc_5_slide_testimonial'] }}</p>
                <img class="testimonial-quote" src="{{ themosis_assets() }}/images/icon/icon-testimonial-quote-bottom.png" alt="">
                <p class="testimonial-name">{{ $slide['bloc_5_slide_author'] }} - <span class="testimonial-desc">{{ $slide['bloc_5_slide_author_title'] }}</span></p>
            </div>

            <div class="img-container desktop col-md-6">
                <img src="{{ $slide['bloc_5_slide_image']['url'] }}" alt="{{ $slide['bloc_5_slide_image']['alt'] }}">
            </div>
        </div>
        @endforeach
    </div>
    @if (count($block->get_field('bloc_5_slides')) > 1)
    <div class="slider-link-container">
        @foreach($block->get_field('bloc_5_slides') as $i => $slide)
        <a class="slider-dot slide{{ $i }} white-dot @if($i == 0) {{ 'active-dot' }} @endif" href="#"></a>
        @endforeach
    </div>
    @else
    <!-- FIXME Bottom padding problem when not a slider -->
    @endif
    <h3></h3>
</div>



