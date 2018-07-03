<!-- Begin Services -->
<section id="services" class="background2 section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section-title text-center">
                <h2>{{ trans('landing.services.title') }}</h2>
                <span class="section-divider"></span>
            </div><!-- /.column -->
        </div><!-- /.row -->

        <div class="row">

            <!-- Item 1 -->
            @include('landing.section.service-item', [
                'name'             => 'landing.services.first.name',
                'shortDescription' => 'landing.services.first.short_description',
                'icon'             => 'pe-7s-monitor',
                'itemSizeClasses'  => 'col-xs-12 col-sm-6 col-md-4 col-lg-4',
                'position'         => 'leftReveal',
                'showModal'        => false,
                'modalId'          => 'service-item1',
                'modalTitle'       => 'landing.services.first.modal.title',
                'modalDescription' => 'landing.services.first.modal.description',
                'modalTrigger'     => 'landing.services.first.modal.trigger'
            ])

            <!-- Item 2 -->
            @include('landing.section.service-item', [
                'name'             => 'landing.services.second.name',
                'shortDescription' => 'landing.services.second.short_description',
                'icon'             => 'pe-7s-phone',
                'itemSizeClasses'  => 'col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30-xs',
                'position'         => 'topReveal',
                'showModal'        => false,
                'modalId'          => 'service-item2',
                'modalTitle'       => 'landing.services.second.modal.title',
                'modalDescription' => 'landing.services.second.modal.description',
                'modalTrigger'     => 'landing.services.second.modal.trigger'
            ])

            <!-- Item 3 -->
            @include('landing.section.service-item', [
                'name'             => 'landing.services.third.name',
                'shortDescription' => 'landing.services.third.short_description',
                'icon'             => 'pe-7s-refresh-2',
                'itemSizeClasses'  => 'col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30-sm mt30-xs',
                'position'         => 'rightReveal',
                'showModal'        => false,
                'modalId'          => 'service-item3',
                'modalTitle'       => 'landing.services.third.modal.title',
                'modalDescription' => 'landing.services.third.modal.description',
                'modalTrigger'     => 'landing.services.third.modal.trigger'
            ])

            <!-- Item 4 -->
            @include('landing.section.service-item', [
                'name'             => 'landing.services.fourth.name',
                'shortDescription' => 'landing.services.fourth.short_description',
                'icon'             => 'pe-7s-plugin',
                'itemSizeClasses'  => 'col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30',
                'position'         => 'leftReveal',
                'showModal'        => false,
                'modalId'          => 'service-item4',
                'modalTitle'       => 'landing.services.fourth.modal.title',
                'modalDescription' => 'landing.services.fourth.modal.description',
                'modalTrigger'     => 'landing.services.fourth.modal.trigger'
            ])

            <!-- Item 5 -->
            @include('landing.section.service-item', [
                'name'             => 'landing.services.fifth.name',
                'shortDescription' => 'landing.services.fifth.short_description',
                'icon'             => 'pe-7s-display2',
                'itemSizeClasses'  => 'col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30',
                'position'         => 'bottomReveal',
                'showModal'        => false,
                'modalId'          => 'service-item5',
                'modalTitle'       => 'landing.services.fifth.modal.title',
                'modalDescription' => 'landing.services.fifth.modal.description',
                'modalTrigger'     => 'landing.services.fifth.modal.trigger'
            ])

            <!-- Item 6 -->
            @include('landing.section.service-item', [
                'name'             => 'landing.services.sixth.name',
                'shortDescription' => 'landing.services.sixth.short_description',
                'icon'             => 'pe-7s-portfolio',
                'itemSizeClasses'  => 'col-xs-12 col-sm-6 col-md-4 col-lg-4 mt30',
                'position'         => 'rightReveal',
                'showModal'        => false,
                'modalId'          => 'service-item6',
                'modalTitle'       => 'landing.services.sixth.modal.title',
                'modalDescription' => 'landing.services.sixth.modal.description',
                'modalTrigger'     => 'landing.services.sixth.modal.trigger'
            ])

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.section -->
<!-- End Services -->