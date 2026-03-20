# Release Notes

## [Unreleased](https://github.com/kalel1500/laravel-tailwind-merge/compare/v0.3.1-beta.1...master)

## [v0.3.1-beta.1](https://github.com/kalel1500/laravel-tailwind-merge/compare/v0.3.0-beta.1...v0.3.1-beta.1) - 2026-03-20

### Added

* Added `phpunit.xml` configuration to ensure all tests are properly discovered and executed.
* Introduced a dedicated cache store (`file_tw_merge`) for Tailwind Merge operations.
  <br>This store uses a separate directory inside Laravel's cache path to avoid polluting the default cache store and improve cache isolation.

### Changed

* Tests: 
  * Updated `tests/Pest.php` to align with Pest v3 structure and improve test discovery.
  * Reorganized and renamed test files for better consistency and maintainability.
* When using the `file` cache store, it is now internally mapped to the dedicated `file_tw_merge` store.
  <br>This ensures better performance and prevents excessive cache entries from mixing with the application's main cache.

### Fixed

* Fixed an issue where some tests were not being executed due to incorrect test discovery configuration.
* Fixed an issue where the package configuration was not being merged into the Laravel application if the config file was not published.
  <br>The service provider now correctly calls `mergeConfigFrom`, ensuring that default configuration values are properly loaded and environment variables defined in the config file are respected.
  <br>This resolves inconsistent behavior when using the package without publishing its configuration.

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