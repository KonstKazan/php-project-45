<?php

namespace Php\Project\Engine;

use function cli\line;
use function cli\prompt;

function defineGame($game)
{
    $tutorial = '';
    $gameLogic = '';
    switch ($game) {
        case 'even':
            $tutorial = 'Answer "yes" if the number is even, otherwise answer "no".';
            $gameLogic = "Php\Project\BrainEven\brainEven";
            break;
        case 'calc':
            $tutorial = 'What is the result of the expression?';
            $gameLogic = "Php\Project\BrainCalc\brainCalc";
    }
    return [$tutorial, $gameLogic];
}

function runGame($game)
{
    [$tutorial, $gameLogic] = defineGame($game);
    line('Welcome to the Brain Game!');
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
