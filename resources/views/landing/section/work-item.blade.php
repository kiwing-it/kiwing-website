<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 portfolio-box no-padding mix {{ $categoryId }}" data-my-order="{{ $priority }}">
    <div class="portfolio-image-holder">
        <img src="{{ $mainImage }}" alt="{{ $priority }}" class="img-responsive portfolio-image">
    </div>
    <span class="portfolio-badge badge">
        {{ $categoryName }}
    </span>
    <span class="portfolio-hover">
        <span>
            @if(isset($link))
                <a href="{{ $link }}" target="_blank">
                    <span class="portfolio-links">
                        <span class="ion-ios-arrow-right portfolio-links-icons"></span>
                    </span>
                </a>
            @endif
            <a href="{{ $detailImage }}" class="zoom" title="{{ $title }}">
                <span class="portfolio-links">
                    <span class="ion-arrow-expand portfolio-links-icons"></span>
                </span>
            </a>
            <span class="project-title no-margin-bottom mt10">
                {{ $title }}
            </span>
        </span>
    </span>
</div><!-- /.column -->