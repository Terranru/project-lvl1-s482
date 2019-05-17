<?php
namespace BrainGames\Evenlib;

use function \cli\line;
use function \cli\prompt;

function even($random)
{
    if ($random % 2 === 0) {
        return 'yes';
    } else {
        return 'no';
    }
}

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i = 0; $i < 3; $i++) {
        $random = random_int(0, 15);
        line("Question: %s", $random);
        $answer = prompt('Your answer');
        if (even($random) == $answer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, even($random));
            line("Let's try again, %s!", $name);
            $i = 99;
        }
    }
    if ($i != 99) {
        line("Congratulations, %s!", $name);
    }

    return;
}
