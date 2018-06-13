<li class="menu-item">
    <a class="nav-link @if($submenu_id)nl{{ $submenu_id }} has-submenu @endif" href="{{ PageHelper::get_page_permalink($page_id) }}">{{ PageHelper::get_page_title($page_id) }}</a>
    @if ($has_submenu)
        <div class="menu-item-triangle">
            <img class="triangle" src="{{ themosis_assets() }}/images/icon/icon-white-triangle-big.svg">
        </div>

    @endif
</li>