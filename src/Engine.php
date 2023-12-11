<?php

namespace App\Engine;

use function cli\line;
use function cli\prompt;

const NUMBER_OF_ROUNDS = 3;

function runGame(string $tutorial, string $gameLogic)
{
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
