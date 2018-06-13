<li class="menu-item">
    <a class="nav-link @if($submenu_id)nl{{ $submenu_id }} has-submenu @endif" href="{{ PageHelper::get_page_permalink($page_id) }}">{{ PageHelper::get_page_title($page_id) }}</a>
    <a class="sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
    <a class="sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
    <div class="sub-menu-container-mobile nl2">
        <div class="nav-sub-container row">
            <nav class="nav-sub">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a class="sub-sub-menu" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU) }}"><?= pll__('Équipements d\'impression', GROUPE_CT) ?></a></h3>
                    <a class="sub-sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <a class="sub-sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                </div>
                <ul class="nav-link-container have-toggle">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_4_FOURNITURES])
                </ul>
            </nav>
            <nav class="nav-sub">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a class="sub-sub-menu" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_2_1_PARC_IMPRESSION) }}"><?= pll__('Services d\'impression gérés', GROUPE_CT) ?></a></h3>
                    <a class="sub-sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <a class="sub-sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                </div>
                <ul class="nav-link-container have-toggle">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_1_PARC_IMPRESSION])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_2_RECUPERATION_COUT])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_3_FOLLOW_ME_PRINTING])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_4_AUTOMATISATION_FLUX])
                </ul>
            </nav>
            <nav class="nav-sub">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a class="sub-sub-menu" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_3_1_NUMERISATION_INTELLIGENTE) }}"><?= pll__('Gestion électronique des documents', GROUPE_CT) ?></a></h3>
                    <a class="sub-sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <a class="sub-sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                </div>
                <ul class="nav-link-container have-toggle">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_1_NUMERISATION_INTELLIGENTE])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_2_NUMERISATION_TRAITEMENT])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_3_ARCHIVAGE])
{{--                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_4_AUTOMATISATION_PROCESSUS])--}}
                </ul>
            </nav>
        </div>
    </div>
</li>