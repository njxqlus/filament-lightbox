<?php

namespace Njxqlus\Filament\Components\Infolists;

use Closure;
use Filament\Infolists\Components\Component;

class LightboxEntry extends Component
{
    protected string $view = 'filament-lightbox::infolists.lightbox-entry';

    protected Closure|string $href;
    protected Closure|string $title = '';
    protected Closure|string $description = '';
    protected Closure|string $descPosition = 'bottom';
    protected Closure|string $type = 'image';
    protected Closure|string $effect = 'zoom';
    protected Closure|string $width = '900px';
    protected Closure|string $height = '506px';
    protected Closure|bool $zoomable = true;
    protected Closure|bool $draggable = true;
    protected Closure|string $sizes = '';
    protected Closure|string $srcSet = '';
    protected Closure|string $selector = '.glightbox';
    protected Closure|string $skin = 'clean';
    protected Closure|string $openEffect = 'zoom';
    protected Closure|string $closeEffect = 'zoom';
    protected Closure|string $slideEffect = 'slide';
    protected Closure|string $moreText = 'See more';
    protected Closure|int $moreLength = 60;
    protected Closure|bool $closeButton = true;
    protected Closure|bool $touchNavigation = true;
    protected Closure|bool $touchFollowAxis = true;
    protected Closure|bool $keyBoardNavigation = true;
    protected Closure|bool $closeOnOutsideClick = true;
    protected Closure|bool $loop = false;
    protected Closure|int $dragToleranceX = 40;
    protected Closure|int $dragToleranceY = 65;
    protected Closure|bool $dragAutoSnap = false;
    protected Closure|bool $preload = true;
    protected Closure|bool $autoplayVideos = true;
    protected Closure|bool $autofocusVideos = false;


    final public function __construct(array|Closure $schema = [])
    {
        $this->schema($schema);
    }

    /**
     * @param array<Component> | Closure $schema
     */
    public static function make(array|Closure $schema = []): static
    {
        $static = app(static::class, ['schema' => $schema]);
        $static->configure();

        return $static;
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

    public function title(string|Closure $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->evaluate($this->title);
    }

    public function description(string|Closure $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->evaluate($this->description);
    }

    public function descPosition(string|Closure $descPosition): static
    {
        $this->descPosition = $descPosition;

        return $this;
    }

    public function getDescPosition(): string
    {
        return $this->evaluate($this->descPosition);
    }

    public function type(string|Closure $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getType(): string
    {
        return $this->evaluate($this->type);
    }

    public function effect(string|Closure $effect): static
    {
        $this->effect = $effect;

        return $this;
    }

    public function getEffect(): string
    {
        return $this->evaluate($this->effect);
    }

    public function width(string|Closure $width): static
    {
        $this->width = $width;

        return $this;
    }

    public function getWidth(): string
    {
        return $this->evaluate($this->width);
    }

    public function height(string|Closure $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function getHeight(): string
    {
        return $this->evaluate($this->height);
    }

    public function zoomable(bool|Closure $condition = true): static
    {
        $this->zoomable = $condition;

        return $this;
    }

    public function getZoomable(): bool
    {
        return $this->evaluate($this->zoomable);
    }

    public function draggable(bool|Closure $condition = true): static
    {
        $this->draggable = $condition;

        return $this;
    }

    public function getDraggable(): bool
    {
        return $this->evaluate($this->draggable);
    }

    public function sizes(string|Closure $sizes): static
    {
        $this->sizes = $sizes;

        return $this;
    }

    public function getSizes(): string
    {
        return $this->evaluate($this->sizes);
    }

    public function srcSet(string|Closure $srcSet): static
    {
        $this->srcSet = $srcSet;

        return $this;
    }

    public function getSrtSet(): string
    {
        return $this->evaluate($this->srcSet);
    }

    public function selector(string|Closure $selector): static
    {
        $this->selector = $selector;

        return $this;
    }

    public function getSelector(): string
    {
        return $this->evaluate($this->selector);
    }


    public function skin(string|Closure $skin): static
    {
        $this->skin = $skin;

        return $this;
    }

    public function getSkin(): string
    {
        return $this->evaluate($this->skin);
    }

    public function openEffect(string|Closure $openEffect): static
    {
        $this->openEffect = $openEffect;

        return $this;
    }

    public function getOpenEffect(): string
    {
        return $this->evaluate($this->openEffect);
    }

    public function closeEffect(string|Closure $closeEffect): static
    {
        $this->closeEffect = $closeEffect;

        return $this;
    }

    public function getCloseEffect(): string
    {
        return $this->evaluate($this->closeEffect);
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

    public function moreText(string|Closure $moreText): static
    {
        $this->moreText = $moreText;

        return $this;
    }

    public function getMoreText(): string
    {
        return $this->evaluate($this->moreText);
    }

    public function moreLength(int|Closure $moreLength): static
    {
        $this->moreLength = $moreLength;

        return $this;
    }

    public function getMoreLength(): int
    {
        return $this->evaluate($this->moreLength);
    }

    public function closeButton(bool|Closure $condition = true): static
    {
        $this->closeButton = $condition;

        return $this;
    }

    public function getCloseButton(): bool
    {
        return $this->evaluate($this->closeButton);
    }

    public function touchNavigation(bool|Closure $condition = true): static
    {
        $this->touchNavigation = $condition;

        return $this;
    }

    public function getTouchNavigation(): bool
    {
        return $this->evaluate($this->touchNavigation);
    }

    public function touchFollowAxis(bool|Closure $condition = true): static
    {
        $this->touchFollowAxis = $condition;

        return $this;
    }

    public function getTouchFollowAxis(): bool
    {
        return $this->evaluate($this->touchFollowAxis);
    }

    public function keyBoardNavigation(bool|Closure $condition = true): static
    {
        $this->keyBoardNavigation = $condition;

        return $this;
    }

    public function getKeyBoardNavigation(): bool
    {
        return $this->evaluate($this->keyBoardNavigation);
    }

    public function closeOnOutsideClick(bool|Closure $condition = true): static
    {
        $this->closeOnOutsideClick = $condition;

        return $this;
    }

    public function getCloseOnOutsideClick(): bool
    {
        return $this->evaluate($this->closeOnOutsideClick);
    }

    public function loop(bool|Closure $condition = true): static
    {
        $this->loop = $condition;

        return $this;
    }

    public function getLoop(): bool
    {
        return $this->evaluate($this->loop);
    }

    public function dragToleranceX(string|Closure $dragToleranceX): static
    {
        $this->dragToleranceX = $dragToleranceX;

        return $this;
    }

    public function getDragToleranceX(): string
    {
        return $this->evaluate($this->dragToleranceX);
    }

    public function dragToleranceY(string|Closure $dragToleranceY): static
    {
        $this->dragToleranceY = $dragToleranceY;

        return $this;
    }

    public function getDragToleranceY(): string
    {
        return $this->evaluate($this->dragToleranceY);
    }

    public function dragAutoSnap(bool|Closure $condition = true): static
    {
        $this->dragAutoSnap = $condition;

        return $this;
    }

    public function getDragAutoSnap(): bool
    {
        return $this->evaluate($this->dragAutoSnap);
    }

    public function preload(bool|Closure $condition = true): static
    {
        $this->preload = $condition;

        return $this;
    }

    public function getPreload(): bool
    {
        return $this->evaluate($this->preload);
    }

    public function autoplayVideos(bool|Closure $condition = true): static
    {
        $this->autoplayVideos = $condition;

        return $this;
    }

    public function getAutoplayVideos(): bool
    {
        return $this->evaluate($this->autoplayVideos);
    }

    public function autofocusVideos(bool|Closure $condition = true): static
    {
        $this->autofocusVideos = $condition;

        return $this;
    }

    public function getAutofocusVideos(): bool
    {
        return $this->evaluate($this->autofocusVideos);
    }
}
