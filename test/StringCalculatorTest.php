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
        $this->assertEquals(11, StringCalculator::Add('11'));
    }

    public function test_add_with_two_numbers_should_return_the_sum()
    {
        $this->assertEquals(4, StringCalculator::Add('3,1'));

        $this->assertEquals(14, StringCalculator::Add('3,11'));
    }

    public function test_add_with_multiple_numbers_should_return_the_sum()
    {
        $this->assertEquals(8, StringCalculator::Add('3,1,4'));

        $this->assertEquals(8, StringCalculator::Add("3\n1,4"));
    }

    public function test_should_recognize_custom_delimiters()
    {
        $this->assertEquals(4, StringCalculator::Add('//;3;1'));
    }
}
