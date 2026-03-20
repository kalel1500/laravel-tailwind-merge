<?php

declare(strict_types=1);

namespace Thehouseofel\TailwindMerge\Tests;

use Thehouseofel\TailwindMerge\TailwindMergeServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            TailwindMergeServiceProvider::class,
        ];
    }
}
