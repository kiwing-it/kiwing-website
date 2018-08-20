<!-- Begin Work -->
<section id="work" class="background1 section-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 section-title text-center">
                <h2>{{ trans('landing.work.title') }}</h2>
                <span class="section-divider mb15"></span>
                <p class="mb30 scaleReveal">{{ trans('landing.work.subtitle') }}</p>
            </div><!-- /.column -->
        </div><!-- /.row -->
        <div class="row">
            <div class="col-xs-12 text-center mb50">
                <!-- Filter Buttons -->
                <button class="filter btn btn-default btn-category btn-lg" data-filter="all">
					{{ trans('landing.work.categories.all') }}
				</button>
                <button class="filter btn btn-default btn-category btn-lg" data-filter=".web-application">
					{{ trans('landing.work.categories.web_application') }}
				</button>
                <button class="filter btn btn-default btn-category btn-lg" data-filter=".mobile-application">
					{{ trans('landing.work.categories.mobile_application') }}
				</button>
                <button class="filter btn btn-default btn-category btn-lg" data-filter=".progressive-web-app">
					{{ trans('landing.work.categories.progressive_web_app') }}
				</button>

                <!-- Sort Buttons -->
                <button class="sort btn btn-default btn-sort btn-lg" data-sort="my-order:asc">
					<span class="ion-ios-plus-empty"></span>
				</button>
                <button class="sort btn btn-default btn-sort btn-lg" data-sort="my-order:desc">
					<span class="ion-ios-minus-empty"></span>
				</button>
            </div><!-- /.column -->
        </div><!-- /.row -->
        <div id="thework">

            <!-- Item 1 -->
            @include('landing.section.work-item', [
            	'mainImage'    => '/images/work/workana/main.png',
            	'detailImage'  => '/images/work/workana/detail.png',
            	'categoryId'   => 'web-application',
            	'categoryName' => trans('landing.work.categories.web_application'),
            	'priority'     => '1',
            	'title'        => trans('landing.work.items.workana.title'),
            	'description'  => trans('landing.work.items.workana.description'),
            	'link'         => 'https://www.workana.com/',
            ])

            <!-- Item 2 -->
			@include('landing.section.work-item', [
                'mainImage'    => '/images/work/pausa/main.png',
                'detailImage'  => '/images/work/pausa/detail.png',
                'categoryId'   => 'mobile-application',
                'categoryName' => trans('landing.work.categories.mobile_application'),
                'priority'     => '2',
                'title'        => trans('landing.work.items.pausa.title'),
            	'description'  => trans('landing.work.items.pausa.description'),
                'link'         => 'https://play.google.com/store/apps/details?id=com.ionicframework.mindfulness924927',
            ])

			<!-- Item 3 -->
			@include('landing.section.work-item', [
				'mainImage'    => '/images/work/animaedu/main.png',
				'detailImage'  => '/images/work/animaedu/detail.png',
				'categoryId'   => 'web-application',
				'categoryName' => trans('landing.work.categories.web_application'),
				'priority'     => '3',
				'title'        => trans('landing.work.items.animaedu.title'),
            	'description'  => trans('landing.work.items.animaedu.description'),
				'link'         => 'https://animaedu.com/',
			])

			<!-- Item 4 -->
			@include('landing.section.work-item', [
				'mainImage'    => '/images/work/family-tree/main.png',
				'detailImage'  => '/images/work/family-tree/detail.png',
				'categoryId'   => 'web-application',
				'categoryName' => trans('landing.work.categories.web_application'),
				'priority'     => '4',
				'title'        => trans('landing.work.items.family_tree.title'),
            	'description'  => trans('landing.work.items.family_tree.description'),
			])

        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.section -->
<!-- Begin Work -->