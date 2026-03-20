<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Cache Configuration
    |--------------------------------------------------------------------------
    |
    | Configure caching behavior for merged class results.
    |
    | enabled:
    |   Enable or disable caching entirely.
    |
    | store:
    |   The cache store to use. This must match one of the stores defined
    |   in config/cache.php. If null, the default cache store is used.
    |
    */

    'cache' => [
        'enabled' => env('TW_MERGE_CACHE_ENABLED', true),
        'store' => env('TW_MERGE_CACHE_STORE'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Merge configuration
    |--------------------------------------------------------------------------
    |
    | Configuration passed directly to the TailwindMerge engine.
    | These options control how Tailwind CSS classes are merged.
    |
    | For example, if you want to add a custom font size of 'very-large':
    | 'merge_config' => [
    |     'classGroups' => [
    |         'font-size' => [
    |             ['text' => ['very-large']]
    |         ],
    |     ],
    | ],
    |
    | Available options:
    | - cacheSize: int,
    | - prefix: ?string,
    | - theme: array<string, list<mixed>>,
    | - classGroups: array<string, list<mixed>>,
    | - conflictingClassGroups: array<string, list<string>>,
    | - conflictingClassGroupModifiers: array<string, list<string>>,
    | - orderSensitiveModifiers: list<string>,
    */

    'merge_config' => [],
];
