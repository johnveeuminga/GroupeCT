<?php
$posts = \Theme\Models\Post::get_featured();
?>
<section id="home-news" class="bloc-news">
    <div class="bloc-news-container default-padding default-width">
        @if(isset($posts[0]))
            @include('partials.components.helpers.single-blog-preview', ['post' => $posts[0]])
        @endif
        @if(isset($posts[1]))
            @include('partials.components.helpers.single-blog-preview', ['post' => $posts[1]])
        @endif
    </div>
</section>
