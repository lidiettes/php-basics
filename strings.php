<?php

// Print a text string
echo 'Hello';
echo '<br>';
echo '<br>';

// Print a text string that interpret variables
$a = 'world';
echo "Hello $a";
echo '<br>';
echo '<br>';

// Concatenate a previously declared variable in a text string
$b = 'Lidia';
echo "My name is $b";
echo '<br>';
echo '<br>';

// Execute the function that allows you to replace text in a string (case sensitive)
$c = 'My name is Lidia';
echo str_replace('Maria','Luisa', $c);
echo '<br>';
echo '<br>';

// Execute the function that allows you to replace text in a string (without taking into account upper / lower case)
$d = 'My name is Ana';
echo str_ireplace('Ana', 'Isa', $d);
echo '<br>';
echo '<br>';

// Execute the function that allows you to write a text N times
$e = 'Hola tomate, ';
echo str_repeat($e,5);
echo '<br>';
echo '<br>';

// Execute the function that allows to obtain the length of a text string
$f = 'Hola tomate';
echo strlen($f);
echo '<br>';
echo '<br>';

// Executes the function that allows to obtain the position of the first occurrence of a text within a text string
$g =  'Qué hay hoy de comer?';
echo strpos ($g, 'comer');
echo '<br>';
echo '<br>';

// Execute the function that allows a text string to be capitalized
$h = 'Hola tomate';
echo strtolower($h);
echo '<br>';
echo '<br>'; 

// Execute the function that allows you to transform a text string to lowercase
$i= 'HOLA TOMATITO';
echo strtolower ($i);
echo '<br>';
echo '<br>';

// Execute the function that allows to obtain a text substring from a given position
$j=  'Hola tomatito y patatita';
echo substr($j,16,20);
echo '<br>';
echo '<br>';

?>