<!-- Block 18 - 4-paragraphs -->
<div class="row default-padding">
    <div class="col-xs-12">

        <!-- THE ELEMENT START  -->
        <div class="text-bloc-main-container default-width">
            <div class="text-bloc-container">
                <h3 class="text-bloc-title">{!! $block->get_field('bloc_18_1_title') !!}</h3>
                <p class="text-bloc-text">{!! $block->get_field('bloc_18_1_description') !!}</p>
                <a class="cta-see-more" href="{{ $block->get_field('bloc_18_1_cta_link') }}" {{ $block->get_field('bloc_18_1_cta_blank') ? 'target="blank"' : '' }}>{{ $block->get_field('bloc_18_1_cta_label') }}</a>
            </div>
            <div class="text-bloc-container">
                <h3 class="text-bloc-title">{!! $block->get_field('bloc_18_2_title') !!}</h3>
                <p class="text-bloc-text">{!! $block->get_field('bloc_18_2_description') !!}</p>
                <a class="cta-see-more" href="{{ $block->get_field('bloc_18_2_cta_link') }}" {{ $block->get_field('bloc_18_2_cta_blank') ? 'target="blank"' : '' }}>{{ $block->get_field('bloc_18_2_cta_label') }}</a>
            </div>
            <div class="text-bloc-container">
                <h3 class="text-bloc-title">{!! $block->get_field('bloc_18_3_title') !!}</h3>
                <p class="text-bloc-text">{!! $block->get_field('bloc_18_3_description') !!}</p>
                <a class="cta-see-more" href="{{ $block->get_field('bloc_18_3_cta_link') }}" {{ $block->get_field('bloc_18_3_cta_blank') ? 'target="blank"' : '' }}>{{ $block->get_field('bloc_18_3_cta_label') }}</a>
            </div>
            <div class="text-bloc-container">
                <h3 class="text-bloc-title">{!! $block->get_field('bloc_18_4_title') !!}</h3>
                <p class="text-bloc-text">{!! $block->get_field('bloc_18_4_description') !!}</p>
                <a class="cta-see-more" href="{{ $block->get_field('bloc_18_4_cta_link') }}" {{ $block->get_field('bloc_18_4_cta_blank') ? 'target="blank"' : '' }}>{{ $block->get_field('bloc_18_4_cta_label') }}</a>
            </div>
        </div> <!-- TEXT BLOC MAIN CONTAINER END -->
        <!-- THE ELEMENT END  -->

        <!-- FIXME missing CTAs, main title -->
    </div>
</div>