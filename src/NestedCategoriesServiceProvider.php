<?php

namespace Ce7in\NestedCategories;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Ce7in\NestedCategories\Commands\NestedCategoriesCommand;

class NestedCategoriesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-nested-categories')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-nested-categories_table')
            ->hasCommand(NestedCategoriesCommand::class);
    }
}
