<!-- Block 9 - Statistics -->
<div class="default-padding ">
    <div class="col-xs-12">

        <div class="chart-main-container">
            <!-- THE ELEMENT START  -->
            @if (!empty($block->get_field('bloc_9_1_percentage')))
                <div class="chart-container">
                    <div class="chart">
                        <canvas class="doughnut-chart01 doughnut-chart" data-initiated="false" data-description="{!! $block->get_field('bloc_9_1_description') !!}" data-unfilled="{!! $block->get_field('bloc_9_1_unfilled') !!}" data-primary="{!! $block->get_field('bloc_9_1_primary') !!}" data-percentage="{!! $block->get_field('bloc_9_1_percentage') !!}" data-label="{!! $block->get_field('bloc_9_1_label') !!}"></canvas>
                    </div>
                    <div class="chart-text">
                        <p>{!! $block->get_field('bloc_9_1_description') !!}</p>
                        <span>{!! $block->get_field('bloc_9_1_source') !!}</span>
                    </div>
                </div>
            @elseif($block->get_field('bloc_9_1_image'))
                <div class="chart-container">
                    <div class="chart">
                        <img src="{{ $block->get_field('bloc_9_1_image')['url'] }}" alt="">
                    </div>
                    <div class="chart-text">
                        <p>{!! $block->get_field('bloc_9_1_description') !!}</p>
                    </div>
                </div>
            @endif
            <!-- THE ELEMENT END  -->

            <!-- THE ELEMENT START  -->
            @if (!empty($block->get_field('bloc_9_2_percentage')))
                <div class="chart-container">
                    <div class="chart">
                        <canvas class="doughnut-chart02 doughnut-chart" data-initiated="false" data-description="{!! $block->get_field('bloc_9_2_description') !!}" data-unfilled="{!! $block->get_field('bloc_9_2_unfilled') !!}" data-primary="{!! $block->get_field('bloc_9_2_primary') !!}" data-percentage="{!! $block->get_field('bloc_9_2_percentage') !!}" data-label="{!! $block->get_field('bloc_9_2_label') !!}"></canvas>
                    </div>
                    <div class="chart-text">
                        <p>{!! $block->get_field('bloc_9_2_description') !!}</p>
                        <span>{!! $block->get_field('bloc_9_2_source')  !!}</span>
                    </div>
                </div>
            @elseif($block->get_field('bloc_9_2_image'))
                <div class="chart-container">
                    <div class="chart">
                        <img src="{{ $block->get_field('bloc_9_2_image')['url'] }}" alt="">
                    </div>
                    <div class="chart-text">
                        <p>{!! $block->get_field('bloc_9_2_description') !!}</p>
                    </div>
                </div>
            @endif
            <!-- THE ELEMENT END  -->
        </div>
        <!-- FIXME -->
        <!--h3>Missing fields</h3>
        <ul>
            <li>bloc_9_title</li>
        </ul-->
    </div>
</div>

<script>




</script>