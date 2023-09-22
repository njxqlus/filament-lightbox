<?php

namespace Njxqlus\Filament\Components;

use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentLightboxServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-lightbox';

    public static string $viewNamespace = 'filament-lightbox';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasConfigFile('filament-lightbox')
            ->hasViews(static::$viewNamespace);
    }

    public function packageBooted(): void
    {
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );
    }

    protected function getAssetPackageName(): ?string
    {
        return 'njxqlus/filament-lightbox';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            Css::make('filament-lightbox-styles', __DIR__ . '/../resources/dist/filament-lightbox.css'),
            Js::make('filament-lightbox-scripts', __DIR__ . '/../resources/dist/filament-lightbox.js'),
        ];
    }
}
