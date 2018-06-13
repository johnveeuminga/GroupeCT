@if (!empty($icon) || !empty($title) || !empty($description))
    <div class="four-col-icons-item col-xs-12 col-sm-6 col-md-3">
        @if (!empty($icon))
            <div class="four-col-icons-img-container">
                <img class="four-col-icons-img" src="{{ $icon }}">
            </div>
        @endif

        @if (!empty($title))<h3 class="four-col-icons-title">{!! $title !!}</h3>@endif
        @if (!empty($description))<p class="four-col-icons-desc">{!! $description !!}</p>@endif
    </div>
@endif