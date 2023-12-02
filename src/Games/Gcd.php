<?php

namespace App\Games\BrainGcd;

define("NUM_RAND_BEGIN_GCD", 1);
define("NUM_RAND_END_GCD", 99);

function gcd(int $n, int $m)
{
    while (true) {
        if ($n == $m) {
            return $m;
        }
        if ($n > $m) {
            $n -= $m;
        } else {
            $m -= $n;
        }
    }
}

function brainGcd()
{
    $numOne = rand(NUM_RAND_BEGIN_GCD, NUM_RAND_END_GCD);
    $numTwo = rand(NUM_RAND_BEGIN_GCD, NUM_RAND_END_GCD);
    $question = "{$numOne} {$numTwo}";
    $correctAnswer = gcd($numOne, $numTwo);
    return [$question, $correctAnswer];
}
