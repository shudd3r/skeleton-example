# Shudd3r/Skeleton-Example
[![Latest Stable Version](https://poser.pugx.org/shudd3r/skeleton-example/version)](https://packagist.org/packages/shudd3r/skeleton-example)
[![PHP version](https://img.shields.io/packagist/php-v/shudd3r/skeleton-example.svg)](https://packagist.org/packages/shudd3r/skeleton-example)
[![LICENSE](https://img.shields.io/github/license/shudd3r/skeleton-example.svg?color=blue)](LICENSE)
### Package skeleton demo using [*Shudd3r/Skeletons*](https://github.com/shudd3r/skeletons)

Skeleton package built to illustrate how it can be managed by script that uses **shudd3r/skeletons** library.

### Installation
Install with [*Composer*](https://getcomposer.org/) as dev dependency of your project:
```bash
composer require --dev shudd3r/skeleton-example
```

### Basic Usage
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
