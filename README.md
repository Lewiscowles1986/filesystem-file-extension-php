# filesystem-file-extension-php
PHP File Extension Utility Library

[![Build Status](https://travis-ci.org/Lewiscowles1986/filesystem-file-extension-php.svg?branch=master)](https://travis-ci.org/Lewiscowles1986/filesystem-file-extension-php)
[![Coverage Status](https://coveralls.io/repos/github/Lewiscowles1986/filesystem-file-extension-php/badge.svg?branch=master)](https://coveralls.io/github/Lewiscowles1986/filesystem-file-extension-php?branch=master)
[![Latest Version](https://img.shields.io/github/release/Lewiscowles1986/filesystem-file-extension-php.svg)](https://github.com/Lewiscowles1986/filesystem-file-extension-php/releases)
[![GitHub License](https://img.shields.io/badge/license-GPLv3-yellow.svg)](https://raw.githubusercontent.com/Lewiscowles1986/filesystem-file-extension-php/master/LICENSE)

## Details

### Runtime & Environment

#### Production

This should work with any [security supported version of PHP 7.x](https://www.php.net/supported-versions.php) line

#### Development

Additional requirements are required for development

* Composer
* doxygen
* xDebug

### Namespaces

`lewiscowles\Utils\FileSystem\Extension`

#### Methods provided

```php
fixExtensionIfNeeded (string $originalExtension, string $filename) : string
```

```php
getExtensionFromFilename (string $filename) : string
```

```php
hasNoExtension (string $filename) : bool
```

```php
isExtensionTooShort (string $extension) : bool
```

```php
isDualPartExtension (string $extension) : bool
```

```php
isDotFile (string $filename) : bool
```

## Purpose

This package was created solely for the purpose of facilitating the WordPress SVG plugin. It is my hope that it provides other benefit, but that has not been the case.

If you spot a bug, or have a feature-request or improvement, please [create an issue](/Lewiscowles1986/filesystem-file-extension-php/issues).

## Contributing

Documentation and Tests must be provided for any contribution. If this is a problem due to lack of knowledge or experience; please make an issue and submit a draft PR to ask for help. This should be a small enough library that learning can be helped.

At all times a polite and courteous tone should be used when communicating, contributing or interacting with this repository.
