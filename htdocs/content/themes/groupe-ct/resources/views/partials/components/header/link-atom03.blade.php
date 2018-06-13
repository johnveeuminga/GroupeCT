<li class="menu-item">
    <a class="nav-link @if($submenu_id)nl{{ $submenu_id }} has-submenu @endif" href="{{ PageHelper::get_page_permalink($page_id) }}">{{ PageHelper::get_page_title($page_id) }}</a>
    <a class="sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
    <a class="sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>

    <div class="sub-menu-container-mobile nl3">
        <nav class="nav-sub">
            <ul class="nav-link-container">
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-01"><?= pll__('Accéder à Mon CT', GROUPE_CT) ?></a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-02"><?= pll__('Compléter une demande d\'assistance', GROUPE_CT) ?></a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-03"><?= pll__('Commander des fournitures', GROUPE_CT) ?></a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-04"><?= pll__('Contacter le service à la clientèle', GROUPE_CT) ?></a></li>
                <li class="menu-item"><a class="nav-link" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-05"><?= pll__('Fournir une lecture de compteurs', GROUPE_CT) ?></a></li>
            </ul>
        </nav>
    </div>
</li>