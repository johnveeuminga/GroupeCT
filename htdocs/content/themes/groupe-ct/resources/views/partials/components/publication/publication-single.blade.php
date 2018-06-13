<section class="publication-single-main-container default-padding default-width">
    <div class="publication-container">
        <div class="publication-page-title-container">

            @if( pll_current_language() == "fr")
                <h2 class="page-title">{{ pll__('NOS PUBLICATIONS') }}</h2>
            @else
                <h2 class="page-title">{{ pll__('OUR PUBLICATIONS') }}</h2>
            @endif
        </div>

        <div class="publication-nav-container">
            <div class="publication-nav">
                @if (get_previous_post())
                    <a class="publication-nav-item cta-pub-left" href="{{ get_permalink(get_previous_post()) }}">{{ pll__('Publication précédente') }}</a>
                @else
                    <span></span>
                @endif
                <a class="publication-nav-item link-pub-list" href="{{PageHelper::get_page_permalink(PageHelper::PAGE_5_0_PUBLICATIONS) }}">{{ pll__('Liste') }}</a>
                @if (get_next_post())
                    <a class="publication-nav-item cta-pub-right" href="{{ get_permalink(get_next_post()) }}">{{ pll__('Publication suivante') }}</a>
                @else
                    <span></span>
                @endif
            </div>
        </div>


        <div class="publication-content-container">
            <div class="pub-info-container">
                @if(isset(get_the_category(get_the_ID())[0]))
                    <p class="publication-cat">{{ get_the_category(get_the_ID())[0]->name }}</p>
                @endif
                <h3 class="publication-title">{{ get_the_title() }}</h3>
                <p class="publication-date">{{ pll_current_language() === 'fr' ? get_the_date( 'd F Y', get_the_ID()) : get_the_date( 'F d Y', get_the_ID()) }}</p>
            </div>
            <div class="wysiwyg-container">
                {!! wpautop(get_the_content(get_the_ID())) !!}
            </div>
        </div>

        <div class="publication-nav-container">
            <div class="publication-nav">
                @if (get_previous_post())
                    <a class="publication-nav-item cta-pub-left" href="{{ get_permalink(get_previous_post()) }}">{{ pll__('Publication précédente') }}</a>
                @else
                    <span></span>
                @endif
                <a class="publication-nav-item link-pub-list" href="{{PageHelper::get_page_permalink(PageHelper::PAGE_5_0_PUBLICATIONS) }}">{{ pll__('Liste') }}</a>
                @if (get_next_post())
                    <a class="publication-nav-item cta-pub-right" href="{{ get_permalink(get_next_post()) }}">{{ pll__('Publication suivante') }}</a>
                @else
                    <span></span>
                @endif
            </div>
        </div>
    </div>
    <div class="other-publication-title-container">
        <h2 class="page-title">{!! pll__('Publications<br/>qui pourraient vous intéresser') !!}</h2>
    </div>
    <div class="other-publication-container">
        @foreach ($suggested as $post)
            <!-- THE ELEMENT START  -->
            <div class="publication-container"> <!-- reverse-elem : to swap img and text div -->
                <div class="publication-img-container">
                    <?php $src = get_field('post_standard_image', $post->ID) ? get_field('post_standard_image', $post->ID)['url'] : themosis_assets() . '/images/img/img_pub01.png'; ?>
                    <img class="image-pub shadow" src="{{ $src }}" alt="">
                </div>
                <div class="buffer"></div>
                <div class="publication-text-container">
                    <p class="publication-cat">{{ get_the_category($post->ID)[0]->name }}</p>
                    <h3 class="publication-title">{{ get_the_title($post->ID) }}</h3>
                    @if (get_field('post_show_date', $post->ID))
                        <p class="publication-date">{{ pll_current_language() === 'fr' ? get_the_date( 'd F Y', $post->ID) : get_the_date( 'F d Y', $post->ID) }}</p>
                    @endif
                    <p class="publication-text">
                        {{ get_the_excerpt($post->ID) }}
                    </p>
                    <div class="cta-container">
                        <a href="{{ get_the_permalink($post->ID) }}" class="cta-see-more">{{ pll__('Lire la suite') }}</a>
                    </div>
                </div>
            </div>
            <!-- THE ELEMENT END  -->
        @endforeach
    </div>
</section>
