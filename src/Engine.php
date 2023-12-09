<?php

namespace App\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_ROUNDS = 3;

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
        default:
            exit("Sorry, we haven't come up with a game with that name yet. Come back next time :(");
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
    for ($i = 0; $i < NUMBER_OF_ROUNDS;) {
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
