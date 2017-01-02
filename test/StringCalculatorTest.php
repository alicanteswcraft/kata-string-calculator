<?php

namespace KataStringCalculator\Test;

use KataStringCalculator\StringCalculator;

class StringCalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function test_add_with_empty_string_should_return_0()
    {
        $this->assertEquals(0, StringCalculator::Add(''));
    }

    public function test_add_with_a_number_should_return_the_same_number()
    {
        $this->assertEquals(10, StringCalculator::Add('10'));
    }
}
