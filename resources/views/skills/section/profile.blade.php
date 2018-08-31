<!-- Start Profile -->
<section id="profile" class="background1 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section-title text-center">
                <h2>{{ trans('skills.profile.title') }}</h2>
                <span class="section-divider"></span>
            </div><!-- /.column -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-4">
                <img alt="" src="{{ $image }}" class="img-responsive">
                <div class="profile-box">
                    <ul class="list-unstyled">
                        <li><strong>{{ trans('skills.profile.common.name') }}:</strong> {{ $name }}</li>
                        <li><strong>{{ trans('skills.profile.common.nationality') }}:</strong> {{ $nationality }}</li>
                        <li><strong>{{ trans('skills.profile.common.age') }}:</strong> {{ $age }}</li>
                        <li><strong>{{ trans('skills.profile.common.position') }}:</strong> {{ $position }}</li>
                        <li><strong>{{ trans('skills.profile.common.languages') }}:</strong> {{ $languages }}</li>
                    </ul>
                </div>
            </div><!-- column -->
            <div class="col-sm-8 mt30-xs">
                <h5 class="heading-1 mb20">{{ trans('skills.profile.introduction.title') }}</h5>

                <h3 class="mb15 no-margin-top">{{ $shortIntroduction }}</h3>
                <p class="text-small text-switch">{{ $longIntroduction }}</p>

                <span class="divider"></span>

                <p class="text-small">{{ $description }}</p>

                <h5 class="heading-1 mt20 mb20">{{ trans('skills.profile.skills.title') }}</h5>
                @foreach($skills as $skill)
                    <div class="progress">
                        <div class="progress-bar text-left" role="progressbar" aria-valuenow="{{ $skill['rating'] }}" aria-valuemin="0" aria-valuemax="100" style="{{ 'width: ' . $skill['rating'] . '%;' }}">
                            {{ $skill['name'] }}
                        </div>
                    </div>
                @endforeach
                <div class="progress-meter">
                    <div class="meter meter-left" style="width: 45%;"><span class="meter-text">Junior</span></div>
                    <div class="meter meter-left" style="width: 30%;"><span class="meter-text">Semi-Senior</span></div>
                    <div class="meter meter-right" style="width: 8%;"><span class="meter-text">Kiwi</span></div>
                    <div class="meter meter-right" style="width: 17%;"><span class="meter-text">Senior</span></div>
                </div>
                <p class="text-small mt50 no-margin-bottom"><span class="text-switch">"Good God!"</span> cried the English Captain, to whom the question was put. "What's the matter? He was heading east, I think.—Is your Captain crazy?" whispering Fedallah.</p>
            </div><!-- /.column -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
<!-- End Profile -->