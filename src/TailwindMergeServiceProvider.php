<?php

declare(strict_types=1);

namespace Thehouseofel\TailwindMerge;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\View\ComponentAttributeBag;
use TalesFromADev\TailwindMerge\TailwindMergeInterface;
use TalesFromADev\TailwindMerge\TailwindMerge;

class TailwindMergeServiceProvider extends BaseServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(TailwindMergeInterface::class, static function (): TailwindMerge {
            $config = config('tailwind-merge');
            return new TailwindMerge(
                additionalConfiguration: $config['merge_config'] ?? [],
                cache: ($config['cache']['enabled'] ?? true)
                    ? app('cache')->store($config['cache']['store'] ?? null)
                    : null,
            );
        });

        $this->app->alias(TailwindMergeInterface::class, 'tailwind-merge');
        $this->app->alias(TailwindMergeInterface::class, TailwindMerge::class);
    }

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/tailwind-merge.php' => config_path('tailwind-merge.php'),
            ]);
        }

        $this->registerBladeDirectives();
        $this->registerAttributesBagMacros();
    }

    protected function registerBladeDirectives(): void
    {
        Blade::directive('twMerge', fn (?string $expression): string => "<?php echo twMerge($expression); ?>");
    }

    protected function registerAttributesBagMacros(): void
    {
        ComponentAttributeBag::macro('twMerge', function (...$args): ComponentAttributeBag {
            /** @var ComponentAttributeBag $this */
            $this->offsetSet('class', resolve(TailwindMergeInterface::class)->merge($args, ($this->get('class', ''))));

            return $this;
        });

        ComponentAttributeBag::macro('twMergeFor', function (string $for, ...$args): ComponentAttributeBag {
            /** @var ComponentAttributeBag $this */

            /** @var TailwindMergeInterface $instance */
            $instance = resolve(TailwindMergeInterface::class);

            $attribute = 'class' . ($for !== '' ? ':' . $for : '');

            /** @var string $classes */
            $classes = $this->get($attribute, '');

            $this->offsetSet('class', $instance->merge($args, $classes));

            return $this->only('class');
        });

        ComponentAttributeBag::macro('withoutTwMergeClasses', function (): ComponentAttributeBag {
            /** @var ComponentAttributeBag $this */
            return $this->whereDoesntStartWith('class:');
        });
    }

    /**
     * @return array<class-string<\TalesFromADev\TailwindMerge\TailwindMergeInterface>>|string[]
     */
    public function provides(): array
    {
        return [
            TailwindMerge::class,
            TailwindMergeInterface::class,
            'tailwind-merge',
        ];
    }
}
