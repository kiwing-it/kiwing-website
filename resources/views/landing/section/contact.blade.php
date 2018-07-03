<!-- Begin Contact -->
<section id="contact" class="background2 section-padding">
    <div class="container">
        <div class="row mb30">
            <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 section-title text-center">
                <h2>{{ trans('landing.contact.title') }}</h2>
                <span class="section-divider mb15"></span>
                <p class="no-margin scaleReveal">{{ trans('landing.contact.subtitle') }}</p>
            </div><!-- /.column -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-sm-5 col-lg-4">
                <h5 class="heading-1 mb20">{{ trans('landing.contact.form.title') }}</h5>
                <h4 class="mb15">{{ trans('landing.contact.form.subtitle') }}</h4>
                <p class="no-margin text-xs-small">{{ trans('landing.contact.form.description') }}</p>
                <hr class="mini-hr">
                <p class="text-xs-small mb5"><strong class="text-switch">Email:</strong> sales@kiwing.it</p>
                <p class="text-xs-small mb5"><strong class="text-switch">Phone:</strong> +9 54 3564 664864</p>
            </div><!-- /.column -->
            <div class="col-sm-6 col-lg-7 mt30-xs">
                <form data-toggle="validator" id="contactForm" name="contactForm">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="controls">
                                    <input class="form-control" data-error="{{ trans('landing.contact.validation.required') }}" 
                                           id="msg_subject" placeholder="{{ trans('landing.contact.placeholder.subject') }}" required="" type="text">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div><!-- /.column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="controls">
                                    <input class="form-control" id="phone" placeholder="{{ trans('landing.contact.placeholder.phone') }}" type="text">
                                </div>
                            </div>
                        </div><!-- /.column -->
                    </div><!-- /.row -->
                    <div class="row mb10">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="controls">
                                    <input class="form-control" data-error="{{ trans('landing.contact.validation.required') }}" 
                                           id="name" placeholder="{{ trans('landing.contact.placeholder.name') }}" required="" type="text">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div><!-- /.column -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="controls">
                                    <input class="email form-control" data-error="{{ trans('landing.contact.validation.required') }}" 
                                           id="email" placeholder="{{ trans('landing.contact.placeholder.email') }}" required="" type="email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div><!-- /.column -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="controls">
                                    <textarea class="form-control" data-error="{{ trans('landing.contact.validation.required') }}" 
                                              id="message" placeholder="{{ trans('landing.contact.placeholder.message') }}" required="" rows="5"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt15">
                        <div class="col-sm-6">
                            <div id="msgSubmit" class="h4 hidden mt10 no-margin-bottom"></div>
                        </div><!-- /.column -->
                        <div class="col-sm-6 text-right">
                            <button type="submit" id="submit" class="btn btn-default btn-lg">{{ trans('landing.contact.button.send') }}</button>
                        </div><!-- /.column -->
                    </div><!-- /.row -->
                </form><!-- /.form -->
            </div><!-- /.column -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.section -->
<!-- End Contact -->