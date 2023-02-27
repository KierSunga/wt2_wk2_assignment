<!DOCTYPE HTML>
<html>
<body>
<?php
/* 
Please develop a PHP program with a function that can compute both Fahrenheit and Celsius values using the formula provided below.
*/

$int_val = 55;

//Fahrenheit to Celcius
function cel($num) {
    return ( $num - 32 ) * ( 5 / 9 ) ;
}

echo "$int_val °F is equivalent to " ;
echo cel($int_val); 
?>

<br>

<?php
//Celcius to Fahrenheit
function fah($num){
    return ( 9 / 5 * $num ) + 32;
}

echo "$int_val °C is equivalent to ";
echo fah($int_val);

?>
</body>
</html>