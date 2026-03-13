<?php

declare(strict_types=1);

namespace Thehouseofel\TailwindMerge\Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Thehouseofel\TailwindMerge\TailwindMergeServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    use InteractsWithViews;

    protected function getPackageProviders($app): array
    {
        return [
            TailwindMergeServiceProvider::class,
        ];
    }
}
