@extends('templates.main')

@section('main')
    <div class="container-fluid template-2-3-container tech-support-main-container" id="_main-container-page-{{ get_the_ID() }}">
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
    </div>
@endsection