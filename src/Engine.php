<?php

namespace App\Engine;

use function App\Cli\greetings;
use function cli\line;
use function cli\prompt;

const NUMBER_OF_ROUNDS = 3;

function runGame(string $tutorial, callable $runGameLogic)
{
    $name = greetings();
    line($tutorial);
    for ($i = 0; $i < NUMBER_OF_ROUNDS; $i++) {
        [$question, $correctAnswer] = $runGameLogic();
        line("Question: %s", $question);
        $answer = prompt('Your answer: ');
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line("Congratulations, %s!", $name);
}
