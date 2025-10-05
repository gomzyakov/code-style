<?php

use Gomzyakov\CodeStyleFinder;
use PhpCsFixer\Finder as PhpCsFixerFinder;
use PHPUnit\Framework\TestCase;

class CodeStyleFinderTest extends TestCase
{
    public function test_method_return_array()
    {
        $directory = __DIR__ . '/../src';
        $finder    = CodeStyleFinder::createWithRoutes([$directory]);

        $this->assertInstanceOf(PhpCsFixerFinder::class, $finder);
    }
}
