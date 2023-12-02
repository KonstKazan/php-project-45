<?php

namespace App\Src\Engine;

use function cli\line;
use function cli\prompt;

function defineGame(string $game)
{
    $tutorial = '';
    $gameLogic = '';
    switch ($game) {
        case 'even':
            $tutorial = 'Answer "yes" if the number is even, otherwise answer "no".';
            $gameLogic = "App\Games\BrainEven\brainEven";
            break;
        case 'calc':
            $tutorial = 'What is the result of the expression?';
            $gameLogic = "App\Games\BrainCalc\brainCalc";
            break;
        case 'gcd':
            $tutorial = 'Find the greatest common divisor of given numbers.';
            $gameLogic = "App\Games\BrainGcd\brainGcd";
            break;
        case 'progression':
            $tutorial = 'What number is missing in the progression?';
            $gameLogic = "App\Games\BrainProgression\brainProgression";
            break;
        case 'prime':
            $tutorial = 'Answer "yes" if given number is prime. Otherwise answer "no".';
            $gameLogic = "App\Games\BrainPrime\brainPrime";
            break;
    }
    return [$tutorial, $gameLogic];
}

function runGame(string $game)
{
    [$tutorial, $gameLogic] = defineGame($game);
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($tutorial);
    for ($i = 0; $i < 3;) {
        [$question, $correctAnswer] = $gameLogic();
        line("Question: %s", $question);
        $answer = prompt('Your answer: ');
        if ($answer == $correctAnswer) {
            $i++;
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
