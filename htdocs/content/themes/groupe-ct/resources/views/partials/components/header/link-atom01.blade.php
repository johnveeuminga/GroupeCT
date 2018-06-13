<li class="menu-item">
    <a class="nav-link @if($submenu_id)nl{{ $submenu_id }} has-submenu @endif" href="{{ PageHelper::get_page_permalink($page_id) }}">{{ PageHelper::get_page_title($page_id) }}</a>
    <a class="sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
    <a class="sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
    <div class="sub-menu-container-mobile nl1">
        <nav class="nav-sub">
            <ul class="nav-link-container no-toggle">
                @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_1_ENVIRONNEMENT_PAPIER])
                @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_2_ENVIRONNEMENT_HYBRIDE])
                @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_3_ENVIRONNEMENT_NUMERIQUE])
            </ul>
        </nav>
    </div>

</li>