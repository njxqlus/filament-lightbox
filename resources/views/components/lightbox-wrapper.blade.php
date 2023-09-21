@props([
   'parentEntryWrapper',
   'href',
   'id' => null,
   'extraAttributes' => [],
   'entry' => null,
   'gallery' => null,
   'title' => null,
   'description' => null,
   'descPosition' => null,
   'type' => null,
   'effect' => null,
   'widthOption' => null,
   'heightOption' => null,
   'zoomable' => null,
   'draggable' => null,
   'sizes' => null,
   'srtSet' => null,
   'selector' => null,
   'skin' => null,
   'slideEffect' => null,
   'moreText' => null,
   'moreLength' => null,
   'closeButton' => null,
   'touchNavigation' => null,
   'touchFollowAxis' => null,
   'keyBoardNavigation' => null,
   'closeOnOutsideClick' => null,
   'loop' => null,
   'dragToleranceX' => null,
   'dragToleranceY' => null,
   'dragAutoSnap' => null,
   'preload' => null,
   'autoplayVideos' => null,
   'autofocusVideos' => null,
])
@php
    if ($entry) {
        $id = $entry->getId();
        $extraAttributes = $entry->getExtraAttributes();
        $parentEntryWrapper = $entry->parentEntryWrapper;
        $href = $entry->getHref();
        $gallery = $entry->getGallery();
        $title = $entry->getTitle();
        $description = $entry->getDescription();
        $descPosition = $entry->getDescPosition();
        $type = $entry->getType();
        $effect = $entry->getEffect();
        $widthOption = $entry->getWidthOption();
        $heightOption = $entry->getHeightOption();
        $zoomable = $entry->getZoomable();
        $draggable = $entry->getDraggable();
        $sizes = $entry->getSizes();
        $srtSet = $entry->getSrtSet();
        $selector = $entry->getSelector();
        $skin = $entry->getSkin();
        $slideEffect = $entry->getSlideEffect();
        $moreText = $entry->getMoreText();
        $moreLength = $entry->getMoreLength();
        $closeButton = $entry->getCloseButton();
        $touchNavigation = $entry->getTouchNavigation();
        $touchFollowAxis = $entry->getTouchFollowAxis();
        $keyBoardNavigation = $entry->getKeyBoardNavigation();
        $closeOnOutsideClick = $entry->getCloseOnOutsideClick();
        $loop = $entry->getLoop();
        $dragToleranceX = $entry->getDragToleranceX();
        $dragToleranceY = $entry->getDragToleranceY();
        $dragAutoSnap = $entry->getDragAutoSnap();
        $preload = $entry->getPreload();
        $autoplayVideos = $entry->getAutoplayVideos();
        $autofocusVideos = $entry->getAutofocusVideos();
    }
@endphp

<x-dynamic-component :component="$parentEntryWrapper" :entry="$entry">
    <a
        {{
            $attributes
                ->merge([
                    'id' => $id,
                ], escape: false)
                ->merge($extraAttributes, escape: false)
        }}
        class="glightbox"
        href="{{ $href }}"
        data-gallery="{{ $gallery }}"
        data-title="{{ $title }}"
        data-description="{{ $description }}"
        data-desc-position="{{ $descPosition }}"
        data-type="{{ $type }}"
        data-effect="{{ $effect }}"
        data-width="{{ $widthOption }}"
        data-height="{{ $heightOption }}"
        data-zoomable="{{ $zoomable }}"
        data-draggable="{{ $draggable }}"
        data-sizes="{{ $sizes }}"
        data-srcset="{{ $srtSet }}"
    >
        {{ $slot }}
    </a>
</x-dynamic-component>

<script type="module">
    const lightbox = GLightbox({
        selector: @js($selector),
        skin: @js($skin),
        slideEffect: @js($slideEffect),
        moreText: @js($moreText),
        moreLength: @js($moreLength),
        closeButton: @js($closeButton),
        touchNavigation: @js($touchNavigation),
        touchFollowAxis: @js($touchFollowAxis),
        keyBoardNavigation: @js($keyBoardNavigation),
        closeOnOutsideClick: @js($closeOnOutsideClick),
        loop: @js($loop),
        dragToleranceX: @js($dragToleranceX),
        dragToleranceY: @js($dragToleranceY),
        dragAutoSnap: @js($dragAutoSnap),
        preload: @js($preload),
        autoplayVideos: @js($autoplayVideos),
        autofocusVideos: @js($autofocusVideos),
    });
</script>
