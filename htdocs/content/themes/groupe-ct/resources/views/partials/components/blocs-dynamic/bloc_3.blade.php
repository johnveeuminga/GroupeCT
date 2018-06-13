<!-- Block 3 - Text/Image & Image/Text - Standalone -->
<div class="img-plus-text img-plus-text-normal default-padding default-width @if($block->get_field('bloc_3_image_left') === false) reverse-elem  @endif" id="_{{ $row_id }}">

    <div class="img-container">
        <img src="{{ $block->get_field('bloc_3_image')['url'] }}" alt="{{ $block->get_field('bloc_3_image')['alt'] }}">
    </div>
    <div class="buffer"></div>
    <div class="text-container">
        @if (!empty($block->get_field('bloc_3_subheader')))<p class="upper-title">{{ $block->get_field('bloc_3_subheader') }}</p>@endif
        @if (!empty($block->get_field('bloc_3_title')))<h2 class="text-container-title">{{ $block->get_field('bloc_3_title') }}</h2>@endif
        @if (!empty($block->get_field('bloc_3_text')))<p class="text">{!! nl2br($block->get_field('bloc_3_text')) !!}</p>@endif
        @if (!empty($block->get_field('bloc_3_phone_1')) || !empty($block->get_field('bloc_3_phone_2')))
            <div class="contact-container">
                @if (!empty($block->get_field('bloc_3_phone_1')))
                    <div class="contact-content">
                        @if (!empty('bloc_3_phone_1_location'))<span class="contact-location">{!! $block->get_field('bloc_3_phone_1_location') !!}</span>@endif
                        @if (!empty('bloc_3_phone_1_label'))<a class="contact-phone" href="tel:+{!! $block->get_field('bloc_3_phone_1') !!}">{!! $block->get_field('bloc_3_phone_1_label') !!}</a>@endif
                    </div>
                @endif
                @if (!empty($block->get_field('bloc_3_phone_2')))
                    <div class="contact-content">
                        @if (!empty('bloc_3_phone_2_location'))<span class="contact-location">{!! $block->get_field('bloc_3_phone_2_location') !!}</span>@endif
                        @if (!empty('bloc_3_phone_2_label'))<a class="contact-phone" href="tel:+{!! $block->get_field('bloc_3_phone_2') !!}">{!! $block->get_field('bloc_3_phone_2_label') !!}</a>@endif
                    </div>
                @endif
            </div>
        @endif
        @if ($block->get_field('bloc_3_cta_label'))
            <div class="cta-container">
                <a class="btn-bloc2 primary-btn-blue @if ($block->get_field('bloc_3_cta_open_contact')) open-contact-form @endif" href="@if($block->get_field('bloc_3_cta_open_contact'))#@else{{ $block->get_field('bloc_3_cta_link') }}@endif" @if($block->get_field('bloc_3_cta_blank'))target='_blank'@endif>{{ $block->get_field('bloc_3_cta_label') }}</a>
            </div>
        @endif
    </div>
</div>
