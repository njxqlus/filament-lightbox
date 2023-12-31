<x-filament-lightbox::lightbox-wrapper
    :parentEntryWrapper="$getEntryWrapperView()"
    :href="$getHref()"
    :id="$getId()"
    :extraAttributes="$getExtraAttributes()"
    :gallery="$getGallery()"
    :title="$getTitle()"
    :description="$getDescription()"
    :descPosition="$getDescPosition()"
    :type="$getType()"
    :widthOption="$getWidthOption()"
    :heightOption="$getHeightOption()"
    :zoomable="$getZoomable()"
    :draggable="$getDraggable()"
    :sizes="$getSizes()"
    :srtSet="$getSrtSet()"
    :selector="$getSelector()"
    :skin="$getSkin()"
    :effect="$getEffect()"
    :slideEffect="$getSlideEffect()"
    :moreText="$getMoreText()"
    :moreLength="$getMoreLength()"
    :closeButton="$getCloseButton()"
    :touchNavigation="$getTouchNavigation()"
    :touchFollowAxis="$getTouchFollowAxis()"
    :keyBoardNavigation="$getKeyBoardNavigation()"
    :closeOnOutsideClick="$getCloseOnOutsideClick()"
    :loop="$getLoop()"
    :dragToleranceX="$getDragToleranceX()"
    :dragToleranceY="$getDragToleranceY()"
    :dragAutoSnap="$getDragAutoSnap()"
    :preload="$getPreload()"
    :autoplayVideos="$getAutoplayVideos()"
    :autofocusVideos="$getAutofocusVideos()"
>
    {{ $getChildComponentContainer() }}
</x-filament-lightbox::lightbox-wrapper>
