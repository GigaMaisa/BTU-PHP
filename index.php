<?php
do {
    $num1 = readline("Type number here: ");
    while($num1>100){
        $num1 = readline("error. number above 100. try again: ");
    };
    $num2 = readline("Type number here: ");
    while($num2>100){
        $num2 = readline("error. number above 100. try again: ");
    };
    echo $num1*$num2 . "\n";
}while($num1 != 0 or $num2 != 0);
