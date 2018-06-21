<div class="sub-menu-main-container">

    <div class="sub-menu-container nl6 row hide-from-screen">

        <div class="nav-sub-container row flex justify-center">
            <nav class="nav-sub col-sm-3 px-4">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title border-white border-b-2 border-solid"><a href="/product-categories">{{ __('PAR CATÉGORIE', 'GROUPE-CT') }}</a></h3>
                </div>
                <ul class="nav-link-container">
                    @foreach($product_types as $product_type)
                        <li class="menu-item">
                            <a href="{{get_term_link($product_type)}}" class="nav-link">{{ __($product_type->name, 'GROUPE-CT') }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <nav class="nav-sub col-sm-3 px-4">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title border-white border-b-2 border-solid"><a href="/product-brands">{{ __('PAR MARQUE', 'GROUPE-CT') }}</a></h3>
                </div>
                <ul class="nav-link-container">
                    @foreach($brands as $brand)
                        <li class="menu-item">
                            <a href="{{get_term_link($brand->term_id)}}" class="nav-link">{{ __($brand->name, 'GROUPE-CT') }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <nav class="nav-sub col-sm-3 px-4">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title border-white border-b-2 border-solid"><a href="#">{{ __('FOURNITURES', 'GROUPE-CT') }}</a></h3>
                </div>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_7_1_1, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_7_1_2, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_7_1_3, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_7_1_4, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_7_1_5, 'red_arrow' => false])
                </ul>
            </nav>
        </div>
    </div>

    <div class="sub-menu-container nl7 row hide-from-screen">
        <div class="nav-sub-container row flex justify-center">
            <nav class="nav-sub nav-sub-left col-sm-4 px-4">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title border-white border-b-2 border-solid">{{__('GESTION ÉLECTRONIQUE DES DOCUMENTS', 'GROUPE-CT')}}</h3>
                    <ul class="nav-link-container">
                        @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_1_1, 'red_arrow' => false])
                        @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_1_2, 'red_arrow' => false])
                        @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_1_3, 'red_arrow' => false])
                    </ul>
                </div>
            </nav>
            <nav class="nav-sub nav-sub-left col-sm-4 px-4">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title border-white border-b-2 border-solid">{{__("GESTION D'IMPRESSION", 'GROUPE-CT')}}</h3>
                    <ul class="nav-link-container">
                        @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_2_1, 'red_arrow' => false])
                        @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_2_2, 'red_arrow' => false])
                        @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_2_3, 'red_arrow' => false])
                        @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_8_2_4, 'red_arrow' => false])
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="sub-menu-container nl2 row hide-from-screen">
        <div class="nav-sub-container row flex justify-end">
            <nav class="nav-sub nav-sub-left col-sm-4 px-4">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title border-white border-b-2 border-solid">{{__('Approche-Conseil', 'GROUPE-CT')}}</h3>
                </div>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_1_1_AMELIORATION, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_1_2_CONTROLE_DES_COUTS, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_1_3_SECURITE_CONFIDENTIALITE, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_1_4_REDUCTION_ENVIRONNEMENTALE, 'red_arrow' => false])
                </ul>
            </nav>
            <nav class="nav-sub nav-sub-right col-sm-4 px-4">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title border-white border-b-2 border-solid">{{ __('Nos services', 'GROUPE-CT')}}</h3>
                </div>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_2_1_REPARATION_DIMPRESSION, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_2_2_SERVICES_GERES, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_2_3_AMERLIORATION_PROCESSUS, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_2_4_FACTURATION_CONSOLIDEE, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_6_2_5_COMMANDES, 'red_arrow' => false])
{{--                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_4_AUTOMATISATION_PROCESSUS])--}}
                </ul>
            </nav>
        </div>
    </div>

    <div class="sub-menu-container nl3 row hide-from-screen">

        <div class="sub-menu-title-container col-xs-10 col-xs-offset-2">
            <h2 class="sub-menu-title"></h2>
        </div>

        <div class="nav-sub-container row">
            <nav class="nav-sub nav-sub-left col-xs-6 col-xs-offset-2">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}"><?= pll__('L\'Assistance technique CT : l\'efficacité sur toute la ligne', GROUPE_CT) ?></a></h3>
                </div>

                <ul class="nav-link-container">
                    <li class="menu-item"><a class="nav-link {{ PageHelper::get_page_id(PageHelper::PAGE_3_0_ASSISTANCE) === get_the_ID() ? 'scroll-to' : '' }}" data-target="#_section-01" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-01"><?= pll__('Accéder à Mon CT', GROUPE_CT) ?></a><img class="arrow-hover" src="{{ themosis_assets() }}/images/icon/icon-red-arrow.svg" /></li>
                    <li class="menu-item"><a class="nav-link {{ PageHelper::get_page_id(PageHelper::PAGE_3_0_ASSISTANCE) === get_the_ID() ? 'scroll-to' : '' }}" data-target="#_section-02" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-02"><?= pll__('Compléter une demande d\'assistance', GROUPE_CT) ?></a><img class="arrow-hover" src="{{ themosis_assets() }}/images/icon/icon-red-arrow.svg" /></li>
                    <li class="menu-item"><a class="nav-link {{ PageHelper::get_page_id(PageHelper::PAGE_3_0_ASSISTANCE) === get_the_ID() ? 'scroll-to' : '' }}" data-target="#_section-03" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-03"><?= pll__('Commander des fournitures', GROUPE_CT) ?></a><img class="arrow-hover" src="{{ themosis_assets() }}/images/icon/icon-red-arrow.svg" /></li>
                    <li class="menu-item"><a class="nav-link {{ PageHelper::get_page_id(PageHelper::PAGE_3_0_ASSISTANCE) === get_the_ID() ? 'scroll-to' : '' }}" data-target="#_section-04" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-04"><?= pll__('Contacter le service à la clientèle', GROUPE_CT) ?></a><img class="arrow-hover" src="{{ themosis_assets() }}/images/icon/icon-red-arrow.svg" /></li>
                    <li class="menu-item"><a class="nav-link {{ PageHelper::get_page_id(PageHelper::PAGE_3_0_ASSISTANCE) === get_the_ID() ? 'scroll-to' : '' }}" data-target="#_section-05" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-05"><?= pll__('Fournir une lecture de compteurs', GROUPE_CT) ?></a><img class="arrow-hover" src="{{ themosis_assets() }}/images/icon/icon-red-arrow.svg" /></li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="sub-menu-container nl4 row hide-from-screen">

        <div class="sub-menu-title-container col-xs-10 col-xs-offset-2">
            <h2 class="sub-menu-title"></h2>
        </div>

        <div class="nav-sub-container row">
            <nav class="nav-sub nav-sub-left col-xs-6 col-xs-offset-2">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_4_0_A_PROPOS) }}"><?= pll__('Une entreprise à taille humaine', GROUPE_CT) ?></a></h3>
                </div>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_1_MOT_DIRECTION, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_2_DIVISIONS, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_3_HISTORIQUE, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_4_EQUIPE, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_5_DEVELOPPEMENT_DURABLE, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_6_CARRIERE, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_4_7_NOUS_JOINDRE, 'red_arrow' => true])
                </ul>
            </nav>
        </div>
    </div>

    <div class="sub-menu-container nl8 row hide-from-screen">

        <div class="sub-menu-title-container col-xs-10 col-xs-offset-2">
            <h2 class="sub-menu-title"></h2>
        </div>

        <div class="nav-sub-container row justify-end">
            <nav class="nav-sub nav-sub-left col-xs-4 col-xs-offset-2">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><?= pll__('Zone Client', GROUPE_CT) ?></a></h3>
                </div>
                <ul class="nav-link-container">
                  <li class="menu-item">
                      <a href="https://einfo.groupect.com/Gateway/Login?ReturnUrl=%2f" class="nav-link" target="_blank">{!! __('Accéder à mon CT', 'GROUPE-CT') !!}</a>
                  </li>
                  <li class="menu-item">
                      <a href="https://www.groupect.com/assistance-technique/#section-02" class="nav-link" target="_blank">{!! __("Remplir une demande d'assistance", 'GROUPE-CT') !!}</a>
                  </li>
                  <li class="menu-item">
                      <a href="https://www.groupect.com/assistance-technique/#section-03" class="nav-link" target="_blank">{!! __("Commander des fournitures", 'GROUPE-CT') !!}</a>
                  </li>
                  <li class="menu-item">
                      <a href=" https://www.groupect.com/assistance-technique/#section-04" class="nav-link" target="_blank">{!! __("Service à la clientèle", 'GROUPE-CT') !!}</a>
                  </li>
                </ul>
            </nav>
        </div>
    </div>

</div> <!-- SUB MENU MAIN CONTAINER END -->
