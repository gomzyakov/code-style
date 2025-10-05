<?php

declare(strict_types = 1);

namespace Gomzyakov;

use PhpCsFixer\Config as PhpCsFixerConfig;
use PhpCsFixer\ConfigInterface;
use PhpCsFixer\Finder as PhpCsFixerFinder;

class CodeStyleConfig
{
    /**
     * Creates a new CodeStyleConfig.
     *
     * @param PhpCsFixerFinder                         $finder
     * @param array<string, array<string, mixed>|bool> $overwritten_rules
     *
     * @return ConfigInterface
     */
    public static function createWithFinder(PhpCsFixerFinder $finder, array $overwritten_rules = []): ConfigInterface
    {
        return (new PhpCsFixerConfig())
            ->setFinder($finder)
            ->setRules(CodeStyleRules::getRules($overwritten_rules))
            ->setRiskyAllowed(false)
            ->setUsingCache(false);
    }
}
