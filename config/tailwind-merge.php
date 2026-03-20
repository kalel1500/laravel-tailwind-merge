<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Merge configuration
    |--------------------------------------------------------------------------
    |
    | If TailwindMerge is not able to merge your changes properly you can
    | modify the merge process by adding a custom merge configuration.
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
    | These are the available configuration options:
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
