<div class="toggle-content-main-container default-padding default-width">
    @foreach ($block->get_field('bloc_8_collapse') as $collapse)
        <div class="toggle-content-container">
            <div class="toggle-content-header @if($collapse['bloc_8_active']) active-header @endif {{ PageHelper::get_page_id(PageHelper::PAGE_1_1_ENVIRONNEMENT_PAPIER) === get_the_ID() ? 'environnement-papier' : '' }} {{ PageHelper::get_page_id(PageHelper::PAGE_1_2_ENVIRONNEMENT_HYBRIDE) === get_the_ID() ? 'environnement-hybride' : '' }} {{ PageHelper::get_page_id(PageHelper::PAGE_1_3_ENVIRONNEMENT_NUMERIQUE) === get_the_ID() ? 'environnement-numerique' : '' }}">
                <div class="title-container">
                    @if ($collapse['bloc_8_icon'])<span class="icon-container"><img class="title-icon" src="{{ $collapse['bloc_8_icon']['url'] }}" alt="{{ $collapse['bloc_8_icon']['alt'] }}"></span>@endif
                    <h3 class="toggle-content-title" href="">{{ $collapse['bloc_8_title'] }}</h3>
                </div>
                <img class="toggle-content-carret @if($collapse['bloc_8_active']) toggle-carret @endif" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.svg" alt="">
                <div class="triangle-blue @if($collapse['bloc_8_active']) toggle-triangle @endif"></div>
                <a class="open-toggle-content" href="#"></a>
            </div>
            <div class="toggle-content @if($collapse['bloc_8_active']) open-content @endif">
                @if ($collapse['bloc_8_outside_wysiwyg'])
                    <div class="wys-content">
                        {!! $collapse['bloc_8_content'] !!}
                    </div>
                    @if (isset($collapse['bloc_8_blocks']))
                        @foreach ($collapse['bloc_8_blocks'] as $col)
                            @if ($col['bloc_8_block'])
                                @while ( has_sub_field('bloc_flexible_content', $col['bloc_8_block']->ID) )
                                    <?php
                                    $new_block = new \Theme\Models\Bloc(get_row_layout());
                                    ?>

                                    @include($new_block->load_path(), ['block' => $new_block])
                                @endwhile
                            @endif
                        @endforeach
                    @endif
                @else
                    <div class="wys-content">
                        {!! $collapse['bloc_8_content'] !!}
                        @if (isset($collapse['bloc_8_blocks']))
                            @foreach ($collapse['bloc_8_blocks'] as $col)
                                @if ($col['bloc_8_block'])
                                    @while ( has_sub_field('bloc_flexible_content', $col['bloc_8_block']->ID) )
                                        <?php
                                        $new_block = new \Theme\Models\Bloc(get_row_layout());
                                        ?>

                                        @include($new_block->load_path(), ['block' => $new_block])
                                    @endwhile
                                @endif
                            @endforeach
                        @endif
                    </div>
                @endif
            </div>
        </div>
    @endforeach
</div>