<section class="publication-list-main-container default-padding default-width">

        <div class="publication-header-container">
            <h2 class="publication-header-title">{!! pll__('À la une,<br/>chez Groupe CT') !!}</h2>
        </div>

        <nav class="nav-cat-container">
            <p class="select-title">{{ pll__('Sélectionnez la catégorie de votre choix') }}</p>
            <ul class="menu-item-container">
                @foreach (get_terms('category') as $category)
                    @if ($category->name !== 'Uncategorized')
                        <li class="menu-item"><a class="primary-btn-grey publication-category @if(isset($_GET['cat']) && (int) $_GET['cat'] === $category->term_id) item-cat-active @endif" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_5_0_PUBLICATIONS) }}@if(!isset($_GET['cat']) || (int) $_GET['cat'] !== $category->term_id)?cat={{ $category->term_id }}@endif">{{ $category->name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </nav>

        @if ($count > 1)
            <div class="publication-nav-container">
                <div class="publication-nav">
                    @if (get_query_var( 'paged' ) > 1)<a class="publication-nav-item cta-pub-left" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_5_0_PUBLICATIONS) }}page/{{ get_query_var( 'paged' ) -1 }}/@if(isset($_GET['cat']))?cat={{ $_GET['cat'] }}@endif">{{ pll__('Page précédente') }}</a>@endif
                    @for ($i = 1; $i <= $count; $i++)
                        <a class="publication-nav-item pagination @if ($i === get_query_var( 'paged' ) || (get_query_var( 'paged' ) === 0 && $i === 1)) active-pagination @endif" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_5_0_PUBLICATIONS) }}page/{{ $i }}/@if(isset($_GET['cat']))?cat={{ $_GET['cat'] }}@endif">{{ $i }}</a>
                    @endfor
                    @if (get_query_var( 'paged' ) < $count && $count !== 1)<a class="publication-nav-item cta-pub-right" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_5_0_PUBLICATIONS) }}page/{{ get_query_var( 'paged' ) + 1 === 1 ? 2 : get_query_var( 'paged' ) + 1 }}/@if(isset($_GET['cat']))?cat={{ $_GET['cat'] }}@endif">{{ pll__('Page suivante') }}</a>@endif
                </div>
            </div>
        @endif

        <!-- INSERT PUBLICATIONS HERE -->
        <div class="publication-main-container default-padding default-width">
            <?php $reverse = false; ?>
            @foreach ($posts as $post)
                <div class="publication-container @if($reverse) {{ 'reverse-elem' }} @endif"> <!-- reverse-elem : to swap img and text div -->
                    <div class="publication-img-container">

                        <?php $src = get_field('post_standard_image', $post->ID) ? get_field('post_standard_image', $post->ID)['url'] : themosis_assets() . '/images/img/img_pub01.png'; ?>
                        <img class="image-pub shadow" src="{{ $src }}">

                        <span></span>
                    </div>
                    <div class="buffer"></div>
                    <div class="publication-text-container">
                        <p class="publication-cat">{{ $post->category }}</p>
                        <h3 class="publication-title">{{ $post->post_title }}</h3>
                        @if (get_field('post_show_date', $post->ID))
                            <p class="publication-date">{{ pll_current_language() === 'fr' ? get_the_date( 'd F Y', $post->ID) : get_the_date( 'F d Y', $post->ID) }}</p>
                        @endif
                        <p class="publication-text">{!! $post->post_excerpt !!}</p>
                        <div class="cta-container">
                            <a href="{{ get_permalink($post->ID) }}" class="cta-see-more">{{ pll__('Lire la suite') }}</a>
                        </div>
                    </div>
                </div>
                <?php $reverse = !$reverse; ?>
            @endforeach
        </div>
        <!-- END OF PUBLICATIONS-->

        @if ($count > 1)
            <div class="publication-nav-container">
                <div class="publication-nav">
                    @if (get_query_var( 'paged' ) > 1)
                        <a class="publication-nav-item cta-pub-left" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_5_0_PUBLICATIONS) }}page/{{ get_query_var( 'paged' ) -1 }}/@if(isset($_GET['cat']))?cat={{ $_GET['cat'] }}@endif">{{ pll__('Page précédente') }}</a>
                    @endif
                    @for ($i = 1; $i <= $count; $i++)
                        <a class="publication-nav-item pagination @if ($i === get_query_var( 'paged' ) || (get_query_var( 'paged' ) === 0 && $i === 1)) active-pagination @endif" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_5_0_PUBLICATIONS) }}page/{{ $i }}/@if(isset($_GET['cat']))?cat={{ $_GET['cat'] }}@endif">{{ $i }}</a>
                    @endfor
                    @if (get_query_var( 'paged' ) < $count && $count !== 1)<a class="publication-nav-item cta-pub-right" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_5_0_PUBLICATIONS) }}page/{{ get_query_var( 'paged' ) + 1 === 1 ? 2 : get_query_var( 'paged' ) + 1 }}/@if(isset($_GET['cat']))?cat={{ $_GET['cat'] }}@endif">{{ pll__('Page suivante') }}</a>@endif
                </div>
            </div>
        @endif

</section>