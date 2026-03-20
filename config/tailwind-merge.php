<?php

declare(strict_types=1);

return [
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
