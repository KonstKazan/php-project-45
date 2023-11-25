<?php

namespace Php\Project\BrainCalc;

function brainCalc()
{
    $operation = rand(1, 3);
    $numOne = rand(1, 99);
    $numTwo = rand(1, 99);
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
