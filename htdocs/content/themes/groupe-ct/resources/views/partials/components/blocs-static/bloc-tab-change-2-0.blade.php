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

    'bloc_19_title' => pll__('Accompagnement sur mesure à chaque étape'),
    'bloc_19_description' => pll__('Gestion changement description 1'),
])

<div class="bloc-container default-width">
    <div class="bloc-tab-change-main-container">

        <div class="tab-change-container tc01">
            <div class="tab-change-title-container">
                <div class="tab-change-img-container">
                    <img class="tab-change-icon" src="{{ themosis_assets() }}/images/icon/icon-planif.svg" alt="">
                </div>

                <h2 class="tab-change-title">{{ pll__('PLANIFICATION') }}</h2>
            </div>
            <div class="tab-change-content-container">
                <h3 class="tab-change-content-title">{{ pll__('Prévoir selon vos besoins') }}</h3>
                <ul>
                    <li class="tab-change-content">{{ pll__('Identification des usagers et des départements touchés par le changement') }}</li>
                    <li class="tab-change-content">{{ pll__('Confirmation de la compatibilité avec l\'infrastructure') }}</li>
                    <li class="tab-change-content">{{ pll__('Communication des changements à venir aux gens concernés et échéancier') }}</li>
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
                <h3 class="tab-change-content-title">{{ pll__('Implanter de façon fluide') }}</h3>
                <ul>
                    <li class="tab-change-content">{{ pll__('Respect de l\'échéancier établi') }}</li>
                    <li class="tab-change-content">{{ pll__('Déploiement et configuration de l\'installation selon vos besoins') }}</li>
                    <li class="tab-change-content">{{ pll__('Vérification de conformité aux attentes établies et de fonctionnalité des usagers avec les nouveaux appareils') }}</li>
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
                <h3 class="tab-change-content-title">{{ pll__('Assurer une utilisation efficace') }}</h3>
                <ul>
                    <li class="tab-change-content">{{ pll__('Formation orientée selon vos besoins opérationnels') }}</li>
                    <li class="tab-change-content">{{ pll__('Formation donnée dans votre environnement') }}</li>
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
                <h3 class="tab-change-content-title">{{ pll__('Maintenir une performance durable') }}</h3>
                <ul>
                    <li class="tab-change-content">{{ pll__('Assistance technique au besoin') }}</li>
                    <li class="tab-change-content">{{ pll__('Rapports de performance périodiques') }}</li>
                    <li class="tab-change-content">{{ pll__('Accompagnement en continu pour vous informer et vous conseiller sur les meilleures pratiques pouvant bonifier votre environnement') }}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
