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
                        <li><a href="#home" data-id="home" class="scroll-link">{{ trans('landing.header.home') }}</a></li>
                        <li><a href="#ideology" data-id="ideology" class="scroll-link">{{ trans('landing.header.ideology') }}</a></li>
                        <li><a href="#services" data-id="services" class="scroll-link">{{ trans('landing.header.services') }}</a></li>
                        <li><a href="#about" data-id="about" class="scroll-link">{{ trans('landing.header.about') }}</a></li>
                        <li><a href="#work" data-id="work" class="scroll-link">{{ trans('landing.header.work') }}</a></li>
                        <li><a href="#contact" data-id="contact" class="scroll-link">{{ trans('landing.header.contact') }}</a></li>
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
</header>
<!-- End Header -->