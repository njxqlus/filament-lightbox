<?php

namespace Njxqlus\Filament\Components\Infolists;

use Closure;
use Filament\Infolists\Components\ImageEntry;
use Njxqlus\Filament\Components\GLightBox;

class LightboxImageEntry extends ImageEntry
{
    use GLightBox;

    protected string $view = 'filament-lightbox::infolists.lightbox-image-entry';

    protected Closure|string $href;
    protected Closure|string $image = '';

    public function image(string|Closure $image): static
    {
        $this->image = $image;

        return $this;
    }

    public function getImage(): string
    {
        return $this->evaluate($this->image);
    }

    public function href(string|Closure $href): static
    {
        $this->href = $href;

        return $this;
    }

    public function getHref(): string
    {
        return $this->evaluate($this->href);
    }
}
