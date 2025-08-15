<?php

namespace Njxqlus\Filament\Components\Infolists;

use Filament\Schemas\Schema;
use Njxqlus\Filament\Components\GLightBox;
use Njxqlus\Filament\Components\HasGLightBox;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class LightboxSpatieMediaLibraryImageEntry extends \Filament\Infolists\Components\SpatieMediaLibraryImageEntry implements HasGLightBox
{
    use GLightBox;

    protected string $view = 'filament-lightbox::infolists.lightbox-spatie-media-library-image-entry';

    public function getChildComponentContainer($key = null): Schema
    {
        if (filled($key)) {
            return $this->getChildComponentContainers()[$key];
        }

        return LightboxComponentContainer::make($this->getLivewire())
            ->parentComponent($this)
            ->components(
                fn () => $this
                    ->getRecord()
                    ->getRelationValue('media')
                    ->filter(fn (Media $media): bool => blank($this->getCollection()) || ($media->getAttributeValue('collection_name') === $this->getCollection()))
                    ->sortBy('order_column')
                    ->transform(fn (Media $item) => $this->makeLightboxEntryFromMedia($item))
                    ->toArray()
            );
    }

    protected function makeLightboxEntryFromMedia(Media $media): LightboxImageEntry
    {
        $entry = LightboxImageEntry::make($media->uuid)
            ->label(null)
            ->hiddenLabel(true)
            ->slideGallery($this->getStatePath());

        if ($this->getVisibility() === 'private') {
            try {
                if (filled($this->getConversion()) && $media->hasGeneratedConversion($this->getConversion())) {
                    $entry->state($media->getTemporaryUrl(now()->addMinutes(5), $this->getConversion()));
                } else {
                    $entry->state($media->getTemporaryUrl(now()->addMinutes(5)));
                }
                $entry->href($media->getTemporaryUrl(now()->addMinutes(5)));
            } catch (Throwable $exception) {
                // This driver does not support creating temporary URLs.
            }
        } else {
            if (filled($this->getConversion()) && $media->hasGeneratedConversion($this->getConversion())) {
                $entry->state($media->getFullUrl($this->getConversion()));
            } else {
                $entry->state($media->getFullUrl());
            }
            $entry->href($media->getFullUrl());
        }

        if ($this->isCircular()) {
            $entry->circular();
        }
        if ($this->isSquare()) {
            $entry->square();
        }
        if ($this->getHeight()) {
            $entry->height($this->getHeight());
        }
        if ($this->getWidth()) {
            $entry->width($this->getWidth());
        }
        if ($this->getVisibility()) {
            $entry->visibility($this->getVisibility());
        }
        if ($this->getDefaultImageUrl()) {
            $entry->defaultImageUrl($this->getDefaultImageUrl());
        }

        if ($this->getSlideWidth()) {
            $entry->slideWidth($this->getSlideWidth());
        }
        if ($this->getSlideHeight()) {
            $entry->slideHeight($this->getSlideHeight());
        }
        if ($this->getSlideZoomable()) {
            $entry->slideZoomable($this->getSlideZoomable());
        }
        if ($this->getSlideDraggable()) {
            $entry->slideDraggable($this->getSlideDraggable());
        }
        if ($this->getSlideEffect()) {
            $entry->slideEffect($this->getSlideEffect());
        }
        if ($this->getExtraImgAttributes()) {
            $entry->extraImgAttributes($this->getExtraImgAttributes());
        }

        return $entry;
    }
}
