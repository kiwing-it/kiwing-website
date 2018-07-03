<!-- Begin About -->
<section id="about" class="background1 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section-title text-center">
                <h2>{{ trans('landing.about.title') }}</h2>
                <span class="section-divider"></span>
            </div><!-- /.column -->
        </div><!-- /.row -->
        <div class="row mb15">
            <div class="col-sm-5 leftReveal">
                <h5 class="heading-1 mb20">{{ trans('landing.about.boxes.first.title') }}</h5>
                <h3 class="mb15 no-margin-top">{{ trans('landing.about.boxes.first.subtitle') }}</h3>
                <p class="no-margin text-small">{{ trans('landing.about.boxes.first.description') }}</p>
            </div><!-- /.column -->
            <div class="col-sm-7 mt30-xs rightReveal">
                <h5 class="heading-1 mb20">{{ trans('landing.about.boxes.second.title') }}</h5>
                <span class="icon-handle-streamline-vector logo-about"></span>
                <p>{{ trans('landing.about.boxes.second.description.p1') }}</p>
                <p>{{ trans('landing.about.boxes.second.description.p2') }}</p>
            </div><!-- /.column -->
        </div><!-- /.row -->
        <div class="row mb30">
            <div class="col-sm-9 leftReveal">
                <h5 class="heading-1 mb20">{{ trans('landing.about.boxes.third.title') }}</h5>
                <p class="lead no-margin">{{ trans('landing.about.boxes.third.description') }}</p>
            </div><!-- /.column -->
            <div class="col-sm-3 mt30-xs rightReveal">
                <h5 class="heading-1 mb20">{{ trans('landing.about.boxes.fourth.title') }}</h5>
                <p class="no-margin text-small"><i>"{{ trans('landing.about.boxes.fourth.description') }}"</i></p>
            </div><!-- /.column -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-lg-7 col-sm-5 bottomReveal">
                <h5 class="heading-1 mb20">{{ trans('landing.about.skills.title') }}</h5>
                <div class="progress">
                    <div class="progress-bar text-left" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                        {{ trans('landing.about.skills.first') }}
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar text-left" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                        {{ trans('landing.about.skills.second') }}
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar text-left" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                        {{ trans('landing.about.skills.third') }}
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar text-left" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                        {{ trans('landing.about.skills.fourth') }}
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar text-left" role="progressbar" aria-valuenow="97" aria-valuemin="0" aria-valuemax="100" style="width: 97%;">
                        {{ trans('landing.about.skills.fifth') }}
                    </div>
                </div>
                <div class="progress-meter mb30-xs">
                    <div class="meter meter-left" style="width: 30%;"><span class="meter-text">Junior</span></div>
                    <div class="meter meter-left" style="width: 40%;"><span class="meter-text">Semi-Senior</span></div>
                    <div class="meter meter-right" style="width: 15%;"><span class="meter-text">Kiwi</span></div>
                    <div class="meter meter-right" style="width: 15%;"><span class="meter-text">Senior</span></div>
                </div>
            </div><!-- /.column -->
            <div class="col-lg-5 col-sm-7 mt10 rotateLeftReveal">
                <div id="about-carousel" class="basic-carousel carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#about-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#about-carousel" data-slide-to="1"></li>
                        <li data-target="#about-carousel" data-slide-to="2"></li>
                        <li data-target="#about-carousel" data-slide-to="3"></li>
                        <li data-target="#about-carousel" data-slide-to="4"></li>
                        <li data-target="#about-carousel" data-slide-to="5"></li>
                        <li data-target="#about-carousel" data-slide-to="6"></li>
                        <li data-target="#about-carousel" data-slide-to="7"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/about/backend.jpg" alt="..." class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="images/about/sql.jpg" alt="..." class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="images/about/nosql.png" alt="..." class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="images/about/frontend-1.png" alt="..." class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="images/about/frontend-2.png" alt="..." class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="images/about/mobile-1.jpg" alt="..." class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="images/about/mobile-2.png" alt="..." class="img-responsive">
                        </div>
                        <div class="item">
                            <img src="images/about/architecture.jpg" alt="..." class="img-responsive">
                        </div>
                    </div>
                </div>
            </div><!-- /.column -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.section -->
<!-- End About -->