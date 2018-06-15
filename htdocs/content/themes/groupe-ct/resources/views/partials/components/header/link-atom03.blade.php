<li class="menu-item">
    <a class="nav-link @if($submenu_id)nl{{ $submenu_id }} has-submenu @endif" href="{{ PageHelper::get_page_permalink($page_id) }}">{{ PageHelper::get_page_title($page_id) }}</a>
    <a class="sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
    <a class="sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
    <div class="sub-menu-container-mobile nl8">
        <div class="nav-sub-container row">
            <nav class="nav-sub">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title sub-sub-menu"><a href="#">{{ __("L'approche conseil", 'GROUPE-CT') }}</a></h3>
                    <a class="sub-sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <a class="sub-sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                </div>
                <ul class="nav-link-container have-toggle">
                     @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_1_1_AMELIORATION, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_1_2_CONTROLE_DES_COUTS, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_1_3_SECURITE_CONFIDENTIALITE, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_1_4_REDUCTION_ENVIRONNEMENTALE, 'red_arrow' => false])
                </ul>
            </nav>
            <nav class="nav-sub">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title sub-sub-menu"><a href="#">{{ __("Nos services", 'GROUPE-CT') }}</a></h3>
                    <a class="sub-sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <a class="sub-sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                </div>
                <ul class="nav-link-container have-toggle">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_2_1_REPARATION_DIMPRESSION, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_2_2_SERVICES_GERES, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_2_3_AMERLIORATION_PROCESSUS, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_2_4_FACTURATION_CONSOLIDEE, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_2_5_COMMANDES, 'red_arrow' => false])
                </ul>
            </nav>
        </div>
    </div>
</li>