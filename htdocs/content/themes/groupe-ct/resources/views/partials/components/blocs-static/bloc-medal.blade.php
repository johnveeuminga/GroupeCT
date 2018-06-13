<div class="prod-logiciel-main-container bloc-medal default-padding default-width">
    <div class="prod-logiciel-container"><!-- reverse-elem : to swap img and text div -->
        <div class="prod-logiciel-img-container">
            <a class="youtube-lity" href='<iframe width="560" height="315" src="https://www.youtube.com/embed/uo2dRacms_c" frameborder="0" allowfullscreen></iframe>' data-lity></a>
            <img class="img-video shadow" src="{{ themosis_assets() }}/images/img/img-medaille-bg-video-{{ pll_current_language() }}.jpg">
        </div>
        <div class="buffer"></div>
        <div class="prod-logiciel-text-container">
            <div class="medaille-container">
                <img src="{{ themosis_assets() }}/images/img/img-medaille.png">
                <h2>{{ pll__('LES MÉDAILLÉS DE LA RELÈVE') }}</h2>
            </div>
            <p class="prod-logiciel-text">{!! nl2br(pll__('medaille description')) !!}</p>

        </div>
    </div>
</div><!-- prod-logiciel MAIN CONTAINER END -->

