<?php

namespace KataStringCalculator\Test;

use KataStringCalculator\StringCalculator;

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function test_add_with_empty_string_should_return_0()
    {
        $this->assertEquals(0, StringCalculator::Add(''));
    }
}
