<?php

namespace App\Games\Calc;

use function App\Engine\runGame;

const MIN_NUMBER = 0;
const MAX_NUMBER = 20;

function runBrainCalc()
{
    $tutorial = 'What is the result of the expression?';
    $gameLogic = "App\Games\Calc\brainCalc";
    runGame($tutorial, $gameLogic);
}

function calculator(int $numOne, int $numTwo, string $operation)
{
    switch ($operation) {
        case '+':
            return $numOne + $numTwo;
        case '-':
            return $numOne - $numTwo;
        case '*':
            return $numOne * $numTwo;
        default:
            exit('Sorry, an unexpected error has occurred');
    }
}

function brainCalc()
{
    $operators = ['+', '-', '*'];
    $randOperator = array_rand($operators);
    $operation = $operators[$randOperator];
    $numOne = rand(MIN_NUMBER, MAX_NUMBER);
    $numTwo = rand(MIN_NUMBER, MAX_NUMBER);
    $question = "{$numOne} {$operation} {$numTwo}";
    $correctAnswer = (string) calculator($numOne, $numTwo, $operation);
    return [$question, $correctAnswer];
}
