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