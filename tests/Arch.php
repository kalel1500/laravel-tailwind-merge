<?php

declare(strict_types=1);

test('facades')
    ->expect('Thehouseofel\TailwindMerge\Facades\TailwindMerge')
    ->toOnlyUse([
        'Illuminate\Support\Facades\Facade',
    ]);

test('service providers')
    ->expect('Thehouseofel\TailwindMerge\TailwindMergeServiceProvider')
    ->toOnlyUse([
        'Illuminate\Contracts\Support\DeferrableProvider',
        'Illuminate\Support\ServiceProvider',
        'Illuminate\Support\Facades\Blade',
        'Illuminate\View\Compilers\BladeCompiler',
        'Illuminate\View\ComponentAttributeBag',
        'TalesFromADev\TailwindMerge\TailwindMergeInterface',
        'TalesFromADev\TailwindMerge\TailwindMerge',

        // helpers...
        'app',
        'config',
        'config_path',
        'resolve',
    ]);
