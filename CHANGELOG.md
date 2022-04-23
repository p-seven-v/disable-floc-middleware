# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased](https://github.com/p-seven-v/disable-floc-middleware/compare/1.1.1...master)

## [1.1.1 - 2022-03-23](https://github.com/p-seven-v/disable-floc-middleware/compare/1.1.0...1.1.1)

### Changed
- Added composer.lock as export-ignore to .gitattributes

## [1.1.0 - 2022-03-23](https://github.com/p-seven-v/disable-floc-middleware/compare/1.0.5...1.1.0)

### Changed
- Minimum PHP version is 7.4

## [1.0.5 - 2022-03-23](https://github.com/p-seven-v/disable-floc-middleware/compare/1.0.4...1.0.5)

### Added
- Added `provide` section, marking package as `psr/http-server-middleware-implementation`

## [1.0.4 - 2022-01-12](https://github.com/p-seven-v/disable-floc-middleware/compare/1.0.3...1.0.4)

### Changed
- Limited what minor versions of PHP 8 this package can be used with 

## [1.0.3 - 2021-07-15](https://github.com/p-seven-v/disable-floc-middleware/compare/1.0.2...1.0.3)

### Changed
- Moved `symfony/polyfill-php73` dependency from `require` to `require-dev`

## [1.0.2 - 2021-05-18](https://github.com/p-seven-v/disable-floc-middleware/compare/1.0.1...1.0.2)

### Removed
- Removed `composer.lock` file

## [1.0.1 - 2021-05-18](https://github.com/p-seven-v/disable-floc-middleware/compare/1.0.0...1.0.1)

### Added 
- Added `.gitattributes` to decrease dist

## 1.0.0 - 2021-05-08

### Added
- Added PSR-15 `DisableFlocMiddleware`
