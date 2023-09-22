<?php

namespace Njxqlus\Filament\Components\Infolists;

use Closure;
use Filament\Infolists\Components\ImageEntry;
use Njxqlus\Filament\Components\GLightBox;
use Njxqlus\Filament\Components\HasGLightBox;

class LightboxImageEntry extends ImageEntry implements HasGLightBox
{
    use GLightBox;

    protected Closure | string $href;

    protected Closure | string | null $image = null;

    public string $parentEntryWrapper;

    public function image(string | Closure $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function href(string | Closure $href): static
    {
        $this->href = $href;

        return $this;
    }

    public function getHref(): string
    {
        return $this->evaluate($this->href);
    }

    public function getEntryWrapperView(): string
    {
        $this->parentEntryWrapper = parent::getEntryWrapperView();

        return 'filament-lightbox::lightbox-wrapper';
    }

    public function getImageUrl(string $state = null): ?string
    {
        return $this->image ? $this->evaluate($this->image) : parent::getImageUrl($state);
    }
}
