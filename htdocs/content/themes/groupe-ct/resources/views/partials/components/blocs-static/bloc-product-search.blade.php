<div class="bloc-name row">
    <h1>BLOC PRODUCT SEARCH</h1>
</div>



<div class="bloc-product-search-main-container">

    <div class="bloc-product-container">
        <div class="product-dropdown-container default-padding">
            <h3 class="select-title">Sélectionnez le type d’équipement</h3>
            <select name="dropdown-equipment" id="">
                <option value="" selected>Équipement de bureau</option>
                <option value="">Grand format</option>
                <option value="">Fourniture</option>
            </select>
        </div>


        <nav class="nav-type-container default-width">
            <ul class="menu-item-container">
                <li class="menu-item item-type-active"><a class="" href="#"><?php _e('Équipement de bureau', THEME_TEXTDOMAIN); ?></a></li>
                <li class="menu-item"><a class="" href="#"><?php _e('Équipement de production', THEME_TEXTDOMAIN); ?></a></li>
                <li class="menu-item"><a class="" href="#"><?php _e('Grand format', THEME_TEXTDOMAIN); ?></a></li>
                <li class="menu-item"><a class="" href="#"><?php _e('Fourniture', THEME_TEXTDOMAIN); ?></a></li>
            </ul>
        </nav>
        <div class="nav-cat-main-container">
            <!-- insert product category as a class in the <a> -->
            <nav class="nav-cat-container default-padding default-width">
                <h3 class="select-title"><?php _e('Sélectionnez la catégorie de votre choix', THEME_TEXTDOMAIN); ?></h3>
                <ul class="menu-item-container">
                    <li class="menu-item"><a class="primary-btn-blue-sky prod-printer" href="#"><?php _e('Imprimante', THEME_TEXTDOMAIN); ?></a></li>
                    <li class="menu-item"><a class="primary-btn-blue-sky prod-multia4" href="#"><?php _e('Multifonction A4', THEME_TEXTDOMAIN); ?></a></li>
                    <li class="menu-item"><a class="primary-btn-blue-sky prod-multia3" href="#"><?php _e('Multifonction A3', THEME_TEXTDOMAIN); ?></a></li>
                    <li class="menu-item"><a class="primary-btn-blue-sky prod-num" href="#"><?php _e('Numérisateur', THEME_TEXTDOMAIN); ?></a></li>
                </ul>
            </nav>

            <div class="product-main-container default-padding default-width">
                <!-- THE ELEMENT START  -->
                @for ($i = 1; $i <= 3; $i++)
                    <!-- insert product category as a class in the .product-container -->
                    <div class="product-container prod-num">
                        <div class="product-inner-container">
                            <div class="product-img-container">
                                <img class="product-img" src="{{ themosis_assets() }}/images/product/printer.png" alt="">
                            </div>
                            <div class="product-text-container">
                                <h3 class="product-title">Nom du produit lorem ipsum dolor isit ametsetire frol ipsum</h3>
                                <p class="product-desc">Lorem ipsum dolor sit, consectetur adipiscing elit, sed eiusmod tempor...
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                <a class="brochure-download-pdf-blue" href="#"><?php _e('BROCHURE', THEME_TEXTDOMAIN); ?></a>
                            </div>
                        </div>
                    </div>
                @endfor
                @for ($i = 1; $i <= 2; $i++)
                    <div class="product-container prod-printer">
                        <div class="product-inner-container">
                            <div class="product-img-container">
                                <img class="product-img" src="{{ themosis_assets() }}/images/logo/logo-hp.png" alt="">
                            </div>
                            <div class="product-text-container">
                                <h3 class="product-title">Nom du produit lorem ipsum dolor isit ametsetire frol ipsum</h3>
                                <p class="product-desc">Lorem ipsum dolor sit, consectetur adipiscing elit, sed eiusmod tempor...
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                <a class="brochure-download-pdf-blue" href="#"><?php _e('BROCHURE', THEME_TEXTDOMAIN); ?></a>
                            </div>
                        </div>
                    </div>
                @endfor
                @for ($i = 1; $i <= 4; $i++)
                    <div class="product-container prod-multia4">
                        <div class="product-inner-container">
                            <div class="product-img-container">
                                <img class="product-img" src="{{ themosis_assets() }}/images/logo-canon.png" alt="">
                            </div>
                            <div class="product-text-container">
                                <h3 class="product-title">Nom du produit lorem ipsum dolor isit ametsetire frol ipsum</h3>
                                <p class="product-desc">Lorem ipsum dolor sit, consectetur adipiscing elit, sed eiusmod tempor...
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                <a class="brochure-download-pdf-blue" href="#"><?php _e('BROCHURE', THEME_TEXTDOMAIN); ?></a>
                            </div>
                        </div>
                    </div>
            @endfor
                @for ($i = 1; $i <= 7; $i++)
                    <div class="product-container prod-multia3">
                        <div class="product-inner-container">
                            <div class="product-img-container">
                                <img class="product-img" src="{{ themosis_assets() }}/images/printer01.png" alt="">
                            </div>
                            <div class="product-text-container">
                                <h3 class="product-title">Nom du produit lorem ipsum dolor isit ametsetire frol ipsum</h3>
                                <p class="product-desc">Lorem ipsum dolor sit, consectetur adipiscing elit, sed eiusmod tempor...
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                                <a class="brochure-download-pdf-blue" href="#"><?php _e('BROCHURE', THEME_TEXTDOMAIN); ?></a>
                            </div>
                        </div>
                    </div>
            @endfor
            <!-- THE ELEMENT END  -->
            </div>

        </div>


    </div>

</div>

