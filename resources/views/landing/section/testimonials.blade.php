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