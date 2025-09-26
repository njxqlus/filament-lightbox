<?php

namespace Njxqlus\Filament\Components\Infolists;

use Closure;
use Filament\Schemas\Components\Component;
use Njxqlus\Filament\Components\GLightBox;
use Njxqlus\Filament\Components\HasGLightBox;

class Lightbox extends Component implements HasGLightBox
{
    use GLightBox;

    protected string $view = 'filament-lightbox::infolists.lightbox';

    protected Closure | string $href;

    final public function __construct(array | Closure $schema = [])
    {
        $this->schema($schema);
    }

    /**
     * @param  array<Component> | Closure  $schema
     */
    public static function make(array | Closure $schema = []): static
    {
        $static = app(static::class, ['schema' => $schema]);
        $static->configure();

        return $static;
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
}
