<?php

namespace JeffersonGoncalves\Filament\GdprConsent;

use JeffersonGoncalves\FilamentPluginCore\BasePackageServiceProvider;
use Spatie\LaravelPackageTools\Package;

class GdprConsentServiceProvider extends BasePackageServiceProvider
{
    public static string $name = 'filament-gdpr-consent';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasTranslations();
    }
}
