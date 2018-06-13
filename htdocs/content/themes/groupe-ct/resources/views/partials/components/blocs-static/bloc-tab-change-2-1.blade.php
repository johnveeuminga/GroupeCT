@include('partials.components.blocs-dynamic.bloc_19', [
    'block' => null,
    'bloc_19_subheader_carret' => false,
    'bloc_19_subheader' => false,
    'bloc_19_center_subheader' => false,
    'bloc_19_center_title' => false,
    'bloc_19_center_description' => false,
    'bloc_19_background_color' => 'inherit',
    'bloc_19_remove_padding' => true,
    'bloc_19_remove_margin' => false,

    'bloc_19_title' => pll__('Maîtrisez le potentiel de vos nouveaux équipements'),
    'bloc_19_description' => pll__('Gestion changement description 2'),
])

<div class="bloc-container default-width">
    <div class="bloc-tab-change-main-container default-padding">

        <div class="tab-change-container tc01">
            <div class="tab-change-title-container">
                <div class="tab-change-img-container">
                    <img class="tab-change-icon" src="{{ themosis_assets() }}/images/icon/icon-planif.svg" alt="">
                </div>

                <h2 class="tab-change-title">{{ pll__('PLANIFICATION') }}</h2>
            </div>
            <div class="tab-change-content-container">
                <h3 class="tab-change-content-title">{{ pll__('Préparer et organiser l\'installation') }}</h3>
                 <ul>
                    <li class="tab-change-content">{{ pll__('Mise en marche et préparation de l\'appareil en atelier') }}</li>
                    <li class="tab-change-content">{{ pll__('Préconfiguration de l\'appareil en entrepôt pour limiter le temps d\'installation chez le client') }}</li>
                    <li class="tab-change-content">{{ pll__('Planification de l\'installation en fonction des besoins techniques et des particularités physiques et opérationnelles de votre entreprise') }}</li>
                 </ul>
            </div>
            <div class="triangle">

            </div>
            <div class="triangle-border">

            </div>
        </div>

        <div class="tab-change-container tc01">
            <div class="tab-change-title-container">
                <div class="tab-change-img-container">
                    <img class="tab-change-icon" src="{{ themosis_assets() }}/images/icon/icon-install.svg" alt="">
                </div>

                <h2 class="tab-change-title">{{ pll__('EXÉCUTION ET INSTALLATION') }}</h2>
            </div>
            <div class="tab-change-content-container">
                <h3 class="tab-change-content-title">{{ pll__('Livrer et mettre en place sans tracas') }}</h3>
                <ul>
                    <li class="tab-change-content">{{ pll__('Exécution selon vos besoins opérationnels') }}</li>
                    <li class="tab-change-content">{{ pll__('Installation et configuration des pilotes d\'impression selon vos exigences') }}</li>
                    <li class="tab-change-content">{{ pll__('Vérification pour que les appareils fonctionnent selon les spécifications demandées') }}</li>
                </ul>
            </div>
            <div class="triangle"></div>
            <div class="triangle-border">

            </div>
        </div>

        <div class="tab-change-container tc01">
            <div class="tab-change-title-container">
                <div class="tab-change-img-container">
                    <img class="tab-change-icon" src="{{ themosis_assets() }}/images/icon/icon-formation.svg" alt="">
                </div>

                <h2 class="tab-change-title">{{ pll__('FORMATION') }}</h2>
            </div>
            <div class="tab-change-content-container">
                <h3 class="tab-change-content-title">{{ pll__('Informer sur le plein potentiel de l\'équipement') }}</h3>
                <ul>
                    <li class="tab-change-content">{{ pll__('Formation ciblée sur les besoins des utilisateurs') }}</li>
                    <li class="tab-change-content">{{ pll__('Formation de personnes ressources chez le client') }}</li>
                    <li class="tab-change-content">{{ pll__('Offre de formations supplémentaires au besoin') }}</li>
                </ul>
            </div>
            <div class="triangle"></div>
            <div class="triangle-border">

            </div>
        </div>

        <div class="tab-change-container tc01">
            <div class="tab-change-title-container">
                <div class="tab-change-img-container">
                    <img class="tab-change-icon" src="{{ themosis_assets() }}/images/icon/icon-follow.svg" alt="">
                </div>

                <h2 class="tab-change-title">{{ pll__('SUIVI ET AMÉLIORATION CONTINUE') }}</h2>
            </div>
            <div class="tab-change-content-container">
                <h3 class="tab-change-content-title">{{ pll__('Accompagner à long terme') }}</h3>
                <ul>
                    <li class="tab-change-content">{{ pll__('Soutien technique fiable et efficace') }}</li>
                    <li class="tab-change-content">{{ pll__('Rapports de performance périodiques de vos appareils d\'impression') }}</li>
                    <li class="tab-change-content">{{ pll__('Conseils et optimisation en continu selon vos besoins opérationnels') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
