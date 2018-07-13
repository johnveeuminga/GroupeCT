<li class="menu-item">
    <a class="nav-link @if($submenu_id)nl{{ $submenu_id }} has-submenu @endif" href="{{ PageHelper::get_page_permalink($page_id) }}">{{ PageHelper::get_page_title($page_id) }}</a>
    <a class="sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
    <a class="sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
    <div class="sub-menu-container-mobile nl2">
        <div class="nav-sub-container row">
            <nav class="nav-sub">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a class="sub-sub-menu" href="/product-categories">{{ pll__('PAR CATÉGORIE', 'GROUPE-CT') }}</a></h3>
                    <a class="sub-sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <a class="sub-sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                </div>
                <ul class="nav-link-container have-toggle">
                    @foreach($product_types as $product_type)
                         <li class="menu-item">
                            <a href="{{get_term_link($product_type)}}" class="nav-link">{{ __($product_type->name, 'GROUPE-CT') }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <nav class="nav-sub">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a class="sub-sub-menu" href="/product-brands">{{ pll__('PAR MARQUE', 'GROUPE-CT') }}</a></h3>
                    <a class="sub-sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <a class="sub-sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                </div>
                <ul class="nav-link-container have-toggle">
                    @foreach($brands as $brand)
                         <li class="menu-item">
                            <a href="{{get_term_link($brand)}}" class="nav-link">{{ __($brand->name, 'GROUPE-CT') }}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
            <nav class="nav-sub">
                <div class="nav-section-title-container">
                    <h3 class="nav-section-title"><a class="sub-sub-menu" href="#">{{ pll__('FOURNITURES', 'GROUPE-CT') }}</a></h3>
                    <a class="sub-sub-menu-trigger" href="#"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                    <a class="sub-sub-menu-trigger hideMe" href="#"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                </div>
                <ul class="nav-link-container have-toggle">
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_7_1_1, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_7_1_2, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_7_1_3, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_7_1_4, 'red_arrow' => false])
                    @include('partials.components.header.sub-menu-nav-link-atom', ['page_id' => PageHelper::PAGE_7_1_5, 'red_arrow' => false])
                </ul>
            </nav>
        </div>
    </div>
</li>