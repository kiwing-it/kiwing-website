<!-- Begin Intro -->
<section id="ideology">

    <!-- Begin Hello Intro -->
    <div id="hello-intro" class="pt60 pb60">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-3">
                    <h2 class="no-margin rotateLeftReveal">{{ trans('landing.ideology.intro.greeting') }}</h2>
                </div>
                <div class="col-lg-10 col-sm-9 mt30-xs">
                    <h3 class="no-margin rightReveal">
                        {{ trans('landing.ideology.intro.short_presentation.not_highlighted') }} <strong>{{ trans('landing.ideology.intro.short_presentation.highlighted') }}</strong>.
                    </h3>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.div -->
    <!-- End Hello Intro -->

    <!-- Begin Our Process Title -->
    <div id="our-process-title" class="pt30 pb30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h4 class="no-margin">{{ trans('landing.ideology.process.title') }}</h4>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.div -->
    <!-- End Our Process Title -->

    <!-- Begin Our Process -->
    <div id="our-process">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 process-box text-center pt50 pb50">
                    <div class="leftReveal">
                        <div class="process-intro">
                            <h3 class="process-number">01</h3>
                            <div><span class="process-icons pe-7s-rocket rotateBottomReveal"></span></div>
                            <h2>
                                {{ trans('landing.ideology.process.values.first.title_top_part') }}
                                <br />
                                {{ trans('landing.ideology.process.values.first.title_bottom_part') }}
                            </h2>
                        </div>
                        <div class="process-content">
                            <div><span class="process-icons pe-7s-rocket"></span></div>
                            <h2 class="mt15 mb20">
                                {{ trans('landing.ideology.process.values.first.title_top_part') }}
                                <br />
                                {{ trans('landing.ideology.process.values.first.title_bottom_part') }}
                            </h2>
                            <p class="no-margin">{{ trans('landing.ideology.process.values.first.description') }}</p>
                        </div>
                    </div><!-- /.animation -->
                </div><!-- /.column -->
                <div class="col-sm-4 col-md-4 col-lg-4 process-box text-center pt50 pb50">
                    <div class="bottomReveal">
                        <div class="process-intro">
                            <h3 class="process-number">02</h3>
                            <div><span class="process-icons pe-7s-users rotateBottomReveal"></span></div>
                            <h2>
                                {{ trans('landing.ideology.process.values.second.title_top_part') }}
                                <br />
                                {{ trans('landing.ideology.process.values.second.title_bottom_part') }}
                            </h2>
                        </div>
                        <div class="process-content">
                            <div><span class="process-icons pe-7s-users"></span></div>
                            <h2 class="mt15 mb20">
                                {{ trans('landing.ideology.process.values.second.title_top_part') }}
                                <br />
                                {{ trans('landing.ideology.process.values.second.title_bottom_part') }}
                            </h2>
                            <p class="no-margin">{{ trans('landing.ideology.process.values.second.description') }}</p>
                        </div>
                    </div><!-- /.animation -->
                </div><!-- /.column -->
                <div class="col-sm-4 col-md-4 col-lg-4 process-box text-center pt50 pb50 no-border-right">
                    <div class="rightReveal">
                        <div class="process-intro">
                            <h3 class="process-number">03</h3>
                            <div><span class="process-icons pe-7s-study rotateBottomReveal"></span></div>
                            <h2>
                                {{ trans('landing.ideology.process.values.third.title_top_part') }}
                                <br />
                                {{ trans('landing.ideology.process.values.third.title_bottom_part') }}
                            </h2>
                        </div>
                        <div class="process-content">
                            <div><span class="process-icons pe-7s-study"></span></div>
                            <h2 class="mt15 mb20">
                                {{ trans('landing.ideology.process.values.third.title_top_part') }}
                                <br />
                                {{ trans('landing.ideology.process.values.third.title_bottom_part') }}
                            </h2>
                            <p class="no-margin">{{ trans('landing.ideology.process.values.third.description') }}</p>
                        </div>
                    </div><!-- /.animation -->
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.div -->
    <!-- End Our Process -->

    <!-- Begin Quote Carousel -->
    <div id="carousel" class="testimonial-carousel pt40 pb20">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center">
                    <span class="pe-7s-close heading-3-icon"></span>
                    <h2 class="heading-3">{{ trans('landing.ideology.testimonials.title') }}</h2>
                    <div class="fade-quote-carousel carousel slide" id="quote-carousel" data-ride="carousel" data-interval="3000">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#quote-carousel" data-slide-to="1"></li>
                            <li data-target="#quote-carousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="active item">
                                <blockquote>
                                    <p>
                                        "{{ trans('landing.ideology.testimonials.first.content') }}"
                                        <br />
                                        <span>{{ trans('landing.ideology.testimonials.first.author_name') }}, {{ trans('landing.ideology.testimonials.first.author_position') }}</span>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote>
                                    <p>
                                        "{{ trans('landing.ideology.testimonials.second.content') }}"
                                        <br />
                                        <span>{{ trans('landing.ideology.testimonials.second.author_name') }}, {{ trans('landing.ideology.testimonials.second.author_position') }}</span>
                                    </p>
                                </blockquote>
                            </div>
                            <div class="item">
                                <blockquote>
                                    <p>
                                        "{{ trans('landing.ideology.testimonials.third.content') }}"
                                        <br />
                                        <span>{{ trans('landing.ideology.testimonials.third.author_name') }}, {{ trans('landing.ideology.testimonials.third.author_position') }}</span>
                                    </p>
                                </blockquote>
                            </div>
                        </div>

                    </div><!-- /.carousel -->
                </div><!-- /.column -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.carousel -->
    <!-- End Quote Carousel -->

</section><!-- /.section -->
<!-- End Intro -->