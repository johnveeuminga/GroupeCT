<?php $rand = rand(0, 10000000) . time(); ?>
<style style="text/css" scoped>
    #padding-{{$rand}} {
        width: 100%;
        height: 0;
    }

    @media (min-width: 1440px) {
        #padding-{{$rand}} {
            padding-top: {{ $block->get_field('bloc_padding_desktop') }}px;
        }
    }
    @media (max-width: 1439px) {
        #padding-{{$rand}} {
            padding-top: {{ $block->get_field('bloc_padding_tablet') }}px;
        }
    }
    @media (max-width: 1023px) {
        #padding-{{$rand}} {
            padding-top: {{ $block->get_field('bloc_padding_tablet') }}px;
        }
    }
    @media (max-width: 767px) {
        #padding-{{$rand}} {
            padding-top: {{ $block->get_field('bloc_padding_mobile') }}px;
        }
    }
</style>
<div id="padding-{{ $rand }}">&nbsp;</div>