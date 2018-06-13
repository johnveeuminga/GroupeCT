<!-- Block 6 - 3-columns with icons -->
<div class="three-col-icons-main-container default-padding default-width">
    <div class="three-col-icons-container row">
        <div class="three-col-icons-item col-md-4">
            @if (is_array($block->get_field('bloc_6_1_icon')))
                <div class="three-col-icons-img-container">
                    @if (!empty($block->get_field('bloc_6_1_cta_link')))
                        <a class="three-col-icons-img-container-link" href="{{ $block->get_field('bloc_6_1_cta_link') }}" {{ $block->get_field('bloc_6_1_cta_blank') ? 'target="blank"' : '' }}>
                    @endif
                    <img class="three-col-icons-img" src="{{ $block->get_field('bloc_6_1_icon')['url'] }}" alt="{{ $block->get_field('bloc_6_1_icon')['alt'] }}" >
                    @if (!empty($block->get_field('bloc_6_1_cta_link')))
                        </a>
                    @endif
                </div>
            @endif
            <div class="three-col-icon-text">
                @if (!empty($block->get_field('bloc_6_1_title')))
                    <h3 class="three-col-icons-title">{!! $block->get_field('bloc_6_1_title') !!} </h3>
                @endif
                @if (!empty($block->get_field('bloc_6_1_description')))
                    <p class="three-col-icons-desc">{{ $block->get_field('bloc_6_1_description') }}</p>
                @endif
                @if (!empty($block->get_field('bloc_6_1_cta_link')))
                    <a class="cta-see-more" href="{{ $block->get_field('bloc_6_1_cta_link') }}" {{ $block->get_field('bloc_6_1_cta_blank') ? 'target="blank"' : '' }}>{{ $block->get_field('bloc_6_1_cta_label') }}</a>
                @endif
            </div>

        </div>
        <div class="three-col-icons-item col-md-4">
            @if (is_array($block->get_field('bloc_6_2_icon')))
                <div class="three-col-icons-img-container">
                    @if (!empty($block->get_field('bloc_6_2_cta_link')))
                        <a class="three-col-icons-img-container-link" href="{{ $block->get_field('bloc_6_2_cta_link') }}" {{ $block->get_field('bloc_6_2_cta_blank') ? 'target="blank"' : '' }}>
                    @endif
                    <img class="three-col-icons-img" src="{{ $block->get_field('bloc_6_2_icon')['url'] }}" alt="{{ $block->get_field('bloc_6_2_icon')['alt'] }}" >
                    @if (!empty($block->get_field('bloc_6_2_cta_link')))
                        </a>
                    @endif
                </div>
            @endif
            <div class="three-col-icon-text">
                @if (!empty($block->get_field('bloc_6_2_title')))
                    <h3 class="three-col-icons-title">{!! $block->get_field('bloc_6_2_title') !!} </h3>
                @endif
                @if (!empty($block->get_field('bloc_6_2_description')))
                    <p class="three-col-icons-desc">{{ $block->get_field('bloc_6_2_description') }}</p>
                @endif
                @if (!empty($block->get_field('bloc_6_2_cta_link')))
                    <a class="cta-see-more" href="{{ $block->get_field('bloc_6_2_cta_link') }}" {{ $block->get_field('bloc_6_2_cta_blank') ? 'target="blank"' : '' }}>{{ $block->get_field('bloc_6_2_cta_label') }}</a>
                @endif
            </div>

        </div>

        <div class="three-col-icons-item col-md-4">
            @if (is_array($block->get_field('bloc_6_3_icon')))
                <div class="three-col-icons-img-container">
                    @if (!empty($block->get_field('bloc_6_3_cta_link')))
                        <a class="three-col-icons-img-container-link" href="{{ $block->get_field('bloc_6_3_cta_link') }}" {{ $block->get_field('bloc_6_3_cta_blank') ? 'target="blank"' : '' }}>
                    @endif
                    <img class="three-col-icons-img" src="{{ $block->get_field('bloc_6_3_icon')['url'] }}" alt="{{ $block->get_field('bloc_6_3_icon')['alt'] }}" >
                    @if (!empty($block->get_field('bloc_6_3_cta_link')))
                        </a>
                    @endif
                </div>
            @endif
            <div class="three-col-icon-text">
                @if (!empty($block->get_field('bloc_6_3_title')))
                    <h3 class="three-col-icons-title">{!! $block->get_field('bloc_6_3_title') !!} </h3>
                @endif

                @if (!empty($block->get_field('bloc_6_3_description')))
                    <p class="three-col-icons-desc">{{ $block->get_field('bloc_6_3_description') }}</p>
                @endif
                @if (!empty($block->get_field('bloc_6_3_cta_link')))
                    <a class="cta-see-more" href="{{ $block->get_field('bloc_6_3_cta_link') }}" {{ $block->get_field('bloc_6_3_cta_blank') ? 'target="blank"' : '' }}>{{ $block->get_field('bloc_6_3_cta_label') }}</a>
                @endif
            </div>

        </div>

    </div>
</div>