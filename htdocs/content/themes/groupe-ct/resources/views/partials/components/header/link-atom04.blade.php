<li class="menu-item">
    <a class="nav-link @if($submenu_id)nl{{ $submenu_id }} has-submenu @endif" href="{{ PageHelper::get_page_permalink($page_id) }}">{{ PageHelper::get_page_title($page_id) }}</a>
    <a class="sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
    <a class="sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>

    <div class="sub-menu-container-mobile nl3">
        <nav class="nav-sub">
            <ul class="nav-link-container">
                @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_1_MOT_DIRECTION])
                @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_2_DIVISIONS])
                @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_3_HISTORIQUE])
                @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_4_EQUIPE])
                @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_5_DEVELOPPEMENT_DURABLE])
                @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_6_CARRIERE])
                @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_7_NOUS_JOINDRE])
            </ul>
        </nav>
    </div>
</li>