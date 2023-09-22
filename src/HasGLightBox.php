<?php

namespace Njxqlus\Filament\Components;

interface HasGLightBox
{
    public function evaluate(mixed $value, array $namedInjections = [], array $typedInjections = []): mixed;
}
