<div class="news-main-container" style="@if(get_field('post_featured_image', $post->ID)) background-image: url('{{ get_field('post_featured_image', $post->ID)['url'] }}'); @endif">
    <div class="news-inner-container">
        <div class="news-content">
            @if (get_field('post_show_date', $post->ID))
                <p class="news-date">{{ pll_current_language() === 'fr' ? get_the_date( 'd F Y', $post->ID) : get_the_date( 'F d Y', $post->ID) }}</p>
            @endif
            <h2 class="news-title">{{ get_the_title($post->ID) }}</h2>
            <p class="news-excerpt">{{ PageHelper::parse_excerpt(get_the_excerpt($post->ID), 100) }}</p>
        </div>
        <div class="news-footer">

            @if( pll_current_language() == "fr")
                <a href="{{ get_the_permalink($post->ID) }}" class="news-read-more-cta">{{ pll__('Lire la nouvelle') }}</a>
            @else
                <a href="{{ get_the_permalink($post->ID) }}" class="news-read-more-cta">{{ pll__('Read the news') }}</a>
            @endif
        </div>
    </div>
    <div class="overlay"></div>
</div>
