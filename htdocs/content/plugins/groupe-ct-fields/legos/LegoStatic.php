<?php

/**
 * Class LegoStatic
 * Charge les blocs statiques sur demande
 */
class LegoStatic extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
			$this->generate_select('bloc_static_file', 'Bloc Static', [
			    'bloc-a-propos-3-col-4-0' => 'Bloc à propos 3 colonnes - 4.0',
			    'bloc-a-propos-3-col-4-7' => 'Bloc à propos 3 colonnes - 4.7',
			    'bloc-echelle' => 'Échelle numérique',
			    'bloc-tab-change-2-0' => 'Bloc gestion du changement - Produit et solution - 2.0',
			    'bloc-tab-change-2-1' => 'Bloc gestion du changement - Équipements d\'impression - 2.1',
			    'bloc-tab-change-2-2' => 'Bloc gestion du changement - Services d\'impression gérés - 2.2',
			    'bloc-tab-change-2-3' => 'Bloc gestion du changement - Gestion électronique des documents - 2.3',
			    'bloc-tab-products-2-1' => 'Bloc tabs - Équipements d\'impression - 2.1',
			    'bloc-tab-products-2-2' => 'Bloc tabs - Services d\'impression gérés - 2.2',
			    'bloc-tab-products-2-3' => 'Bloc tabs - Gestion électronique des documents - 2.3',
			    'form-support-technique-01-3' => 'Form Accéder à Mon CT - 3.0',
			    'form-support-technique-02-3' => 'Form Compléter une demande d’assistance - 3.0',
			    'form-support-technique-03-3' => 'Form Commander des fournitures - 3.0',
			    'form-support-technique-04-3' => 'Form Contacter le service à la clientèle - 3.0',
			    'form-support-technique-05-3' => 'Lecture de compteurs - 3.0',
                'bloc-partners' => 'Bloc Partenaires',
                'bloc-medal' => 'Bloc les médaillés de la relève',
                'bloc-certifications' => 'Bloc Certifications',
			    'bloc-latest-news' => 'Bloc dernières nouvelles',
			    'bloc-newsletter' => 'Bloc Infolettre',
			    'bloc-support-technique' => 'Bloc Support Technique 3.0',
            ]),
		];
	}

	public function get_fields_layout()
	{
		return [
			'key' => 'bloc_static_key',
			'name' => 'bloc_static',
			'label' => 'Bloc Static',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}