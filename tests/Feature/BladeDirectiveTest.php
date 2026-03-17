<?php

declare(strict_types=1);

it('provides a blade directive to merge tailwind classes', function () {
    $this->blade('<div class="@twMerge("h-4 h-6")"></div>')
        ->assertSee('class="h-6"', false);
});

