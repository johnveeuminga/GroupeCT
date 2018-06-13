<div class="four-col-icons-main-container default-padding default-width">
    <div class="four-col-icons-container">
        @include('partials.components.helpers.bloc-4-single-icon', [
            'icon' => $block->get_field('bloc_4_1_icon')['url'],
            'title' => $block->get_field('bloc_4_1_title'),
            'description' => $block->get_field('bloc_4_1_description'),
        ])
        @include('partials.components.helpers.bloc-4-single-icon', [
            'icon' => $block->get_field('bloc_4_2_icon')['url'],
            'title' => $block->get_field('bloc_4_2_title'),
            'description' => $block->get_field('bloc_4_2_description'),
        ])
        @include('partials.components.helpers.bloc-4-single-icon', [
            'icon' => $block->get_field('bloc_4_3_icon')['url'],
            'title' => $block->get_field('bloc_4_3_title'),
            'description' => $block->get_field('bloc_4_3_description'),
        ])
        @include('partials.components.helpers.bloc-4-single-icon', [
            'icon' => $block->get_field('bloc_4_4_icon')['url'],
            'title' => $block->get_field('bloc_4_4_title'),
            'description' => $block->get_field('bloc_4_4_description'),
        ])
    </div>

    @if ($block->get_field('bloc_4_cta_link'))
        <div class="btn-container">
            <a class="primary-btn-blue" href="{{ $block->get_field('bloc_4_cta_link') }}" {{ $block->get_field('bloc_4_cta_blank') ? 'target="blank"' : '' }}>{{ $block->get_field('bloc_4_cta_label') }}</a>
        </div>
    @endif

</div>