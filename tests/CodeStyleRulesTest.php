<?php

use Gomzyakov\CodeStyleRules;
use PHPUnit\Framework\TestCase;

class CodeStyleRulesTest extends TestCase
{
    public function test_method_return_array()
    {
        $rules = CodeStyleRules::getRules();

        $this->assertIsArray($rules);
    }

    public function test_merge_overwritten_rules()
    {
        $rules = CodeStyleRules::getRules();

        // Check array-rule before replace
        $this->assertSame(
            [
                'default'   => 'align_single_space_minimal',
                'operators' => [
                    '='  => 'align_single_space',
                    '=>' => 'align_single_space',
                ],
            ],
            $rules['binary_operator_spaces']
        );

        $overwritten_rules = ['binary_operator_spaces' => ['default' => 'foo']];
        $rules             = CodeStyleRules::getRules($overwritten_rules);

        // Check array-rule after replace
        $this->assertSame(
            [
                'default'   => 'foo', // <-- Replaced rule
                'operators' => [
                    '='  => 'align_single_space',
                    '=>' => 'align_single_space',
                ],
            ],
            $rules['binary_operator_spaces']
        );
    }
}
