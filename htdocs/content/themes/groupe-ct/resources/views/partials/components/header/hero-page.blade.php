@if ((get_post_type(get_the_ID()) === 'post' && !isset($page_title)) || is_product())
    <style scoped>
        .hero-title-container{
            display: none;
        }
        .hero-page {
            height:0;
        }
    </style>
@endif

@if (get_post_type(get_the_ID()) !== 'post' && !is_product())
    <style scoped>
        .hero-content-container {
            background: black;
        }

        @if (is_array(get_field('page_header_image_desktop')))
            .hero-content-container {
                background-image: url({{ get_field('page_header_image_desktop')['url'] }});
            }
        @endif
        @if (is_array(get_field('page_header_image_mobile')))
            @media (max-width: 767px) { /* or 301 if you want really the same as previously.  */
                .hero-content-container {
                    background-image: url({{ get_field('page_header_image_mobile')['url'] }});
                }
            }
        @endif
    </style>
@endif
<section class="hero-page row">
    @include('partials.components.header.sub-menu')
    @include('partials.components.header.contact-form')
    @if (get_post_type(get_the_ID()) !== 'post' && !is_product())
        <div class="hero-content-container">
            <div class="hero-title-container">
                @if(isset($page_title))
                    <h1 class="hero-title"><span class="red-border">{{ $page_title }}</span></h1>
                @else
                    @loop
                        <h1 class="hero-title">@if(get_field('page_html_title', Loop::id()) && !empty(get_field('page_html_title', Loop::id()))){!! get_field('page_html_title', Loop::id())  !!} @else<span class="red-border">{{ Loop::title() }}</span>@endif</h1>
                    @endloop
                @endif
            </div>
            <div class="overlay"></div>
        </div>
    @endif
    @if(get_post_type(get_the_ID()) == 'post' && !is_product() && isset($page_title))
        <div class="hero-content-container">
            <div class="hero-title-container">
                @if(isset($page_title))
                    <h1 class="hero-title"><span class="red-border">{{ $page_title }}</span></h1>
                @endif
            </div>
            <div class="overlay"></div>
        </div>
    @endif
</section>
