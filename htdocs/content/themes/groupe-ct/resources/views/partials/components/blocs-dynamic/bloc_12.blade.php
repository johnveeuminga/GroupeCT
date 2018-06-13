<!-- Block 12 - Posts -->
<!-- PUBLICATION MAIN CONTAINER START -->
<div class="publication-main-container default-padding default-width">
    <!-- THE ELEMENT START  -->
    @foreach($block->get_field('bloc_12_posts') as $i => $post)
    <div class="publication-container {{ $i % 2 == 1 ? 'reverse-elem' : '' }}"> <!-- reverse-elem : to swap img and text div -->
        <div class="publication-img-container">
            <img class="image-pub shadow" src="{{ $post->image['url'] }}" alt="{{ $post->image['alt'] }}">
            <span></span>
        </div>
        <div class="buffer"></div>
        <div class="publication-text-container">
            <p class="publication-cat">{{ $post->category }}</p>
            <h3 class="publication-title">{{ $post->post_title }}</h3>
            <p class="publication-date">{{ date('Y-m-d', strtotime($post->post_date)) }}</p>
            <p class="publication-text">{{ $post->excerpt }}</p>
            <a href="{{ $post->permalink }}" class="cta-see-more"><?php _e('en savoir plus', THEME_TEXTDOMAIN); ?></a>
        </div>
    </div>
    @endforeach
    <!-- THE ELEMENT END  -->
</div><!-- PUBLICATION MAIN CONTAINER END -->

