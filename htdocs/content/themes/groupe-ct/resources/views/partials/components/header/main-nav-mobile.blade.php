<div id="menu-mobile" class="main-nav-mobile-container">
    <a class="close-menu-btn" href="#"><img src="{{ themosis_assets() }}/images/icon/icon-chevron-white.svg" alt=""></a>
    <div class="nav-content-container mobile">
        <nav class="nav-bottom">
            <ul class="nav-link-container">
                @include('partials.components.header.link-atom01', ['page_id' => PageHelper::PAGE_0_ACCUEIL, 'has_submenu' => false, 'submenu_id' => null])
                @include('partials.components.header.link-atom04', ['page_id' => PageHelper::PAGE_4_0_A_PROPOS, 'has_submenu' => false, 'submenu_id' => null])
                @include('partials.components.header.link-atom02', ['page_id' => PageHelper::PAGE_2_0_PRODUITS_SOLUTIONS, 'has_submenu' => true, 'submenu_id' => 2])
                @include('partials.components.header.link-atom03', ['page_id' => PageHelper::PAGE_6_0_SERVICES, 'has_submenu' => true, 'submenu_id' => 8])
                @include('partials.components.header.link-atom05', ['page_id' => PageHelper::PAGE_8_0_LOGICELS, 'has_submenu' => true,   'submenu_id' => 5])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_4_7_NOUS_JOINDRE, 'has_submenu' => false, 'submenu_id' => null ])

            </ul>
        </nav>
        <nav class="nav-top">
            <ul class="nav-link-container">
                <li class="menu-item"><a class="nav-link text-primary" href="#"><i class="far fa-user-circle mr-1"></i>{{ pll__('ZONE CLIENT') }}</a></li>
                {{-- <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_7_NOUS_JOINDRE) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_4_7_NOUS_JOINDRE) }}</a></li> --}}
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_11_0_NOUVELLES) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_11_0_NOUVELLES) }}</a></li>
                {{-- <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_12_0_BLOUGE) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_12_0_BLOUGE) }}</a></li> --}}
                <li class="menu-item"><a class="nav-link scroll-to" href="#" data-target="#form-newsletter">{{ pll__('Infolettre') }}</a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_6_CARRIERE) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_4_6_CARRIERE) }}</a></li>
                <li class="menu-item"><a class="nav-link" href="{{PageHelper::get_page_permalink(PageHelper::PAGE_13_0_QUOTE)}}">{{ PageHelper::get_page_title(PageHelper::PAGE_13_0_QUOTE) }}</a></li>
                {{-- <li class="menu-item"><a class="nav-link text-red" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-01">{{ pll__('Demander une soumission') }}</a></li> --}}
                @if (isset(pll_get_post_translations(get_the_ID())['en']) && pll_current_language() == 'fr')
                    <li class="menu-item"><a class="nav-link" href="{{ get_permalink(pll_get_post_translations(get_the_ID())['en']) }}">English</a></li>
                @endif
                @if (isset(pll_get_post_translations(get_the_ID())['fr']) && pll_current_language() == 'en')
                    <li class="menu-item"><a class="nav-link" href="{{ get_permalink(pll_get_post_translations(get_the_ID())['fr']) }}">Français</a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>

