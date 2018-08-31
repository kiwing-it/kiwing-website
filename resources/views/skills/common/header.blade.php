<!-- Begin Header -->
<header>
    <!-- Begin Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="row">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="/images/kiwing-name.png" />
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#profile" data-id="profile" class="scroll-link">{{ trans('skills.header.navigation.profile') }}</a></li>
                        <li><a href="#more-options" data-id="more-options" class="scroll-link">{{ trans('skills.header.navigation.more_options') }}</a></li>
                        <li>
                            <a href="{{ route('locale', ['locale' => $alternativeLocale]) }}" data-id="locale">
                                <img src="/images/{{ $alternativeLocale }}-flag.png" style="width: 4.5rem; height: 2.5rem;">
                            </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End Navigation -->

    <!-- Begin Breadcrumbs -->
    <div class="breadcrumb-holder">
        <div class="container-fluid">
            <div class="row">

                <!-- Page Title -->
                <div class="hidden-xs col-sm-6">
                    <h1>{{ trans('skills.header.breadcrumbs.current') }}</h1>
                </div>

                <!-- Breadcrumbs -->
                <div class="col-xs-12 col-sm-6 text-right">
                    <ol class="breadcrumb">
                        <li>
                            <span class="ion-home breadcrumb-home"></span>
                            <a href="/">{{ trans('skills.header.breadcrumbs.home') }}</a>
                        </li>
                        <li>{{ trans('skills.header.breadcrumbs.current') }}</li>
                    </ol>
                </div><!-- /column -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>
    <!-- End Breadcrumbs -->

</header>
<!-- End Header -->