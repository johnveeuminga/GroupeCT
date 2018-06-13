<html>
<head>
    <?php wp_head(); ?>
</head>
<body style="background-color: white; overflow: hidden;">
    <div>
        <main style="padding-bottom: 100px;">
            <div class="job-info-detailed-container">
                <div class="job-info-inner-container">
                    <h2 class="job-info-title">{{ $post->post_title }}</h2>
                    @if(!empty($post->job_offer_office))<p class="info job-info-office"><span>{{ pll__('Bureau affilié :') }}</span>{{ $post->job_offer_office  }}</p>@endif
                    @if(!empty($post->job_offer_office))<p class="info job-info-adresse"><span>{{ pll__('Lieu de travail :') }}</span>{{ $post->job_offer_location  }}</p>@endif
                    @if(!empty($post->job_offer_office))<p class="info job-info-section"><span>{{ pll__('Département :') }}</span>{{ $post->job_offer_dept  }}</p>@endif
                    @if(!empty($post->job_offer_office))<p class="info job-info-limit"><span>{{ pll__('Date limite pour postuler :') }}</span>{{ $post->job_offer_deadline }}</p>@endif

                    <div class="info job-info-description">
                    {!! wpautop($post->post_content) !!}
                    </div>

                    <div class="btn-container">
                        <a class="btn primary-btn-blue" style="color: white;!important;" href="mailto:{{ Option::get('hr', 'hrEmail') }}">{{ pll__('Postuler') }}</a>
                    </div>
                </div>
            </div>

        </main>
    </div>
<?php wp_footer(); ?>
</body>
</html>

