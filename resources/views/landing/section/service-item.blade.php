<div class="{{ $itemSizeClasses }}">
    <div class="services-box {{ $position }}">
        <span class="{{ $icon }} services-icon"></span>
        <h3 class="service-name">{{ trans($name) }}</h3>
        <p class="text-small">{{ trans($shortDescription) }}</p>
        @if($showModal)
        <button type="button" class="btn btn-default mt10" data-toggle="modal" data-target="#{{ $modalId }}">
            {{ trans($modalTrigger) }}
        </button>
        @endif
    </div>
</div><!-- /.column -->
@if($showModal)
<div class="modal fade" id="{{ $modalId }}" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="ion-ios-close-empty"></span>
                </button>
                <span class="{{ $icon }} services-icon-2"></span>
                <h4 class="service-title">{{ trans($modalTitle) }}</h4>
            </div>
            <div class="modal-body">
                <p>{{ trans($modalDescription) }}</p>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endif