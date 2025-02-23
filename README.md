# CodeIgniter Coding Standard

[![Unit Tests](https://github.com/CodeIgniter/coding-standard/actions/workflows/test-phpunit.yml/badge.svg)](https://github.com/CodeIgniter/coding-standard/actions/workflows/test-phpunit.yml)
[![Coding Standards](https://github.com/CodeIgniter/coding-standard/actions/workflows/test-coding-standards.yml/badge.svg)](https://github.com/CodeIgniter/coding-standard/actions/workflows/test-coding-standards.yml)
[![PHPStan Static Analysis](https://github.com/CodeIgniter/coding-standard/actions/workflows/test-phpstan.yml/badge.svg)](https://github.com/CodeIgniter/coding-standard/actions/workflows/test-phpstan.yml)
[![PHPStan level](https://img.shields.io/badge/PHPStan-max%20level-brightgreen)](phpstan.neon.dist)
[![Coverage Status](https://coveralls.io/repos/github/CodeIgniter/coding-standard/badge.svg?branch=develop)](https://coveralls.io/github/CodeIgniter/coding-standard?branch=develop)
[![Latest Stable Version](http://poser.pugx.org/codeigniter/coding-standard/v)](//packagist.org/packages/codeigniter/coding-standard)
[![License](https://img.shields.io/github/license/codeigniter/coding-standard)](LICENSE)
[![Total Downloads](http://poser.pugx.org/codeigniter/coding-standard/downloads)](//packagist.org/packages/codeigniter/coding-standard)

This library holds the official coding standards of CodeIgniter based
on [PHP CS Fixer][1] and powered by [Nexus CS Config][2].

## Installation

You can add this library as a local, per-project dependency to your project
using [Composer](https://getcomposer.org/):

    composer require codeigniter/coding-standard

If you only need this library during development, for instance to run your project's test suite,
then you should add it as a development-time dependency:

    composer require --dev codeigniter/coding-standard

## Setup

To start, let us create a `.php-cs-fixer.dist.php` file at the root of your project.

```php
<?php

use CodeIgniter\CodingStandard\CodeIgniter4;
use Nexus\CsConfig\Factory;

return Factory::create(new CodeIgniter4())->forProjects();

```

This minimal setup will return a default instance of `PhpCsFixer\Config` containing all rules applicable
for the CodeIgniter organization.

Then, in your terminal, run the following command:

```console
$ vendor/bin/php-cs-fixer fix --verbose
```

## Adding License Headers

The default setup will not configure a license header in files. License headers can be especially useful
for library authors to assert copyright. To add license headers in your PHP files, you can simply provide
your name and name of library. Optionally, you can also provide your email and starting license year.

```diff
 <?php

 use CodeIgniter\CodingStandard\CodeIgniter4;
 use Nexus\CsConfig\Factory;

-return Factory::create(new CodeIgniter4())->forProjects();
+return Factory::create(new CodeIgniter4())->forLibrary(
+    'CodeIgniter 4 framework',
+    'CodeIgniter Foundation',
+    'admin@codeigniter.com',
+    2021,
+);

```

## Providing Overriding Rules and Options

The list of enabled rules can be found in the [`CodeIgniter\CodingStandard\CodeIgniter4`][3] class. If you
feel the rule is not applicable to you or you want to modify it, you can do so by providing an array of
overriding rules to the second parameter of `Factory::create()`.

Similarly, you can further modify the `PhpCsFixer\Config` instance returned by using the available options.
All available options are fully supported by [Nexus CS Config][2] and abstracted by simply providing an
array of key-value pairs in the third parameter of `Factory::create()`.

```diff
 <?php

 use CodeIgniter\CodingStandard\CodeIgniter4;
 use Nexus\CsConfig\Factory;

-return Factory::create(new CodeIgniter4())->forProjects();
+return Factory::create(new CodeIgniter4(), [], [
+    'usingCache' => false,
+])->forProjects();

```

You can check out this library's own [`.php-cs-fixer.dist.php`][4] for inspiration on how it is done.
For more detailed documentation on all available options, you can check [here][2].

## Contributing

All forms of contributions are welcome!

Since the rules here will be propagated and used within the CodeIgniter organization, all proposed rules
and modifications to existing rules should have a proof-of-concept (POC) PR sent first to
the [CodeIgniter4][5] repository with possible changes to the code styles applied there. Once accepted
there, you can send in a PR here to apply those rules.

## License

This work is open-sourced under the MIT license.

[1]: https://github.com/FriendsOfPHP/PHP-CS-Fixer
[2]: https://github.com/NexusPHP/cs-config
[3]: src/CodeIgniter4.php
[4]: .php-cs-fixer.dist.php
[5]: https://github.com/codeigniter4/CodeIgniter4
