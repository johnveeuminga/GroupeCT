<div class="bloc-contact-container default-padding default-width static-4-7">

    <div class="contact-container">
        <div class="inner-container">
            <div class="about-img-container">
                <img class="contact-icon" src="{{ themosis_assets() }}/images/icon/icon-help.svg" alt="">
            </div>
            <h2 class="contact-title">{!!  pll__('Demander<br/>conseil') !!}</h2>
            <p class="contact-text">{!! nl2br(pll__('Contact nous joindre col 1')) !!}</p>
            <a class="contact-link-cta open-contact-form" href="#"><img class="contact-cta" src="{{ themosis_assets() }}/images/icon/icon-cta-arrow-white.svg" alt=""></a>
        </div>
    </div>

    <div class="contact-container">
        <div class="inner-container">
            <div class="about-img-container">
                <img class="contact-icon" src="{{ themosis_assets() }}/images/icon/icon-assist.svg" alt="">
            </div>
            <h2 class="contact-title">{{ pll__('Assistance technique') }}</h2>
            <p class="contact-text">{!! nl2br(pll__('Contact nous joindre col 2')) !!}</p>
            <a class="contact-link-cta" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-02"><img class="contact-cta" src="{{ themosis_assets() }}/images/icon/icon-cta-arrow-white.svg" alt=""></a>
        </div>
    </div>

    <div class="contact-container">
        <div class="inner-container">
            <div class="about-img-container">
                <img class="contact-icon" src="{{ themosis_assets() }}/images/icon/icon-fourniture.svg" alt="">
            </div>
            <h2 class="contact-title">{{ pll__('Commande de fournitures') }}</h2>
            <p class="contact-text">{!! nl2br(pll__('Contact nous joindre col 3')) !!}</p>
            <a class="contact-link-cta" href="{{ PageHelper::get_page_permalink(PageHelper::PAGE_3_0_ASSISTANCE) }}#section-03"><img class="contact-cta" src="{{ themosis_assets() }}/images/icon/icon-cta-arrow-white.svg" alt=""></a>
        </div>
    </div>

</div>

