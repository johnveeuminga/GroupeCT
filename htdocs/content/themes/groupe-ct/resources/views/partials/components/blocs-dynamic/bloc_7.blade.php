<!-- Block 7 - Row repeater -->
<div class="two-col-icons-text-main-container default-padding default-width">
    @foreach($block->get_field('bloc_7_rows') as $row)
        <div class="two-col-icons-text-item col-xs-12 col-sm-6">
            @if ($row['bloc_7_col_2_icon'])
                <div class="two-col-icons-text-img-container">
                    <img class="two-col-icons-text-img" src="{{ $row['bloc_7_col_1_icon']['url'] }}">
                </div>
            @endif

            <h3 class="two-col-icons-text-title">{!! $row['bloc_7_col_1_title'] !!} </h3>
            <p class="two-col-icons-text-desc">{!! $row['bloc_7_col_1_description'] !!}</p>
        </div>
        <div class="two-col-icons-text-item col-xs-12 col-sm-6">
            @if ($row['bloc_7_col_2_icon'])
                <div class="two-col-icons-text-img-container">
                    <img class="two-col-icons-text-img" src="{{ $row['bloc_7_col_2_icon']['url'] }}">
                </div>
            @endif

            <h3 class="two-col-icons-text-title">{!! $row['bloc_7_col_2_title'] !!} </h3>
            <p class="two-col-icons-text-desc">{!! $row['bloc_7_col_2_description'] !!}</p>
        </div>
    @endforeach
</div>