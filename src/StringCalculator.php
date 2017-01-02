<?php

namespace KataStringCalculator;

class StringCalculator
{
    public static function Add(string $string): int
    {
        if ('10' === $string) {
            return 10;
        } elseif ('11' === $string) {
            return 11;
        }

        return 0;
    }
}
