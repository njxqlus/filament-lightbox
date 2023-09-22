<?php

namespace Njxqlus\Filament\Components;

use Closure;

trait GLightBox
{
    protected Closure|string $slideGallery = 'gallery1';

    protected Closure|string $slideTitle = '';

    protected Closure|string $slideDescription = '';

    protected Closure|string $slideDescPosition = 'bottom';

    protected Closure|string $slideType = 'image';

    protected Closure|string $slideWidth = '900px';

    protected Closure|string $slideHeight = '506px';

    protected Closure|bool $slideZoomable = true;

    protected Closure|bool $slideDraggable = true;

    protected Closure|string $slideSizes = '';

    protected Closure|string $slideSrcSet = '';

    protected Closure|string $slideEffect = 'zoom';

    public function slideGallery(string|Closure $slideGallery): static
    {
        $this->slideGallery = $slideGallery;

        return $this;
    }

    public function getSlideGallery(): string
    {
        return $this->evaluate($this->slideGallery);
    }

    public function slideTitle(string|Closure $slideTitle): static
    {
        $this->slideTitle = $slideTitle;

        return $this;
    }

    public function getSlideTitle(): string
    {
        return $this->evaluate($this->slideTitle);
    }

    public function slideDescription(string|Closure $slideDescription): static
    {
        $this->slideDescription = $slideDescription;

        return $this;
    }

    public function getSlideDescription(): string
    {
        return $this->evaluate($this->slideDescription);
    }

    public function slideDescPosition(string|Closure $slideDescPosition): static
    {
        $this->slideDescPosition = $slideDescPosition;

        return $this;
    }

    public function getSlideDescPosition(): string
    {
        return $this->evaluate($this->slideDescPosition);
    }

    public function slideType(string|Closure $slideType): static
    {
        $this->slideType = $slideType;

        return $this;
    }

    public function getSlideType(): string
    {
        return $this->evaluate($this->slideType);
    }

    public function slideEffect(string|Closure $slideEffect): static
    {
        $this->slideEffect = $slideEffect;

        return $this;
    }

    public function getSlideEffect(): string
    {
        return $this->evaluate($this->slideEffect);
    }

    public function slideWidth(string|Closure $slideWidth): static
    {
        $this->slideWidth = $slideWidth;

        return $this;
    }

    public function getSlideWidth(): string
    {
        return $this->evaluate($this->slideWidth);
    }

    public function slideHeight(string|Closure $slideHeight): static
    {
        $this->slideHeight = $slideHeight;

        return $this;
    }

    public function getSlideHeight(): string
    {
        return $this->evaluate($this->slideHeight);
    }

    public function slideZoomable(bool|Closure $condition = true): static
    {
        $this->slideZoomable = $condition;

        return $this;
    }

    public function getSlideZoomable(): bool
    {
        return $this->evaluate($this->slideZoomable);
    }

    public function slideDraggable(bool|Closure $condition = true): static
    {
        $this->slideDraggable = $condition;

        return $this;
    }

    public function getSlideDraggable(): bool
    {
        return $this->evaluate($this->slideDraggable);
    }

    public function slideSizes(string|Closure $slideSizes): static
    {
        $this->slideSizes = $slideSizes;

        return $this;
    }

    public function getSlideSizes(): string
    {
        return $this->evaluate($this->slideSizes);
    }

    public function slideSrcSet(string|Closure $slideSrcSet): static
    {
        $this->slideSrcSet = $slideSrcSet;

        return $this;
    }

    public function getSlideSrtSet(): string
    {
        return $this->evaluate($this->slideSrcSet);
    }
}
