<?php

declare(strict_types=1);

use Gomzyakov\CodeStyleFinder;
use Gomzyakov\CodeStyleConfig;

// Routes for analysis with `php-cs-fixer`
$routes = ['./src', './tests'];

return CodeStyleConfig::createWithFinder(CodeStyleFinder::createWithRoutes($routes));
