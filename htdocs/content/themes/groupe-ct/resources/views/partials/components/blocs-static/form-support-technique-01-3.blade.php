<div id="_section-01" class="toggle-main-container">
    <div class="toggle-content-header">
        <div class="toggle-title-container">
            <h3 class="toggle-content-title" href="">{{ pll__('Accéder à Mon CT') }}</h3>
        </div>
        <img class="toggle-content-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.svg" alt="">
        <div class="triangle-blue"></div>
        <a class="open-toggle-content" href="#"></a>
    </div>

    <div class="toggle-content">
        <form id="form-my-ct" class="form-container">
            <div class="text-container col-xs-12">
                <p>{{ nl2br(pll__('Accéder CT - Description')) }}</p>
            </div>
            <div class="form-content-container">
                <div class="form-left-container col-sm-6" style="margin:auto;">
                    <a class="my-ct-link primary-btn-blue" href="https://einfo.groupect.com/Gateway/Login?ReturnUrl=%2f" target="_blank">{{ pll__('Groupe CT') }}</a>
                </div>

                {{--<div class="form-right-container col-sm-6">
                    <a class="my-ct-link primary-btn-blue" href="https://einfo.sacgroupect.com/Gateway/Login?ReturnUrl=%2f" target="_blank">{{ pll__('Solutions d\'affaires de la Capitale') }}</a>
                </div>--}}
            </div>
        </form>
    </div>
</div>


