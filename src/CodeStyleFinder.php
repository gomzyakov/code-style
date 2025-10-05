<?php

declare(strict_types = 1);

namespace Gomzyakov;

use PhpCsFixer\Finder as PhpCsFixerFinder;

class CodeStyleFinder
{
    /**
     * Creates a new CodeStyleFinder.
     *
     * @param array<string> $routes
     *
     * @return PhpCsFixerFinder
     */
    public static function createWithRoutes(array $routes): PhpCsFixerFinder
    {
        return PhpCsFixerFinder::create()
            ->in($routes)
            ->name('*.php')
            ->notName('*.blade.php')
            ->ignoreDotFiles(true)
            ->ignoreVCS(true);
    }
}
