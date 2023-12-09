<?php

namespace App\Games\BrainCalc;

const NUM_RAND_BEGIN_CALC = 0;
const NUM_RAND_END_CALC = 20;

function brainCalc()
{
    $operators = ['+', '-', '*'];
    $randOperator = array_rand($operators);
    $operation = $operators[$randOperator];
    $numOne = rand(NUM_RAND_BEGIN_CALC, NUM_RAND_END_CALC);
    $numTwo = rand(NUM_RAND_BEGIN_CALC, NUM_RAND_END_CALC);
    switch ($operation) {
        case '+':
            $question = "{$numOne} + {$numTwo}";
            $correctAnswer = ($numOne + $numTwo);
            break;
        case '-':
            $question = "{$numOne} - {$numTwo}";
            $correctAnswer = ($numOne - $numTwo);
            break;
        case '*':
            $question = "{$numOne} * {$numTwo}";
            $correctAnswer = ($numOne * $numTwo);
            break;
        default:
            exit('
            Sorry, an unexpected error has occurred');
            break;
    }
    return [$question, $correctAnswer];
}
