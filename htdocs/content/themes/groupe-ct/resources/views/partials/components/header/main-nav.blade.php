
<div class="nav-content-container desktop row">

    <div class="nav-logo-container col-xs-2">
            @if( pll_current_language() == "fr")
                <a class="link-home" href="<?php echo get_home_url(); ?>"></a>
            @else
                <a class="link-home" href="<?php echo get_home_url(); ?>/en/home/"></a>
            @endif

    </div>
    <div class="nav-container col-xs-8">

        <nav class="nav-top">
            <ul class="nav-link-container">
                @if (isset(pll_get_post_translations(get_the_ID())['en']))
                    <li class="menu-item"><a class="nav-link" href="{{ get_permalink(pll_get_post_translations(get_the_ID())['en']) }}">English</a></li>
                @endif
                @if (isset(pll_get_post_translations(get_the_ID())['fr']))
                    <li class="menu-item"><a class="nav-link" href="{{ get_permalink(pll_get_post_translations(get_the_ID())['fr']) }}">Français</a></li>
                @endif

                {{-- <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_7_NOUS_JOINDRE) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_4_7_NOUS_JOINDRE) }}</a></li> --}}
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_11_0_NOUVELLES) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_11_0_NOUVELLES) }}</a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_12_0_BLOUGE) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_12_0_BLOUGE) }}</a></li>
                <li class="menu-item"><a class="nav-link scroll-to" href="#" data-target="#form-newsletter">{{ pll__('Infolettre') }}</a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_6_CARRIERE) }}">{{ PageHelper::get_page_title(PageHelper::PAGE_4_6_CARRIERE) }}</a></li>
                <li class="menu-item"><a class="nav-link text-red" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-01">{{ pll__('Demander une soumission') }}</a></li>
            </ul>
        </nav>

        <nav class="nav-bottom">
            <ul class="nav-link-container">
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_0_ACCUEIL, 'has_submenu' => false, 'submenu_id' => null])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_4_0_A_PROPOS, 'has_submenu' => false, 'submenu_id' => null])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_7_0_PRODUITS_IMPRESSION, 'has_submenu' => true, 'submenu_id' => 6])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_6_0_SERVICES, 'has_submenu' => true, 'submenu_id' => 2])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_8_0_LOGICELS, 'has_submenu' => true, 'submenu_id' => 7])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_4_7_NOUS_JOINDRE, 'has_submenu' => false, 'submenu_id' => null ])
               {{--  @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_1_0_APPROCHE_CONSEIL, 'has_submenu' => true, 'submenu_id' => 1])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_2_0_PRODUITS_SOLUTIONS, 'has_submenu' => true, 'submenu_id' => 2])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_3_0_ASSISTANCE, 'has_submenu' => true, 'submenu_id' => 3])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_4_0_A_PROPOS, 'has_submenu' => true, 'submenu_id' => 4])
                @include('partials.components.header.main-nav-link-atom', ['page_id' => PageHelper::PAGE_5_0_PUBLICATIONS, 'has_submenu' => false,   'submenu_id' => null]) --}}
            </ul>
        </nav>
    </div>
    <div class="nav-contact-us col-xs-2">
        <a class="contact-us-link open-contact-form" href="#">

        </a>
        <div class="contact-us-text link-account justify-center">
            <div class="flex items-center justify-center"><i class="far fa-user-circle fa-2x mr-1" aria-hidden="true"></i> <span>{{ pll__('ZONE CLIENT') }}</span>  <i class="ml-2 fas fa-angle-right fa-lg"></i></div>
        </div>

    </div>

</div> <!-- SECTION END -->