<div class="sub-menu-main-container">

    <div class="sub-menu-container nl1 row hide-from-screen">

        <div class="nav-sub-container row">
            <nav class="nav-sub nav-sub-left col-xs-6 col-xs-offset-2">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_1_0_APPROCHE_CONSEIL) }}"><?= pll__('Un accompagnement sur mesure adapté à votre entreprise', GROUPE_CT) ?></a></h3>
                </div>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_1_ENVIRONNEMENT_PAPIER, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_2_ENVIRONNEMENT_HYBRIDE, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_1_3_ENVIRONNEMENT_NUMERIQUE, 'red_arrow' => true])
                </ul>
            </nav>
        </div>
    </div>

    <div class="sub-menu-container nl2 row hide-from-screen">

        <div class="sub-menu-title-container col-xs-10 col-xs-offset-2">
            <h3  class="sub-menu-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_0_PRODUITS_SOLUTIONS) }}"><?= pll__('Des solutions qui travaillent en synergie', GROUPE_CT) ?></a></h3>
        </div>

        <div class="nav-sub-container row">
            <nav class="nav-sub nav-sub-left col-xs-3 col-xs-offset-2">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU) }}"><?= pll__('Équipements d\'impression', GROUPE_CT) ?></a></h3>
                </div>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_1_4_FOURNITURES, 'red_arrow' => true])
                </ul>
            </nav>
            <nav class="nav-sub nav-sub-center col-xs-3">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_2_1_PARC_IMPRESSION) }}"><?= pll__('Services d\'impression gérés', GROUPE_CT) ?></a></h3>
                </div>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_1_PARC_IMPRESSION, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_2_RECUPERATION_COUT, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_3_FOLLOW_ME_PRINTING, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_2_4_AUTOMATISATION_FLUX, 'red_arrow' => true])
                </ul>
            </nav>
            <nav class="nav-sub nav-sub-right col-xs-3">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_2_3_1_NUMERISATION_INTELLIGENTE) }}"><?= pll__('Gestion électronique des documents', GROUPE_CT) ?></a></h3>
                </div>
                <ul class="nav-link-container">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_1_NUMERISATION_INTELLIGENTE, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_2_NUMERISATION_TRAITEMENT, 'red_arrow' => true])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_2_3_3_ARCHIVAGE, 'red_arrow' => true])
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

</div> <!-- SUB MENU MAIN CONTAINER END -->
