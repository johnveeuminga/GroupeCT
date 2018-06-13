<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N49C66Q');</script>
	<!-- End Google Tag Manager -->


	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="{{ themosis_assets() }}/images/favicon/Favicon_16X16.png" />
	<link rel="icon" type="image/x-icon" href="{{ themosis_assets() }}/images/favicon/Favicon_16X16.png" />
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="{{ themosis_assets() }}/images/favicon/Favicon_57x57.png">
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ themosis_assets() }}/images/favicon/Favicon_76x76.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ themosis_assets() }}/images/favicon/Favicon_120x120.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ themosis_assets() }}/images/favicon/Favicon_152x152.png">
	<link rel="apple-touch-icon-precomposed" sizes="180x180" href="{{ themosis_assets() }}/images/favicon/Favicon_180x180.png">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php wp_head(); ?>

	@if (get_the_ID() === PageHelper::get_page_id(PageHelper::PAGE_4_6_CARRIERE))
		<style>
			.lity-iframe-container {
				padding-top: 90%; /* 4:3 ratio */
			}
		</style>
	@endif
</head>
<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N49C66Q" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
	@if (isset($acquisition) && $acquisition)
		<style scoped>
			@if (is_array(get_field('acquisition_image_desktop', $acquisition->ID)))
				#interstitiel {
					background-image: url({{ get_field('acquisition_image_desktop', $acquisition->ID)['url'] }});
				}
			@endif
            @if (is_array(get_field('acquisition_image_mobile', $acquisition->ID)))
                @media (max-width: 767px) {
				#interstitiel {
					background-image: url({{ get_field('acquisition_image_mobile', $acquisition->ID)['url'] }});
				}
			}
			@endif
		</style>

		<div id="interstitiel" class="lity-hide">
			<div class="content">
				<h2>{!! get_field('acquisition_title', $acquisition->ID) !!}</h2>
				<p>{!! get_field('acquisition_description', $acquisition->ID) !!}</p>
				<div class="btn-container">
					<a class="btn-bloc2 primary-btn close-data-lity close-interstitiel" href="#">{!! pll__('Poursuivre votre visite') !!}</a>
					@if (!empty(get_field('acquisition_1_cta_link', $acquisition->ID)))
						<a class="btn-bloc2 primary-btn" style="margin: 0 15px;" href="{{ get_field('acquisition_1_cta_link', $acquisition->ID) }}" @if(get_field('acquisition_1_cta_blank', $acquisition->ID)) target="_blank" @endif>{!! get_field('acquisition_1_cta_label', $acquisition->ID) !!}</a>
					@else
						<span style="display: inline-block; width: 30px;">&nbsp;</span>
					@endif
					@if (!empty(get_field('acquisition_2_cta_link', $acquisition->ID)))
						<a class="btn-bloc2 primary-btn" href="{{ get_field('acquisition_2_cta_link', $acquisition->ID) }}" @if(get_field('acquisition_2_cta_blank', $acquisition->ID)) target="_blank" @endif>{!! get_field('acquisition_2_cta_label', $acquisition->ID) !!}</a>
					@endif
				</div>
			</div>

			<div class="interstitiel-toggle">
				@if (pll_current_language() === 'fr')
					@if (isset(pll_get_post_translations(get_the_ID())['en']))
						<a class="language" href="{{ get_permalink(pll_get_post_translations(get_the_ID())['en']) }}?referer={{ get_field('acquisition_custom_hash', $acquisition->ID) }}">English</a><span>|</span><a href="#" class="close-interstitiel">x</a>
					@endif
				@else
					@if (isset(pll_get_post_translations(get_the_ID())['fr']))
						<a class="language" href="{{ get_permalink(pll_get_post_translations(get_the_ID())['fr']) }}?referer={{ get_field('acquisition_custom_hash', $acquisition->ID) }}">Français</a><span>|</span><a href="#" class="close-interstitiel">x</a>
					@else
						<a href="#" class="close-interstitiel">x</a>
					@endif
				@endif
			</div>
		</div>
	@endif

	@include('partials.components.header.main-nav-mobile')
	<div id="global-container">
<!--		include header -->
        @include('templates.header')
		<main {{ is_front_page() ? 'class="front-page"' : 'class="main-' . get_the_ID() . '"' }}>
			@yield ('main')
		</main>
		<!-- include footer -->
        @include('templates.footer')
	</div>
    <?php wp_footer(); ?>
</body>
</html>