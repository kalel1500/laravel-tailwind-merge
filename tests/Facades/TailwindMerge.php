<?php

declare(strict_types=1);

use Illuminate\Config\Repository;
use Thehouseofel\TailwindMerge\Facades\TailwindMerge;
use Thehouseofel\TailwindMerge\TailwindMergeServiceProvider;

it('resolves resources', function () {
    $app = app();

    $app->bind('config', fn () => new Repository([
        'tailwind-merge' => [
        ],
    ]));

    (new TailwindMergeServiceProvider($app))->register();

    TailwindMerge::setFacadeApplication($app);

    expect(TailwindMerge::merge('h-4 h-6'))
        ->toBe('h-6');
});
