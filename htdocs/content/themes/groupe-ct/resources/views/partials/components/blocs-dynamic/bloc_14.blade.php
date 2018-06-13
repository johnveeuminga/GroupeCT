<!-- Block 14 - Job Offer -->
<div class="toggle-main-container default-padding default-width">
    <div class="toggle-content-header active-header">
        <div class="toggle-title-container">
            <h3 class="toggle-content-title" href="#">{{ $block->get_field('bloc_14_collapse_title') }}</h3>
        </div>
        <img class="toggle-content-carret toggle-carret" src="{{ themosis_assets() }}/images/icon/icon-chevron-white.svg" alt="">
        <div class="triangle-blue toggle-triangle"></div>
        <a class="open-toggle-content" href="#"></a>
    </div>

    <div class="toggle-content open-content">
        @foreach($block->get_field('bloc_14_jobs') as $job)
        {{-- job INFO START --}}
            @if ($job)
                <div class="job-info-container">
                    {{-- BLUE BAR WITH TITLE END --}}
                    <div class="job-info-inner-container">
                        <h3 class="job-info-title">{{ $job['bloc_14_job']->post_title }}</h3>
                        @if(!empty($job['bloc_14_job']->job_offer_office))<p class="info job-info-office"><span>{{ pll__('Bureau affilié :') }}</span>{{ $job['bloc_14_job']->job_offer_office  }}</p>@endif
                        @if(!empty($job['bloc_14_job']->job_offer_location))<p class="info job-info-adresse"><span>{{ pll__('Lieu de travail :') }}</span>{{ $job['bloc_14_job']->job_offer_location  }}</p>@endif
                        @if(!empty($job['bloc_14_job']->job_offer_dept))<p class="info job-info-section"><span>{{ pll__('Département :') }}</span>{{ $job['bloc_14_job']->job_offer_dept  }}</p>@endif
                        @if(!empty($job['bloc_14_job']->job_offer_deadline))<p class="info job-info-limit"><span>{{ pll__('Date limite pour postuler :') }}</span>{{ $job['bloc_14_job']->job_offer_deadline }}</p>@endif

                        <div class="btn-container">

                            <a href="{{ get_permalink($job['bloc_14_job']->ID) }}" class="cta-see-more" data-lity>{{ pll__('En savoir plus 2') }}</a>
                            <a class="btn primary-btn-blue" href="mailto:{{ Option::get('hr', 'hrEmail') }}">{{ pll__('Postuler') }}</a>
                        </div>
                    </div>
                </div>
            @endif
       {{-- job INFO END --}}
        @endforeach
   </div>
</div>


