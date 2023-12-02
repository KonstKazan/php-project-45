<?php

namespace App\Games\BrainCalc;

define("OP_RAND_BEGIN_CALC", 1);
define("OP_RAND_END_CALC", 3);
define("NUM_RAND_BEGIN_CALC", 0);
define("NUM_RAND_END_CALC", 20);

function brainCalc()
{
    $operation = rand(OP_RAND_BEGIN_CALC, OP_RAND_END_CALC);
    $numOne = rand(NUM_RAND_BEGIN_CALC, NUM_RAND_END_CALC);
    $numTwo = rand(NUM_RAND_BEGIN_CALC, NUM_RAND_END_CALC);
    switch ($operation) {
        case 1:
            $question = "{$numOne} + {$numTwo}";
            $correctAnswer = ($numOne + $numTwo);
            break;
        case 2:
            $question = "{$numOne} - {$numTwo}";
            $correctAnswer = ($numOne - $numTwo);
            break;
        case 3:
            $question = "{$numOne} * {$numTwo}";
            $correctAnswer = ($numOne * $numTwo);
            break;
    }
    return [$question, $correctAnswer];
}
