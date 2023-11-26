<?php

namespace Php\Project\BrainPrime;

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
    $num = rand(1, 3001);
    $question = $num;
    $correctAnswer = primeCheck($num);
    return [$question, $correctAnswer];
}
