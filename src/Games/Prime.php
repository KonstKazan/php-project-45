<?php

namespace App\Games\BrainPrime;

const NUM_RAND_BEGIN_PRIME = 1;
const NUM_RAND_END_PRIME = 3001;

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
    $num = rand(NUM_RAND_BEGIN_PRIME, NUM_RAND_END_PRIME);
    $question = $num;
    $correctAnswer = primeCheck($num);
    return [$question, $correctAnswer];
}
