<?php

namespace App\Games\BrainCalc;

use function App\Engine\runGame;

const MIN_NUMBER = 0;
const MAX_NUMBER = 20;

function runBrainCalc()
{
    $tutorial = 'What is the result of the expression?';
    $gameLogic = "App\Games\BrainCalc\brainCalc";
    runGame($tutorial, $gameLogic);
}

function brainCalc()
{
    $operators = ['+', '-', '*'];
    $randOperator = array_rand($operators);
    $operation = $operators[$randOperator];
    $numOne = rand(MIN_NUMBER, MAX_NUMBER);
    $numTwo = rand(MIN_NUMBER, MAX_NUMBER);
    switch ($operation) {
        case '+':
            $question = "{$numOne} + {$numTwo}";
            $correctAnswer = (string)($numOne + $numTwo);
            break;
        case '-':
            $question = "{$numOne} - {$numTwo}";
            $correctAnswer = (string)($numOne - $numTwo);
            break;
        case '*':
            $question = "{$numOne} * {$numTwo}";
            $correctAnswer = (string)($numOne * $numTwo);
            break;
        default:
            exit('Sorry, an unexpected error has occurred');
    }
    return [$question, $correctAnswer];
}
