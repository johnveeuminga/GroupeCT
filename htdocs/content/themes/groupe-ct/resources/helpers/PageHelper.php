<?php

class PageHelper
{
	const PAGE_0_ACCUEIL = 'accueil';
    const PAGE_1_0_APPROCHE_CONSEIL = 'approche-conseil';
    const PAGE_1_1_ENVIRONNEMENT_PAPIER = 'environnement-papier';
    const PAGE_1_2_ENVIRONNEMENT_HYBRIDE = 'enviornnement-hybride';
    const PAGE_1_3_ENVIRONNEMENT_NUMERIQUE = 'environnement-numerique';
    const PAGE_2_0_PRODUITS_SOLUTIONS = 'produits-solutions';
    const PAGE_2_1_1_EQUIPEMENTS_BUREAU = 'equipements-bureau';
    const PAGE_2_1_2_EQUIPEMENTS_PRODUCTION = 'equipements-production';
    const PAGE_2_1_3_IMPRESSION_GRAND_FORMAT = 'impression-grand-format';
    const PAGE_2_1_4_FOURNITURES = 'fournitures';
    const PAGE_2_2_1_PARC_IMPRESSION = 'parc-impression';
    const PAGE_2_2_2_RECUPERATION_COUT = 'recuperation-cout';
    const PAGE_2_2_3_FOLLOW_ME_PRINTING = 'follow-me-printing';
    const PAGE_2_2_4_AUTOMATISATION_FLUX = 'automatisation-flux';
    const PAGE_2_3_1_NUMERISATION_INTELLIGENTE = 'numerisation-intelligente';
    const PAGE_2_3_2_NUMERISATION_TRAITEMENT = 'numerisation-traitement';
    const PAGE_2_3_3_ARCHIVAGE = 'archivage';
    const PAGE_2_3_4_AUTOMATISATION_PROCESSUS = 'automatisation-processus';
    const PAGE_3_0_ASSISTANCE = 'assistance-technique';
    const PAGE_4_0_A_PROPOS = 'a-propos';
    const PAGE_4_1_MOT_DIRECTION = 'mot-direciton';
    const PAGE_4_2_DIVISIONS = 'divisions';
    const PAGE_4_3_HISTORIQUE = 'historique';
    const PAGE_4_4_EQUIPE = 'equipe';
    const PAGE_4_5_DEVELOPPEMENT_DURABLE = 'developpement-durable';
    const PAGE_4_6_CARRIERE = 'carriere';
    const PAGE_4_7_NOUS_JOINDRE = 'nous-joindre';
    const PAGE_5_0_PUBLICATIONS = 'publications';
    const PAGE_5_0_LEGAL = 'legal';
    const PAGE_6_0_SERVICES = 'services';
    const PAGE_6_1_1_AMELIORATION = 'amelioration-des-processus-dentreprise';
    const PAGE_6_1_2_CONTROLE_DES_COUTS = 'controle-des-couts';
    const PAGE_6_1_3_SECURITE_CONFIDENTIALITE = 'securite-confidentialite';
    const PAGE_6_1_4_REDUCTION_ENVIRONNEMENTALE = 'reduction-de-lempreinte-environnementale';
    const PAGE_6_2_1_REPARATION_DIMPRESSION = 'reparation-dequipement-dimpression';
    const PAGE_6_2_2_SERVICES_GERES = 'services-dimpression-geres'; 
    const PAGE_6_2_3_AMERLIORATION_PROCESSUS = 'amelioration-des-processus';
    const PAGE_6_2_4_FACTURATION_CONSOLIDEE = 'facturation-consolidee';
    const PAGE_6_2_5_COMMANDES = 'commandes-de-cartouches-automatisees';
    const PAGE_7_0_PRODUITS_IMPRESSION = 'produits-dimpression';
    const PAGE_7_1_1 = 'cartouches-d-imprimantes';
    const PAGE_7_1_2 = 'papier-d-imprimantes';
    const PAGE_7_1_3 = 'papier-specialise';
    const PAGE_7_1_4 = 'papier-grand-format';
    const PAGE_7_1_5 = 'commandes-de-cartouches-automatisees';
    const PAGE_8_0_LOGICELS = 'logicels';
    const PAGE_8_1_1 = 'indexation-et-traitement-des-donnees';
    const PAGE_8_1_2 = 'archivage-electronique';
    const PAGE_8_1_3 = 'automatisation-des-processus';
    const PAGE_8_2_1 = 'gestion-de-parc-d-impression';
    const PAGE_8_2_2 = 'recuperation-des-couts-dimpression';
    const PAGE_8_2_3 = 'follow-me-print';
    const PAGE_8_2_4 = 'automatisation-des-impressions';
    const PAGE_9_0_DEMANDER_UNE_SOUMISSION = 'demander-une-soumission';
    const PAGE_10_0_ZONE_CLIENT = 'zone-client';
    const PAGE_11_0_NOUVELLES = 'nouvelles';
    const PAGE_12_0_BLOUGE = 'blouge';
	const PAGE_13_0_QUOTE = 'demander-un-devis';
	const PAGE_14_0_NEWSLETTER = 'infolettre';
	const PAGE_15_0_PAR_MARQUE = 'par-marque';
	const PAGE_16_0_PAR_CATEGORIE = 'par-categorie';

    private static function get_pages_array()
    {
    	return [
		    self::PAGE_0_ACCUEIL => [
			    'fr' => 158,
			    'en' => 255,
		    ],
		    self::PAGE_1_0_APPROCHE_CONSEIL => [
			    'fr' => 160,
			    'en' => 807,
		    ],
		    self::PAGE_1_1_ENVIRONNEMENT_PAPIER => [
			    'fr' => 162,
			    'en' => 765,
		    ],
		    self::PAGE_1_2_ENVIRONNEMENT_HYBRIDE => [
			    'fr' => 165,
			    'en' => 889,
		    ],
            self::PAGE_1_3_ENVIRONNEMENT_NUMERIQUE => [
                'fr' => 167,
                'en' => 924,
            ],
		    self::PAGE_2_0_PRODUITS_SOLUTIONS => [
			    'fr' => 169,
			    'en' => 775,
		    ],
		    self::PAGE_2_1_1_EQUIPEMENTS_BUREAU => [
			    'fr' => 171,
			    'en' => 861,
		    ],
		    self::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION => [
			    'fr' => 204,
			    'en' => 863,
		    ],
		    self::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT => [
			    'fr' => 206,
			    'en' => 865,
		    ],
		    self::PAGE_2_1_4_FOURNITURES => [
			    'fr' => 211,
			    'en' => 867,
		    ],
		    self::PAGE_2_2_1_PARC_IMPRESSION => [
			    'fr' => 214,
			    'en' => 868,
		    ],
		    self::PAGE_2_2_2_RECUPERATION_COUT => [
			    'fr' => 216,
			    'en' => 869,
		    ],
		    self::PAGE_2_2_3_FOLLOW_ME_PRINTING => [
			    'fr' => 218,
			    'en' => 873,
		    ],
		    self::PAGE_2_2_4_AUTOMATISATION_FLUX => [
			    'fr' => 220,
			    'en' => 874,
		    ],
		    self::PAGE_2_3_1_NUMERISATION_INTELLIGENTE => [
			    'fr' => 222,
			    'en' => 875,
		    ],
		    self::PAGE_2_3_2_NUMERISATION_TRAITEMENT => [
			    'fr' => 225,
			    'en' => 876,
		    ],
		    self::PAGE_2_3_3_ARCHIVAGE => [
			    'fr' => 227,
			    'en' => 877,
		    ],
		    self::PAGE_2_3_4_AUTOMATISATION_PROCESSUS => [
			    'fr' => 229,
			    'en' => 878,
		    ],
		    self::PAGE_3_0_ASSISTANCE => [
			    'fr' => 231,
			    'en' => 1117,
		    ],
		    self::PAGE_4_0_A_PROPOS => [
			    'fr' => 233,
			    'en' => 979,
		    ],
		    self::PAGE_4_1_MOT_DIRECTION => [
			    'fr' => 235,
			    'en' => 1012,
		    ],
		    self::PAGE_4_2_DIVISIONS => [
			    'fr' => 237,
			    'en' => 1019,
		    ],
		    self::PAGE_4_3_HISTORIQUE => [
			    'fr' => 239,
			    'en' => 1032,
		    ],
		    self::PAGE_4_4_EQUIPE => [
			    'fr' => 241,
			    'en' => 1074,
		    ],
		    self::PAGE_4_5_DEVELOPPEMENT_DURABLE => [
			    'fr' => 243,
			    'en' => 1110
		    ],
		    self::PAGE_4_6_CARRIERE => [
			    'fr' => 245,
			    'en' => 1121,
		    ],
		    self::PAGE_4_7_NOUS_JOINDRE=> [
			    'fr' => 247,
			    'en' => 1172,
		    ],
		    self::PAGE_5_0_PUBLICATIONS => [
			    'fr' => 249,
			    'en' => 1220,
		    ],
		    self::PAGE_5_0_LEGAL=> [
			    'fr' => 1532,
			    'en' => 1536,
		    ],
		    self::PAGE_6_0_SERVICES => [
		    	'fr' => 2000,
		    	'en' => 2000
		    ],
		    self::PAGE_6_1_1_AMELIORATION => [
		    	'fr' => 2030,
		    	'en' => 2032
		    ],
		    self::PAGE_6_1_2_CONTROLE_DES_COUTS => [
		    	'fr' => 2036,
		    	'en' => 2038
		    ],
		    self::PAGE_6_1_3_SECURITE_CONFIDENTIALITE => [
		    	'fr' => 2040,
		    	'en' => 2042
		    ],
		    self::PAGE_6_1_4_REDUCTION_ENVIRONNEMENTALE => [
		    	'fr' => 2044,
		    	'en' => 2046
		    ],
		    self::PAGE_6_2_1_REPARATION_DIMPRESSION => [
		    	'fr' => 2052,
		    	'en' => 2054
		    ],
		    self::PAGE_6_2_2_SERVICES_GERES => [
		    	'fr' => 1548,
		    	'en' => 1551
		    ],
		    self::PAGE_6_2_3_AMERLIORATION_PROCESSUS => [
		    	'fr' => 2060,
		    	'en' => 2137
		    ],
		    self::PAGE_6_2_4_FACTURATION_CONSOLIDEE => [
		    	'fr' => 2062,
		    	'en' => 2139
		    ],
		    self::PAGE_6_2_5_COMMANDES => [
		    	'fr' => 2064,
		    	'en' => 2064
		    ],
		    self::PAGE_7_0_PRODUITS_IMPRESSION => [
		    	'fr' => 2010,
		    	'en' => 2012
		    ],
		    self::PAGE_7_1_1 => [
		    	'fr' => 2068,
		    	'en' => 2127
		    ],
		    self::PAGE_7_1_2 => [
		    	'fr' => 2070,
		    	'en' => 2129
		    ],
		    self::PAGE_7_1_3 => [
		    	'fr' => 2072,
		    	'en' => 2131
		    ],
		    self::PAGE_7_1_4 => [
		    	'fr' => 2074,
		    	'en' => 2133
		    ],
		    self::PAGE_7_1_5 => [
		    	'fr' => 2064,
		    	'en' => 2135
		    ], 
		    self::PAGE_8_0_LOGICELS => [
		    	'fr' => 2017,
		    	'en' => 2019
		    ],
		    self::PAGE_8_1_1 => [
		    	'fr' => 2078,
		    	'en' => 2141
		    ],
		    self::PAGE_8_1_2 => [
		    	'fr' => 2080,
		    	'en' => 2143
		    ],
		    self::PAGE_8_1_3 => [
		    	'fr' => 2082,
		    	'en' => 2145
		    ],
		    self::PAGE_8_2_1 => [
		    	'fr' => 2084,
		    	'en' => 2147
		    ],
		    self::PAGE_8_2_2 => [
		    	'fr' => 2086,
		    	'en' => 2149
		    ],
		    self::PAGE_8_2_3 => [
		    	'fr' => 2088,
		    	'en' => 2151
		    ],
		    self::PAGE_8_2_4 => [
		    	'fr' => 2090,
		    	'en' => 2153
		    ],
		    self::PAGE_9_0_DEMANDER_UNE_SOUMISSION => [
		    	'fr' => 2021,
		    	'en' => 2023
		    ],
		    self::PAGE_10_0_ZONE_CLIENT => [
		    	'fr' => 2026,
		    	'en' => 2028
		    ],
		    self::PAGE_11_0_NOUVELLES => [
		    	'fr' => 2092,
		    	'en' => 2156
		    ],
		    self::PAGE_12_0_BLOUGE => [
		    	'fr' => 2094,
		    	'en' => 2094 
			],
			
		    self::PAGE_13_0_QUOTE => [
		    	'fr' => 2109,
		    	'en' => 2023
			],
			
			self::PAGE_14_0_NEWSLETTER => [
				'fr' => 2160,
				'en' => 2158
			],

			self::PAGE_15_0_PAR_MARQUE => [
				'fr'	=> 2176,
				'en'	=> 2179
			],

			self::PAGE_16_0_PAR_CATEGORIE => [
				'fr'	=> 2181,
				'en'	=> 2183
			]

			// self::PAGE_15_0_PAR_CATEGORIE => [
			// 	''
			// ]
		 
	    ];
    }

    public static function get_page_id($key)
    {
        $locale = pll_current_language();

        return self::get_pages_array()[$key][$locale];
    }

    public static function get_page_permalink($key)
    {
        $locale = pll_current_language();

        return get_permalink(self::get_pages_array()[$key][$locale]);
    }

    public static function get_page_title($key)
    {
        $locale = pll_current_language();

        return get_the_title(self::get_pages_array()[$key][$locale]);
    }

    public static function is_2_1_subpage($page_id)
    {
        return  PageHelper::get_page_id(PageHelper::PAGE_2_1_1_EQUIPEMENTS_BUREAU) === $page_id ||
                PageHelper::get_page_id(PageHelper::PAGE_2_1_2_EQUIPEMENTS_PRODUCTION) === $page_id ||
                PageHelper::get_page_id(PageHelper::PAGE_2_1_3_IMPRESSION_GRAND_FORMAT) === $page_id ||
                PageHelper::get_page_id(PageHelper::PAGE_2_1_4_FOURNITURES) === $page_id;

    }

    public static function is_2_2_subpage($page_id)
    {
        return  PageHelper::get_page_id(PageHelper::PAGE_2_2_1_PARC_IMPRESSION) === $page_id ||
                PageHelper::get_page_id(PageHelper::PAGE_2_2_2_RECUPERATION_COUT) === $page_id ||
                PageHelper::get_page_id(PageHelper::PAGE_2_2_3_FOLLOW_ME_PRINTING) === $page_id ||
                PageHelper::get_page_id(PageHelper::PAGE_2_2_4_AUTOMATISATION_FLUX) === $page_id;

    }

    public static function is_2_3_subpage($page_id)
    {
        return  PageHelper::get_page_id(PageHelper::PAGE_2_3_1_NUMERISATION_INTELLIGENTE) === $page_id ||
                PageHelper::get_page_id(PageHelper::PAGE_2_3_2_NUMERISATION_TRAITEMENT) === $page_id ||
                PageHelper::get_page_id(PageHelper::PAGE_2_3_3_ARCHIVAGE) ===  $page_id ||
                PageHelper::get_page_id(PageHelper::PAGE_2_3_4_AUTOMATISATION_PROCESSUS) === $page_id;

    }

    public static function parse_excerpt($words, $max)
    {
        if (strlen($words) > $max) {
            $pos = strpos((string) $words, ' ', $max);
            $words = substr($words, 0, $pos) . ' ...';
        }

        return $words;
    }
}