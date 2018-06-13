@extends('templates.main')

@section('main')
    <div class="container-fluid template-2-1-container" id="_main-container-page-{{ get_the_ID() }}">
        <div class="bloc-product-search-main-container">
            <div class="bloc-product-outer-container">
                @include('partials.components.blocs-static.bloc-tab-products-2-1')

                <div class="bg_white">
                    @if (PageHelper::get_page_id(PageHelper::PAGE_2_1_4_FOURNITURES) === get_the_ID())
                        <div class="bloc-product-search-main-container">
                            <div class="bloc-product-container">
                                <div class="nav-cat-main-container">
                    @endif
                        @if( have_rows('blocks') )

                            @while ( have_rows('blocks') )
                                <?php the_row(); ?>

                                <?php
                                    $row = get_row();
                                    $row_id = array_shift($row);
                                ?>
                                @while ( has_sub_field('bloc_flexible_content', $row_id) )
                                    <?php
                                        $block = new \Theme\Models\Bloc(get_row_layout());
                                    ?>
                                    @include($block->load_path(), ['block' => $block])
                                @endwhile

                            @endwhile

                        @endif
                    @if (PageHelper::get_page_id(PageHelper::PAGE_2_1_4_FOURNITURES) === get_the_ID())
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection