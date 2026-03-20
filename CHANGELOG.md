# Release Notes

## [Unreleased](https://github.com/kalel1500/laravel-tailwind-merge/compare/v0.3.0-beta.1...master)

## [v0.3.0-beta.1](https://github.com/kalel1500/laravel-tailwind-merge/compare/v0.2.0-beta.1...v0.3.0-beta.1) - 2026-03-20

### ⚠️ Breaking Changes

* The package configuration structure has been updated.
* All Tailwind Merge-related options must now be defined under the `merge_config` key instead of the root configuration.

### Added

* New `cache` configuration section to control caching behavior:
  * `enabled`: to enable or disable caching.
  * `store`: specify the Laravel cache store to use (application's default store when `null`).

### Changed

* Separated configuration concerns:
  * `merge_config` now contains all options passed to the Tailwind Merge engine.
  * `cache` handles Laravel-specific caching configuration.

## [v0.2.0-beta.1](https://github.com/kalel1500/laravel-tailwind-merge/compare/v0.1.0-beta.1...v0.2.0-beta.1) - 2026-03-17

### ⚠️ BREAKING CHANGES

- **Removed customizable Blade directive:** The `blade_directive` option has been removed from the configuration file.
- **Fixed directive name:** The Blade directive is now exclusively `@twMerge`. If you used a custom name in a previous version, you must update your Blade files to use the default name.

### Changed

- **Service Provider refactor:** Replaced the `afterResolving` method with the `Blade::directive()` facade for directive registration. This ensures Laravel correctly recognizes the directive across all environments, resolving intermittent loading issues.

### Fixed

- **IDE Compatibility:** By fixing the directive name to `@twMerge`, editors (such as PhpStorm) can now identify and autocomplete the directive without additional configuration.
- **Registration Stability:** Fixed an issue where the directive was not being registered in time during certain application lifecycles.

## v0.1.0-beta.1 - 2026-03-17

Initial release.