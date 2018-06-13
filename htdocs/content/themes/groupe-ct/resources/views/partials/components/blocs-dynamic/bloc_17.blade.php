<!-- Block 17 - Stats Banner -->
<div class="stats-main-container row" style="position: relative;">
    @for($i = 1; $i <= 4; $i++)
        <div class="stats-container col-xs-12 col-sm-6 col-md-3" style="position: relative; z-index: 1;">
            <div class="stats-icon-container">
                <img src="{{ $block->get_field("bloc_17_".$i."_icon")['url'] }}" alt="{{ $block->get_field("bloc_17_".$i."_icon")['alt'] }}">
            </div>
           <div class="stats-number-container">
               <span class="stats-number count">{{ $block->get_field("bloc_17_".$i."_number") }}</span>
               <div class="line"></div>
           </div>
            <div class="stats-desc-container">
                <p class="stats-desc">{{ $block->get_field("bloc_17_".$i."_description") }}</p>
            </div>
        </div>
    @endfor
    <div class="overlay" style="z-index: 0;"></div>
</div>
