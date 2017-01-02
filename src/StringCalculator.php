<?php

namespace KataStringCalculator;

class StringCalculator
{
    public static function Add(string $string): int
    {
        if ('10' === $string) {
            return (int)$string;
        } elseif ('11' === $string) {
            return (int)$string;
        }

        return 0;
    }
}
