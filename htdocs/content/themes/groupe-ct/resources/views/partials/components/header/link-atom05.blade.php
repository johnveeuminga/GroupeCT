<li class="menu-item">
    <a class="nav-link @if($submenu_id)nl{{ $submenu_id }} has-submenu @endif" href="{{ PageHelper::get_page_permalink($page_id) }}">{{ PageHelper::get_page_title($page_id) }}</a>
    <a class="sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
    <a class="sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
    <div class="sub-menu-container-mobile nl5">
        <div class="nav-sub-container row">
            <nav class="nav-sub">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title sub-sub-menu"><a href="#">{{ __('GESTION ÉLECTRONIQUE DES DOCUMENTS', 'GROUPE-CT') }}</a></h3>
                    <a class="sub-sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <a class="sub-sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                </div>
                <ul class="nav-link-container have-toggle">
                     @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_1_1, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_1_2, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_1_3, 'red_arrow' => false])
                </ul>
            </nav>
            <nav class="nav-sub">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a class="sub-sub-menu" href="/product-brands">{{ __("GESTION D'IMPRESSION", 'GROUPE-CT') }}</a></h3>
                    <a class="sub-sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <a class="sub-sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                </div>
                <ul class="nav-link-container have-toggle">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_2_1, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_2_2, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_2_3, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_2_4, 'red_arrow' => false])
                </ul>
            </nav>
        </div>
    </div>
</li>