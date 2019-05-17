<?php
namespace BrainGames\Evenlib;

use function \cli\line;
use function \cli\prompt;

function even($answer)
{
    if ($answer % 2 === 0) {
        return 'yes';
    }
    else {
        return 'no';
    }
}

function run()
{
    line('Welcome to the Brain Game!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    for ($i=0; $i < 3; $i++) { 
        $random = random_int(0, 15);
        line("Question: %s", $random);
        $answer = prompt('Your answer');
    }


    return;
}
