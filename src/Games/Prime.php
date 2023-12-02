<?php

namespace App\Games\BrainPrime;

function primeCheck(int $number)
{
    if ($number == 1) {
        return 'yes';
    }
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return 'no';
        }
    }
    return 'yes';
}

function BrainPrime()
{
    define("NUM_RAND_BEGIN", 1);
    define("NUM_RAND_END", 3001);
    $num = rand(NUM_RAND_BEGIN, NUM_RAND_END);
    $question = $num;
    $correctAnswer = primeCheck($num);
    return [$question, $correctAnswer];
}
