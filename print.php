<?php
// Generate an instruction that makes use of "echo"
echo "hello";
echo '<br>';
echo '<br>';

//Generate an instruction that makes use of "print"
print "ciao";
echo '<br>';
echo '<br>';

//Generate an instruction that makes use of "print_r", it is important that you assign a complex value to analyze its potential
$a = array ('a' => 'apple', 'b' => 'banana', 'c' => array ('x', 'y', 'z'));
print_r ($a);
echo '<br>';
echo '<br>';


?>