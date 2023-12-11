<?php

namespace App\Games\BrainGcd;

use function App\Engine\runGame;

const NUM_RAND_BEGIN_GCD = 1;
const NUM_RAND_END_GCD = 99;

function runGcd()
{
    $tutorial = 'Find the greatest common divisor of given numbers.';
    $gameLogic = "App\Games\BrainGcd\brainGcd";
    runGame($tutorial, $gameLogic);
}

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
