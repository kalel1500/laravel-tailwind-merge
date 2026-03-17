# Release Notes

## [Unreleased](https://github.com/kalel1500/laravel-tailwind-merge/compare/v0.2.0-beta.1...master)

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