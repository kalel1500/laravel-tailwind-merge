### packages:
* https://github.com/gehrisandro/tailwind-merge-laravel
* https://github.com/gehrisandro/tailwind-merge-php

Tailwind CSS v4 pull request: https://github.com/gehrisandro/tailwind-merge-php/pull/17

### Comments:

#### 1

> If anyone is interested in using tailwindmerge for laravel and wants tailwindcss v4 support, I created a package similar to this one that handles that, I made sure the API is similar: https://github.com/Fa-BRAIK/lumen-tw

#### 2

> For those of you interesting to have support for TailwindCSS v4+, I just release a fork supporting it: [tales-from-a-dev/tailwind-merge-php](https://github.com/tales-from-a-dev/tailwind-merge-php)
> <br><br>Read the [UPGRADE](https://github.com/tales-from-a-dev/tailwind-merge-php/blob/main/UPGRADE.md) guide if you are considering switching, as this is an extremely modified fork.


### For IA

Quería combinar clases de tailwind en componentes de Laravel.

Primero lo intenté hacer manualmente, pero era un dolor de cabeza, asi que busque una librería que lo hiciera por mí, y encontré "gehrisandro/tailwind-merge-laravel" que por debajo usa otra del mismo creador llamada "gehrisandro/tailwind-merge-php".

El problema es que "gehrisandro/tailwind-merge-php" solo acepta la version de Tailwind CSS v3 y yo uso la version de Tailwind CSS v4.

Por lo que encontré un fork de "gehrisandro/tailwind-merge-php" llamado "tales-from-a-dev/tailwind-merge-php" que soporta Tailwind CSS v4.

Pero como solo es para php nativo me tuve que crear mi propio wrapper para Laravel. Entonces cree "kalel1500/laravel-tailwind-merge" y cogí la base de "gehrisandro/tailwind-merge-laravel" y la adapte para que use "tales-from-a-dev/tailwind-merge-php" en vez de "gehrisandro/tailwind-merge-php".

Hasta aqui todo bien y funciona.

Lo que pasa es que "gehrisandro/tailwind-merge-laravel" en el archivo de configuración de Laravel lo trata como si todo lo que hay dentro es la config que se le pasa a la clase TailwindMerge (en mi caso ahora a la de "TalesFromADev\TailwindMerge\TailwindMerge")

A partir de ahora "gehrisandro/tailwind-merge-laravel" lo llamo "original" y a mi fork "adaptación".

Original:
    $this->app->singleton(TailwindMergeContract::class, static fn (): TailwindMerge => TailwindMerge::factory()
        ->withConfiguration(config('tailwind-merge', []))
        ->withCache(app('cache')->store()) // @phpstan-ignore-line
        ->make());

Mi adaptacion:
    $this->app->singleton(TailwindMergeInterface::class, static function (): TailwindMerge {
        return new TailwindMerge(
            additionalConfiguration: config('tailwind-merge.merge_config', []),
            cache                  : app('cache')->store(),
        );
    });
