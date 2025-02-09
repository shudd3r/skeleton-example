# Shudd3r/Skeleton-Example
[![Latest Stable Version](https://poser.pugx.org/shudd3r/skeleton-example/version)](https://packagist.org/packages/shudd3r/skeleton-example)
[![PHP version](https://img.shields.io/packagist/php-v/shudd3r/skeleton-example.svg)](https://packagist.org/packages/shudd3r/skeleton-example)
[![LICENSE](https://img.shields.io/github/license/shudd3r/skeleton-example.svg?color=blue)](LICENSE)
### Package skeleton demo using [*Shudd3r/Skeletons*](https://github.com/shudd3r/skeletons)

Skeleton package built to illustrate how it can be managed by script that uses **shudd3r/skeletons** library.

### Installation
It is recommended to use it globally as an exacutable application.
To do that, you need to download `skeleton-example.phar` archive from the [latest release](https://github.com/shudd3r/skeleton-example/releases/latest)
asset files and place it in one of the operating system's `PATH` directories (read [more](#windows-executable) for Windows).

[![Download file](https://img.shields.io/badge/download-example--skeleton.phar-green)](https://github.com/shudd3r/skeleton-example/releases/latest/download/example-skeleton.phar)

During deployment process or for a small number of projects you can install this package
with [*Composer*](https://getcomposer.org/) as one of dev dependency:
```bash
composer require --dev shudd3r/skeleton-example
```
Note that using this method will require you to download this package for each project using the skeleton.

### Basic Usage
To use skeleton application, **run the script from the root directory of your project**.
If you installed it globally as `example-skeleton.phar` and made it executable by your operating system,
you can simply run `example-skeleton` instead of `vendor/bin/example-skeleton` in the examples below.

- Display help message with usage details (`help` command is optional):
  ```bash
  vendor/bin/example-skeleton help
  ```
- Initialize package with skeleton files providing template
  replacement values through interactive shell:
  ```bash
  vendor/bin/example-skeleton init
  ```
- Validate project's consistency with skeleton (can be added to CI workflow):
  ```bash
  vendor/bin/example-skeleton check
  ```
- Update placeholders through interactive shell or using provided argument:
  ```bash
  vendor/bin/example-skeleton update
  vendor/bin/example-skeleton update ns=UpdatedNamespace\Package
  ```
- Synchronize files with template:
  ```bash
  vendor/bin/example-skeleton sync
  ```

#### Windows executable
Windows doesn't support shebang parsing, so it will require additional `.bat` file
to make the script executable. You can create one with the following command:
```bash
echo @php "%~dp0example-skeleton.phar" %* > example-skeleton.bat
```
