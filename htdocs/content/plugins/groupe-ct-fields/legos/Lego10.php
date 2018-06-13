<?php

/**
 * Class Lego10
 * Products and Categories
 */
class Lego10 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
            $this->generate_repeater('bloc_10_products',     __('Collapsible Drawer', 'GROUPE-CT'), [
                $this->generate_image('bloc_10_image',            __('Image', 'GROUPE-CT'), __('Width : 295px | Height : 255px', 'GROUPE-CT') ),
                $this->generate_text('bloc_10_title', 'Title'),
                $this->generate_textarea('bloc_10_description', 'Product description'),
                $this->generate_file('bloc_10_product_pdf', 'PDF File', 'pdf'),
                $this->generate_select('bloc_10_product_category', 'Product category', [
                    '2-1-1-a' => __('2.1.1 - Imprimantes', 'GROUPE-CT'),
                    '2-1-1-b' => __('2.1.1 - Multifonctions noir et blanc', 'GROUPE-CT'),
                    '2-1-1-c' => __('2.1.1 - Multifonctions couleur', 'GROUPE-CT'),
                    '2-1-1-d' => __('2.1.1 - Numériseurs', 'GROUPE-CT'),
                    '2-1-2-a' => __('2.1.2 - Production noir et blanc', 'GROUPE-CT'),
                    '2-1-2-b' => __('2.1.2 - Production couleur', 'GROUPE-CT'),
                    '2-1-3-a' => __('2.1.3 - Impression de plan', 'GROUPE-CT'),
                    '2-1-3-b' => __('2.1.3 - Impression graphique', 'GROUPE-CT'),
                    '2-1-3-c' => __('2.1.3 - Impression de haut volume', 'GROUPE-CT'),
                    '2-1-4-a' => __('2.1.4 - Consommables pour grands formats', 'GROUPE-CT'),
                    '2-1-4-b' => __('2.1.4 - Consommables pour imprimantes', 'GROUPE-CT'),
                    '2-1-4-c' => __('2.1.4 - Papiers spécialisés', 'GROUPE-CT'),
                ]),
            ]),
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_10_key',
            'name' => 'bloc_10',
            'label' => 'Bloc 10 - Products',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}