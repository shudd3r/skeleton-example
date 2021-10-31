# Shudd3r/Skeleton-Example
[![Latest Stable Version](https://poser.pugx.org/shudd3r/skeleton-example/version)](https://packagist.org/packages/shudd3r/skeleton-example)
[![PHP version](https://img.shields.io/packagist/php-v/shudd3r/skeleton-example.svg)](https://packagist.org/packages/shudd3r/skeleton-example)
[![LICENSE](https://img.shields.io/github/license/shudd3r/skeleton-example.svg?color=blue)](LICENSE)
### Example package skeleton using Shudd3r/Skeletons

Skeleton package built to show how it can be managed by script
built with [**shudd3r/skeletons**](https://github.com/shudd3r/skeletons)
library.

### Installation
Install with [Composer](https://getcomposer.org/) as dev dependency of your project:
```bash
composer require --dev shudd3r/skeleton-example
```

### Basic Usage
- Initialize package with skeleton files providing template
  replacement values through interactive shell:
  ```bash
  vendor/bin/shudd3r-skeleton -i init
  ```
- Validate project's consistency with skeleton (can be added to CI workflow):
  ```bash
  vendor/bin/shudd3r-skeleton check
  ```
- Update placeholders through interactive shell:
  ```bash
  vendor/bin/shudd3r-skeleton -i update
  ```
