# Code-style configuration for `php-cs-fixer`

This package allows sharing identical [php-cs-fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer) formatting rules across all of your projects without copy-and-pasting configuration files.

## Quickstart

### Step 1 of 3

Install [`friendsofphp/php-cs-fixer`](https://github.com/FriendsOfPHP/PHP-CS-Fixer) & this package via Composer:

```sh
composer require --dev friendsofphp/php-cs-fixer gomzyakov/code-style
```

### Step 2 of 3

Then create file `.php-cs-fixer.dist.php` at the root of your project with following contents:

```php
<?php

use Gomzyakov\CodeStyleFinder;
use Gomzyakov\CodeStyleConfig;

// Routes for analysis with `php-cs-fixer`
$routes = ['./src', './tests'];

return CodeStyleConfig::createWithFinder(CodeStyleFinder::createWithRoutes($routes));
```

Change the value of `$routes` depending on where your project's source code is.

### Step 3 of 3

**And that's it!** You can now find code style violations with following command:

```sh
./vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php --dry-run
```

And then completely fix them all with:

```sh
./vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.dist.php
```

## Configuration

You must pass a set of routes to the `CodeStyleFinder::createWithRoutes()` call. For example, for [Laravel](https://laravel.com) projects, this would be:

```php
CodeStyleFinder::createWithRoutes(['./app', './config', './database', './routes', './tests'])
```

Also, you can pass a custom set of rules to the `CodeStyleConfig::createWithFinder()` call:

```php
CodeStyleConfig::createWithFinder($finder, [
    '@PHP81Migration'   => true,
    'array_indentation' => false
])
```

## Support

If you find any package errors, please, [make an issue](https://github.com/gomzyakov/code-style/issues) in current repository.

## License

This is open-sourced software licensed under the [MIT License](https://github.com/gomzyakov/code-style/blob/main/LICENSE).

## Special thanks

- https://github.com/FriendsOfPHP/PHP-CS-Fixer
- https://mlocati.github.io/php-cs-fixer-configurator/
