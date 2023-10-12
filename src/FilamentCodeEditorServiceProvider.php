<?php

namespace Shafer\FilamentCodeEditor;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentCodeEditorServiceProvider extends PackageServiceProvider
{

    public function configurePackage(Package $package): void
    {
        $package->name('filament-code-editor')->hasViews();
    }
}
