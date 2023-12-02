<?php

namespace App\Games\BrainCalc;

function brainCalc()
{
    define("OP_RAND_BEGIN", 1);
    define("OP_RAND_END", 3);
    define("NUM_RAND_BEGIN", 0);
    define("NUM_RAND_END", 20);
    $operation = rand(OP_RAND_BEGIN, OP_RAND_END);
    $numOne = rand(NUM_RAND_BEGIN, NUM_RAND_END);
    $numTwo = rand(NUM_RAND_BEGIN, NUM_RAND_END);
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
