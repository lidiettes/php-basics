<?php

// Create a function that given two numbers returns the sum of both
function sum($num1, $num2) {
return $num1 + $num2 ;
}
echo "1 + 2 = ".sum(1,2);
echo '<br>';
echo '<br>';

// Create a function that given two numbers returns the multiplication of both
function multiply($num1, $num2){
    return $num1 * $num2;
}
echo "2 * 2 = " .multiply(2,2);
echo '<br>';
echo '<br>';

// Create a function that given two numbers returns the division of both
function divide($num1, $num2){
return $num1 / $num2;
}
echo "2 / 2 = " .divide(2,2);
echo '<br>';
echo '<br>';
// Create a function that, given two numbers and an operation (add, multiply or divide), returns the result of that operation.

function math($num1, $num2, $operator) {
    switch ($operator){
        case '+':
            return sum ($num1, $num2);
            break;
        case '-':
            return $num1 - $num2;
            break;
        case '*':
            return multiply ($num1, $num2);
            break;
        case '/':
            return divide ($num1, $num2);
            break;
        case '%':
            return $num1 % $num2;
            break;
        default:
        return 'does not exit';
        break;
    }
}
echo "10 % 2 = " .math(10,2, '%');
echo '<br>';
echo '<br>';
?>