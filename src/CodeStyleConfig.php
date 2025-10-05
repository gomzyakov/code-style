<?php

declare(strict_types = 1);

namespace Gomzyakov;

use PhpCsFixer\Config as PhpCsFixerConfig;
use PhpCsFixer\ConfigInterface;
use PhpCsFixer\Finder as PhpCsFixerFinder;
use PhpCsFixer\Runner\Parallel\ParallelConfigFactory;

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
            ->setParallelConfig(ParallelConfigFactory::detect())
            ->setFinder($finder)
            ->setRules(CodeStyleRules::getRules($overwritten_rules))
            ->setRiskyAllowed(false)
            ->setUsingCache(false);
    }
}
