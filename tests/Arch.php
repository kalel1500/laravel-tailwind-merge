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
        'Illuminate\View\Compilers\BladeCompiler',
        'Illuminate\View\ComponentAttributeBag',
        'TailwindMerge',

        // helpers...
        'app',
        'config',
        'config_path',
        'resolve',
    ]);
