<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Prefix
    |--------------------------------------------------------------------------
    |
    | If you are using a tailwind prefix, you can specify it here.
    */

    'prefix' => env('TAILWIND_MERGE_PREFIX', null),

    /*
    |--------------------------------------------------------------------------
    | Class groups
    |--------------------------------------------------------------------------
    |
    | If TailwindMerge is not able to merge your changes properly you can
    | modify the merge process by modifying existing class groups or adding
    | new class groups.
    |
    | For example, if you want to add a custom font size of 'very-large':
    | 'classGroups' => [
    |     'font-size' => [
    |         ['text' => ['very-large']]
    |     ],
    | ],
    */

    'classGroups' => [],
];
