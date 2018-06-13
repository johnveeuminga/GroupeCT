<ul class="menu-item-container">
    @if (PageHelper::get_page_id(PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU) === get_the_ID())
        <li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-1-a" href="#">{{ pll__('Imprimantes') }}</a></li>
        <li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-1-b" href="#">{{ pll__('Multifonctions noir et blanc') }}</a></li>
        <li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-1-c" href="#">{{ pll__('Multifonctions couleur') }}</a></li>
        <li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-1-d" href="#">{{ pll__('Numériseurs') }}</a></li>
    @endif
    @if (PageHelper::get_page_id(PageHelper::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION) === get_the_ID())
        <li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-2-a" href="#">{{ pll__('Production de bas volume') }}</a></li>
        <li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-2-b" href="#">{{ pll__('Production numérique') }}</a></li>
        {{--<li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-2-c" href="#">{{ pll__('Production de haut volume') }}</a></li>--}}
    @endif
    @if (PageHelper::get_page_id(PageHelper::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT) === get_the_ID())
        <li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-3-a" href="#">{{ pll__('Impression de plan') }}</a></li>
        <li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-3-b" href="#">{{ pll__('Impression graphique') }}</a></li>
        <li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-3-c" href="#">{{ pll__('Impression de haut volume') }}</a></li>
    @endif
    @if (PageHelper::get_page_id(PageHelper::PAGE_2_1_4_FOURNITURES) === get_the_ID())
        <li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-4-a" href="#">{{ pll__('Consommables pour grands formats') }}</a></li>
        <li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-4-b" href="#">{{ pll__('Consommables pour imprimantes') }}</a></li>
        <li class="menu-item"><a class="primary-btn-blue-sky" data-target="2-1-4-c" href="#">{{ pll__('Papiers spécialisés') }}</a></li>
    @endif
</ul>
