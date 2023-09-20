<a
    {{
        $attributes
            ->merge([
                'id' => $getId(),
            ], escape: false)
            ->merge($getExtraAttributes(), escape: false)
    }}
    class="glightbox"
    href="{{ $getHref() }}"
    data-title="{{ $getTitle() }}"
    data-description="{{ $getDescription() }}"
    data-desc-position="{{ $getDescPosition() }}"
    data-type="{{ $getType() }}"
    data-effect="{{ $getEffect() }}"
    data-width="{{ $getWidthOption() }}"
    data-height="{{ $getHeightOption() }}"
    data-zoomable="{{ $getZoomable() }}"
    data-draggable="{{ $getDraggable() }}"
    data-sizes="{{ $getSizes() }}"
    data-srcset="{{ $getSrtSet() }}"
>
    {{ $getChildComponentContainer() }}
</a>

<script type="module">
    const lightbox = GLightbox({
        selector: @js($getSelector()),
        skin: @js($getSkin()),
        openEffect: @js($getOpenEffect()),
        closeEffect: @js($getCloseEffect()),
        slideEffect: @js($getSlideEffect()),
        moreText: @js($getMoreText()),
        moreLength: @js($getMoreLength()),
        closeButton: @js($getCloseButton()),
        touchNavigation: @js($getTouchNavigation()),
        touchFollowAxis: @js($getTouchFollowAxis()),
        keyBoardNavigation: @js($getKeyBoardNavigation()),
        closeOnOutsideClick: @js($getCloseOnOutsideClick()),
        loop: @js($getLoop()),
        dragToleranceX: @js($getDragToleranceX()),
        dragToleranceY: @js($getDragToleranceY()),
        dragAutoSnap: @js($getDragAutoSnap()),
        preload: @js($getPreload()),
        autoplayVideos: @js($getAutoplayVideos()),
        autofocusVideos: @js($getAutofocusVideos()),
    });
</script>
