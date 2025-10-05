<?php

use Gomzyakov\CodeStyleConfig;
use Mockery\Adapter\Phpunit\MockeryTestCase;
use PhpCsFixer\Config as PhpCsFixerConfig;
use PhpCsFixer\Finder as PhpCsFixerFinder;

class CodeStyleConfigTest extends MockeryTestCase
{
    public function test_method_return_array()
    {
        /** @var PhpCsFixerFinder $finder */
        $finder = Mockery::mock(PhpCsFixerFinder::class);

        $config = CodeStyleConfig::createWithFinder($finder);

        $this->assertInstanceOf(PhpCsFixerConfig::class, $config);
    }
}
